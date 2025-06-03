<?php

namespace App\Services;

use App\Models\Stock;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class StockService
{

    private $baseUrl;
    private $apiKey;
    private const CACHE_TTL = 60;

    public function __construct()
    {
        $this->baseUrl = config('services.finnhub.base_url');
        $this->apiKey = config('services.finnhub.api_key');
    }


    public function fetchStockData(array $symbols, bool $forceRefresh = false)
    {
        $allPrices = Cache::get('stock_prices', []);
        $stocks = [];

        foreach ($symbols as $symbol) {
            if (isset($allPrices[$symbol]) && !$forceRefresh) {
                $stocks[$symbol] = $allPrices[$symbol];
            } else {
                $stock = Stock::where('symbol', $symbol)->first();
                $stocks[$symbol] = $stock && $stock->last_updated && $stock->last_updated->gt(now()->subMinutes(5))
                    ? $stock->toArray()
                    : ($stock?->toArray() ?? ['symbol' => $symbol, 'price' => null, 'last_updated' => null]);
            }
        }

        return array_values($stocks);
    }

    public function fetchStockDataWithApi(array $symbols)
    {
        $stocks = [];
        foreach ($symbols as $symbol) {
            $stockData = $this->getStockFromApi($symbol);
            if ($stockData) {
                $stocks[$symbol] = $stockData;
                Cache::put("stock_data_{$symbol}", $stockData, self::CACHE_TTL);
            }
        }
        return array_values($stocks);
    }

    private function getStockFromApi(string $symbol)
    {
        try {
            $response = Http::withHeaders([
                'X-Finnhub-Token' => $this->apiKey
            ])->get("{$this->baseUrl}/quote", [
                'symbol' => $symbol
            ]);

            if (!$response->successful()) {
                Log::error("Failed to fetch quote for {$symbol}: " . $response->body());
                return null;
            }

            $data = $response->json();

            // Check if we have valid data
            if (!isset($data['c']) || !isset($data['pc']) || !isset($data['t'])) {
                Log::error("Invalid data structure for {$symbol}");
                return null;
            }

            // Calculate percentage change
            $currentPrice = round((float)$data['c'], 2);
            $previousClose = (float)$data['pc'];
            $change24h = $previousClose ? round((($currentPrice - $previousClose) / $previousClose) * 100, 2) : 0;

            // Store in database
            Stock::updateOrCreate(
                ['symbol' => $symbol],
                [
                    'price' => $currentPrice,
                    'volume' => (int)$data['t'],
                    'change_24h' => $change24h,
                    'last_updated' => now(),
                ]
            );

            return [
                'symbol' => $symbol,
                'price' => $currentPrice,
                'volume' => (int)$data['t'],
                'change_24h' => $change24h,
                'last_updated' => now(),
            ];

        } catch (\Exception $e) {
            Log::error("API request failed for {$symbol}: " . $e->getMessage());
            return null;
        }
    }


}
