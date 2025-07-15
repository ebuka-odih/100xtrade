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

        $symbols = [
            // Technology
            'AAPL', 'MSFT', 'GOOGL', 'GOOG', 'AMZN', 'META', 'NVDA', 'TSLA', 'NFLX', 'AMD', 'INTC', 'ADBE', 'CRM', 'CSCO', 'ORCL', 'QCOM', 'TXN', 'INTU', 'NOW', 'PLTR', 'ISRG',
            // Financial Services
            'JPM', 'BAC', 'WFC', 'GS', 'MS', 'BLK', 'AXP', 'MA', 'V', 'USB', 'BK', 'SCHW', 'COF', 'MET', 'SPG',
            // Healthcare
            'JNJ', 'PFE', 'ABBV', 'ABT', 'UNH', 'LLY', 'BMY', 'AMGN', 'GILD', 'MDT', 'TMO', 'DHR',
            // Consumer Discretionary
            'HD', 'LOW', 'DIS', 'MCD', 'SBUX', 'NKE', 'TGT', 'BKNG', 'ABNB',
            // Consumer Staples
            'PG', 'KO', 'PEP', 'COST', 'WMT', 'MDLZ', 'PM', 'CL', 'MO',
            // Energy
            'XOM', 'CVX', 'COP',
            // Industrials
            'BA', 'CAT', 'GE', 'HON', 'MMM', 'RTX', 'LMT', 'GD', 'EMR', 'DE', 'UPS', 'FDX', 'UNP',
            // Communication Services
            'VZ', 'T', 'TMUS', 'CMCSA', 'CHTR',
            // Materials
            'LIN',
            // Utilities
            'DUK', 'NEE', 'SO',
            // Real Estate
            'AMT',
            // ETFs (keeping existing ones)
            'SPY', 'QQQ', 'IWM'
        ];

        $stockData = $this->stockService->fetchStockDataWithApi($symbols);
        Cache::put('stock_prices', collect($stockData)->pluck(null, 'symbol')->all(), 60);
        $this->info('Stock prices updated successfully.');
    }

}
