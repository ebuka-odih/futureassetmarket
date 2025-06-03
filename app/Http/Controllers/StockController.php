<?php

namespace App\Http\Controllers;


use App\Models\Stock;
use App\Services\StockService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    protected $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }


    public function index()
    {
        // Define the stock list
        $symbols = ['AAPL', 'GOOGL', 'MSFT', 'AMZN', 'META', 'TSLA','NFLX', 'NVDA', 'AMD',
            'INTC', 'PYPL', 'DIS', 'V', 'MA', 'JPM', 'GS', 'BA', 'XOM', 'WMT'];

        // Fetch cached prices
        $stockData = $this->stockService->fetchStockData($symbols);
        $stockPrices = collect($stockData)->pluck('price', 'symbol');

        // Fetch Stock model instances
        $stocks = Stock::whereIn('symbol', $symbols)->get();

        // Optionally merge latest prices into the Stock instances
        $stocks->each(function ($stock) use ($stockPrices) {
            $stock->current_price = $stockPrices[$stock->symbol] ?? $stock->price;
        });

        $user = Auth::user();
        return view('dashboard.stock.index', compact('stocks', 'user'));
    }


}
