<?php

namespace App\Console\Commands;

use App\Http\Controllers\BuyStockController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StockController;
use App\Services\StockService;
use Illuminate\Console\Command;

class CheckLimitOrders extends Command
{
    protected $signature = 'orders:check-limits';
    protected $description = 'Check and fill pending limit orders';

    protected $stockController;
    protected $stockApiService;

    public function __construct(BuyStockController $buyStockController, StockService $stockService)
    {
        parent::__construct();
        $this->stockController = $buyStockController;
        $this->stockApiService = $stockService;
    }

    public function handle()
    {
        $this->info('Checking limit orders...');
        $this->stockController->checkLimitOrders($this->stockApiService);
        $this->info('Finished checking limit orders.');
    }


}
