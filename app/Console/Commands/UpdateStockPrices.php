<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\StockService;
use App\Models\Stock;
use Illuminate\Support\Facades\Cache;

class UpdateStockPrices extends Command
{
    protected $signature = 'stocks:update-prices';
    protected $description = 'Update stock prices in the background';

    protected $stockService;

    public function __construct(StockService $stockService)
    {
        parent::__construct();
        $this->stockService = $stockService;
    }

    public function handle()
    {
        $symbols = ['AAPL', 'GOOGL', 'MSFT', 'AMZN', 'META', 'TSLA', 'NFLX', 'NVDA', 'AMD',
                    'INTC', 'PYPL', 'DIS', 'V', 'MA', 'JPM', 'GS', 'BA', 'XOM', 'WMT'];

        $stockData = $this->stockService->fetchStockDataWithApi($symbols);
        Cache::put('stock_prices', collect($stockData)->pluck(null, 'symbol')->all(), 60);
        $this->info('Stock prices updated successfully.');
    }
    

}
