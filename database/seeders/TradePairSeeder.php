<?php

namespace Database\Seeders;

use App\Models\TradePair;
use Illuminate\Database\Seeder;

class TradePairSeeder extends Seeder
{
    public function run(): void
    {
        // Stock pairs - comprehensive list from UpdateStockPrices command
        $stocks = [
            // Technology
            ['symbol' => 'AAPL', 'name' => 'Apple Inc.', 'base_currency' => 'AAPL', 'quote_currency' => 'USD', 'current_price' => 150.00, 'change_24h' => 2.5, 'volume_24h' => 50000000],
            ['symbol' => 'MSFT', 'name' => 'Microsoft Corporation', 'base_currency' => 'MSFT', 'quote_currency' => 'USD', 'current_price' => 300.00, 'change_24h' => 1.8, 'volume_24h' => 30000000],
            ['symbol' => 'GOOGL', 'name' => 'Alphabet Inc.', 'base_currency' => 'GOOGL', 'quote_currency' => 'USD', 'current_price' => 2800.00, 'change_24h' => -0.5, 'volume_24h' => 15000000],
            ['symbol' => 'AMZN', 'name' => 'Amazon.com Inc.', 'base_currency' => 'AMZN', 'quote_currency' => 'USD', 'current_price' => 3200.00, 'change_24h' => 3.2, 'volume_24h' => 25000000],
            ['symbol' => 'TSLA', 'name' => 'Tesla Inc.', 'base_currency' => 'TSLA', 'quote_currency' => 'USD', 'current_price' => 800.00, 'change_24h' => 5.5, 'volume_24h' => 40000000],
            ['symbol' => 'META', 'name' => 'Meta Platforms Inc.', 'base_currency' => 'META', 'quote_currency' => 'USD', 'current_price' => 350.00, 'change_24h' => -1.2, 'volume_24h' => 20000000],
            ['symbol' => 'NVDA', 'name' => 'NVIDIA Corporation', 'base_currency' => 'NVDA', 'quote_currency' => 'USD', 'current_price' => 450.00, 'change_24h' => 4.8, 'volume_24h' => 35000000],
            ['symbol' => 'NFLX', 'name' => 'Netflix Inc.', 'base_currency' => 'NFLX', 'quote_currency' => 'USD', 'current_price' => 500.00, 'change_24h' => 2.1, 'volume_24h' => 12000000],
            ['symbol' => 'AMD', 'name' => 'Advanced Micro Devices', 'base_currency' => 'AMD', 'quote_currency' => 'USD', 'current_price' => 120.00, 'change_24h' => 3.7, 'volume_24h' => 28000000],
            ['symbol' => 'INTC', 'name' => 'Intel Corporation', 'base_currency' => 'INTC', 'quote_currency' => 'USD', 'current_price' => 50.00, 'change_24h' => -0.8, 'volume_24h' => 22000000],
            ['symbol' => 'CRM', 'name' => 'Salesforce Inc.', 'base_currency' => 'CRM', 'quote_currency' => 'USD', 'current_price' => 200.00, 'change_24h' => 1.5, 'volume_24h' => 18000000],
            ['symbol' => 'ORCL', 'name' => 'Oracle Corporation', 'base_currency' => 'ORCL', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 0.8, 'volume_24h' => 15000000],
            ['symbol' => 'ADBE', 'name' => 'Adobe Inc.', 'base_currency' => 'ADBE', 'quote_currency' => 'USD', 'current_price' => 450.00, 'change_24h' => 2.3, 'volume_24h' => 8000000],
            ['symbol' => 'PYPL', 'name' => 'PayPal Holdings Inc.', 'base_currency' => 'PYPL', 'quote_currency' => 'USD', 'current_price' => 80.00, 'change_24h' => -1.5, 'volume_24h' => 12000000],
            ['symbol' => 'UBER', 'name' => 'Uber Technologies Inc.', 'base_currency' => 'UBER', 'quote_currency' => 'USD', 'current_price' => 40.00, 'change_24h' => 3.2, 'volume_24h' => 20000000],
            ['symbol' => 'SPOT', 'name' => 'Spotify Technology S.A.', 'base_currency' => 'SPOT', 'quote_currency' => 'USD', 'current_price' => 150.00, 'change_24h' => 1.8, 'volume_24h' => 6000000],
            ['symbol' => 'ZM', 'name' => 'Zoom Video Communications Inc.', 'base_currency' => 'ZM', 'quote_currency' => 'USD', 'current_price' => 70.00, 'change_24h' => -2.1, 'volume_24h' => 8000000],
            ['symbol' => 'SQ', 'name' => 'Block Inc.', 'base_currency' => 'SQ', 'quote_currency' => 'USD', 'current_price' => 60.00, 'change_24h' => 4.5, 'volume_24h' => 15000000],
            ['symbol' => 'SNOW', 'name' => 'Snowflake Inc.', 'base_currency' => 'SNOW', 'quote_currency' => 'USD', 'current_price' => 180.00, 'change_24h' => 2.7, 'volume_24h' => 5000000],
            ['symbol' => 'PLTR', 'name' => 'Palantir Technologies Inc.', 'base_currency' => 'PLTR', 'quote_currency' => 'USD', 'current_price' => 25.00, 'change_24h' => 6.8, 'volume_24h' => 25000000],
            
            // Healthcare
            ['symbol' => 'JNJ', 'name' => 'Johnson & Johnson', 'base_currency' => 'JNJ', 'quote_currency' => 'USD', 'current_price' => 160.00, 'change_24h' => 0.5, 'volume_24h' => 12000000],
            ['symbol' => 'PFE', 'name' => 'Pfizer Inc.', 'base_currency' => 'PFE', 'quote_currency' => 'USD', 'current_price' => 35.00, 'change_24h' => -1.2, 'volume_24h' => 25000000],
            ['symbol' => 'UNH', 'name' => 'UnitedHealth Group Inc.', 'base_currency' => 'UNH', 'quote_currency' => 'USD', 'current_price' => 500.00, 'change_24h' => 1.8, 'volume_24h' => 8000000],
            ['symbol' => 'ABBV', 'name' => 'AbbVie Inc.', 'base_currency' => 'ABBV', 'quote_currency' => 'USD', 'current_price' => 140.00, 'change_24h' => 0.3, 'volume_24h' => 10000000],
            ['symbol' => 'TMO', 'name' => 'Thermo Fisher Scientific Inc.', 'base_currency' => 'TMO', 'quote_currency' => 'USD', 'current_price' => 550.00, 'change_24h' => 2.1, 'volume_24h' => 3000000],
            ['symbol' => 'ABT', 'name' => 'Abbott Laboratories', 'base_currency' => 'ABT', 'quote_currency' => 'USD', 'current_price' => 110.00, 'change_24h' => 0.8, 'volume_24h' => 12000000],
            ['symbol' => 'DHR', 'name' => 'Danaher Corporation', 'base_currency' => 'DHR', 'quote_currency' => 'USD', 'current_price' => 250.00, 'change_24h' => 1.5, 'volume_24h' => 4000000],
            ['symbol' => 'BMY', 'name' => 'Bristol-Myers Squibb Company', 'base_currency' => 'BMY', 'quote_currency' => 'USD', 'current_price' => 70.00, 'change_24h' => -0.5, 'volume_24h' => 15000000],
            ['symbol' => 'AMGN', 'name' => 'Amgen Inc.', 'base_currency' => 'AMGN', 'quote_currency' => 'USD', 'current_price' => 220.00, 'change_24h' => 1.2, 'volume_24h' => 6000000],
            ['symbol' => 'GILD', 'name' => 'Gilead Sciences Inc.', 'base_currency' => 'GILD', 'quote_currency' => 'USD', 'current_price' => 80.00, 'change_24h' => -0.8, 'volume_24h' => 10000000],
            
            // Financial
            ['symbol' => 'JPM', 'name' => 'JPMorgan Chase & Co.', 'base_currency' => 'JPM', 'quote_currency' => 'USD', 'current_price' => 140.00, 'change_24h' => 1.2, 'volume_24h' => 18000000],
            ['symbol' => 'BAC', 'name' => 'Bank of America Corporation', 'base_currency' => 'BAC', 'quote_currency' => 'USD', 'current_price' => 35.00, 'change_24h' => 0.8, 'volume_24h' => 35000000],
            ['symbol' => 'WFC', 'name' => 'Wells Fargo & Company', 'base_currency' => 'WFC', 'quote_currency' => 'USD', 'current_price' => 45.00, 'change_24h' => 1.5, 'volume_24h' => 25000000],
            ['symbol' => 'GS', 'name' => 'Goldman Sachs Group Inc.', 'base_currency' => 'GS', 'quote_currency' => 'USD', 'current_price' => 350.00, 'change_24h' => 2.3, 'volume_24h' => 8000000],
            ['symbol' => 'MS', 'name' => 'Morgan Stanley', 'base_currency' => 'MS', 'quote_currency' => 'USD', 'current_price' => 85.00, 'change_24h' => 1.8, 'volume_24h' => 12000000],
            ['symbol' => 'C', 'name' => 'Citigroup Inc.', 'base_currency' => 'C', 'quote_currency' => 'USD', 'current_price' => 50.00, 'change_24h' => 0.5, 'volume_24h' => 20000000],
            ['symbol' => 'BLK', 'name' => 'BlackRock Inc.', 'base_currency' => 'BLK', 'quote_currency' => 'USD', 'current_price' => 750.00, 'change_24h' => 1.5, 'volume_24h' => 3000000],
            ['symbol' => 'SCHW', 'name' => 'Charles Schwab Corporation', 'base_currency' => 'SCHW', 'quote_currency' => 'USD', 'current_price' => 65.00, 'change_24h' => 0.8, 'volume_24h' => 10000000],
            ['symbol' => 'AXP', 'name' => 'American Express Company', 'base_currency' => 'AXP', 'quote_currency' => 'USD', 'current_price' => 160.00, 'change_24h' => 1.2, 'volume_24h' => 8000000],
            ['symbol' => 'USB', 'name' => 'U.S. Bancorp', 'base_currency' => 'USB', 'quote_currency' => 'USD', 'current_price' => 40.00, 'change_24h' => 0.3, 'volume_24h' => 12000000],
            
            // Consumer Discretionary
            ['symbol' => 'HD', 'name' => 'Home Depot Inc.', 'base_currency' => 'HD', 'quote_currency' => 'USD', 'current_price' => 300.00, 'change_24h' => 1.8, 'volume_24h' => 8000000],
            ['symbol' => 'LOW', 'name' => 'Lowe\'s Companies Inc.', 'base_currency' => 'LOW', 'quote_currency' => 'USD', 'current_price' => 200.00, 'change_24h' => 1.5, 'volume_24h' => 10000000],
            ['symbol' => 'DIS', 'name' => 'Walt Disney Company', 'base_currency' => 'DIS', 'quote_currency' => 'USD', 'current_price' => 90.00, 'change_24h' => -0.8, 'volume_24h' => 15000000],
            ['symbol' => 'MCD', 'name' => 'McDonald\'s Corporation', 'base_currency' => 'MCD', 'quote_currency' => 'USD', 'current_price' => 280.00, 'change_24h' => 0.5, 'volume_24h' => 6000000],
            ['symbol' => 'SBUX', 'name' => 'Starbucks Corporation', 'base_currency' => 'SBUX', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 1.2, 'volume_24h' => 8000000],
            ['symbol' => 'NKE', 'name' => 'NIKE Inc.', 'base_currency' => 'NKE', 'quote_currency' => 'USD', 'current_price' => 120.00, 'change_24h' => 2.1, 'volume_24h' => 12000000],
            ['symbol' => 'TGT', 'name' => 'Target Corporation', 'base_currency' => 'TGT', 'quote_currency' => 'USD', 'current_price' => 150.00, 'change_24h' => 1.8, 'volume_24h' => 8000000],
            ['symbol' => 'BKNG', 'name' => 'Booking Holdings Inc.', 'base_currency' => 'BKNG', 'quote_currency' => 'USD', 'current_price' => 2500.00, 'change_24h' => 3.5, 'volume_24h' => 2000000],
            ['symbol' => 'ABNB', 'name' => 'Airbnb Inc.', 'base_currency' => 'ABNB', 'quote_currency' => 'USD', 'current_price' => 120.00, 'change_24h' => 4.2, 'volume_24h' => 10000000],
            
            // Consumer Staples
            ['symbol' => 'PG', 'name' => 'Procter & Gamble Company', 'base_currency' => 'PG', 'quote_currency' => 'USD', 'current_price' => 150.00, 'change_24h' => 0.3, 'volume_24h' => 10000000],
            ['symbol' => 'KO', 'name' => 'Coca-Cola Company', 'base_currency' => 'KO', 'quote_currency' => 'USD', 'current_price' => 60.00, 'change_24h' => 0.8, 'volume_24h' => 15000000],
            ['symbol' => 'PEP', 'name' => 'PepsiCo Inc.', 'base_currency' => 'PEP', 'quote_currency' => 'USD', 'current_price' => 170.00, 'change_24h' => 1.2, 'volume_24h' => 8000000],
            ['symbol' => 'COST', 'name' => 'Costco Wholesale Corporation', 'base_currency' => 'COST', 'quote_currency' => 'USD', 'current_price' => 550.00, 'change_24h' => 2.1, 'volume_24h' => 4000000],
            ['symbol' => 'WMT', 'name' => 'Walmart Inc.', 'base_currency' => 'WMT', 'quote_currency' => 'USD', 'current_price' => 160.00, 'change_24h' => 1.5, 'volume_24h' => 12000000],
            ['symbol' => 'MDLZ', 'name' => 'Mondelez International Inc.', 'base_currency' => 'MDLZ', 'quote_currency' => 'USD', 'current_price' => 70.00, 'change_24h' => 0.5, 'volume_24h' => 8000000],
            ['symbol' => 'PM', 'name' => 'Philip Morris International Inc.', 'base_currency' => 'PM', 'quote_currency' => 'USD', 'current_price' => 90.00, 'change_24h' => 0.8, 'volume_24h' => 6000000],
            ['symbol' => 'CL', 'name' => 'Colgate-Palmolive Company', 'base_currency' => 'CL', 'quote_currency' => 'USD', 'current_price' => 80.00, 'change_24h' => 0.3, 'volume_24h' => 5000000],
            ['symbol' => 'MO', 'name' => 'Altria Group Inc.', 'base_currency' => 'MO', 'quote_currency' => 'USD', 'current_price' => 45.00, 'change_24h' => -0.5, 'volume_24h' => 8000000],
            
            // Energy
            ['symbol' => 'XOM', 'name' => 'Exxon Mobil Corporation', 'base_currency' => 'XOM', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 1.8, 'volume_24h' => 20000000],
            ['symbol' => 'CVX', 'name' => 'Chevron Corporation', 'base_currency' => 'CVX', 'quote_currency' => 'USD', 'current_price' => 150.00, 'change_24h' => 2.1, 'volume_24h' => 12000000],
            ['symbol' => 'COP', 'name' => 'ConocoPhillips', 'base_currency' => 'COP', 'quote_currency' => 'USD', 'current_price' => 120.00, 'change_24h' => 1.5, 'volume_24h' => 8000000],
            
            // Industrials
            ['symbol' => 'BA', 'name' => 'Boeing Company', 'base_currency' => 'BA', 'quote_currency' => 'USD', 'current_price' => 200.00, 'change_24h' => 3.2, 'volume_24h' => 15000000],
            ['symbol' => 'CAT', 'name' => 'Caterpillar Inc.', 'base_currency' => 'CAT', 'quote_currency' => 'USD', 'current_price' => 250.00, 'change_24h' => 2.8, 'volume_24h' => 8000000],
            ['symbol' => 'GE', 'name' => 'General Electric Company', 'base_currency' => 'GE', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 1.5, 'volume_24h' => 12000000],
            ['symbol' => 'HON', 'name' => 'Honeywell International Inc.', 'base_currency' => 'HON', 'quote_currency' => 'USD', 'current_price' => 200.00, 'change_24h' => 1.8, 'volume_24h' => 6000000],
            ['symbol' => 'MMM', 'name' => '3M Company', 'base_currency' => 'MMM', 'quote_currency' => 'USD', 'current_price' => 90.00, 'change_24h' => -0.8, 'volume_24h' => 8000000],
            ['symbol' => 'RTX', 'name' => 'Raytheon Technologies Corporation', 'base_currency' => 'RTX', 'quote_currency' => 'USD', 'current_price' => 85.00, 'change_24h' => 1.2, 'volume_24h' => 10000000],
            ['symbol' => 'LMT', 'name' => 'Lockheed Martin Corporation', 'base_currency' => 'LMT', 'quote_currency' => 'USD', 'current_price' => 450.00, 'change_24h' => 2.5, 'volume_24h' => 3000000],
            ['symbol' => 'GD', 'name' => 'General Dynamics Corporation', 'base_currency' => 'GD', 'quote_currency' => 'USD', 'current_price' => 250.00, 'change_24h' => 1.8, 'volume_24h' => 4000000],
            ['symbol' => 'EMR', 'name' => 'Emerson Electric Co.', 'base_currency' => 'EMR', 'quote_currency' => 'USD', 'current_price' => 90.00, 'change_24h' => 0.5, 'volume_24h' => 6000000],
            ['symbol' => 'DE', 'name' => 'Deere & Company', 'base_currency' => 'DE', 'quote_currency' => 'USD', 'current_price' => 400.00, 'change_24h' => 3.5, 'volume_24h' => 4000000],
            ['symbol' => 'UPS', 'name' => 'United Parcel Service Inc.', 'base_currency' => 'UPS', 'quote_currency' => 'USD', 'current_price' => 180.00, 'change_24h' => 1.2, 'volume_24h' => 6000000],
            ['symbol' => 'FDX', 'name' => 'FedEx Corporation', 'base_currency' => 'FDX', 'quote_currency' => 'USD', 'current_price' => 250.00, 'change_24h' => 2.8, 'volume_24h' => 4000000],
            ['symbol' => 'UNP', 'name' => 'Union Pacific Corporation', 'base_currency' => 'UNP', 'quote_currency' => 'USD', 'current_price' => 220.00, 'change_24h' => 1.5, 'volume_24h' => 5000000],
            
            // Communication Services
            ['symbol' => 'VZ', 'name' => 'Verizon Communications Inc.', 'base_currency' => 'VZ', 'quote_currency' => 'USD', 'current_price' => 40.00, 'change_24h' => 0.3, 'volume_24h' => 20000000],
            ['symbol' => 'T', 'name' => 'AT&T Inc.', 'base_currency' => 'T', 'quote_currency' => 'USD', 'current_price' => 15.00, 'change_24h' => -0.5, 'volume_24h' => 35000000],
            ['symbol' => 'TMUS', 'name' => 'T-Mobile US Inc.', 'base_currency' => 'TMUS', 'quote_currency' => 'USD', 'current_price' => 140.00, 'change_24h' => 2.1, 'volume_24h' => 8000000],
            ['symbol' => 'CMCSA', 'name' => 'Comcast Corporation', 'base_currency' => 'CMCSA', 'quote_currency' => 'USD', 'current_price' => 40.00, 'change_24h' => 0.8, 'volume_24h' => 15000000],
            ['symbol' => 'CHTR', 'name' => 'Charter Communications Inc.', 'base_currency' => 'CHTR', 'quote_currency' => 'USD', 'current_price' => 350.00, 'change_24h' => 1.5, 'volume_24h' => 3000000],
            
            // Materials
            ['symbol' => 'LIN', 'name' => 'Linde plc', 'base_currency' => 'LIN', 'quote_currency' => 'USD', 'current_price' => 400.00, 'change_24h' => 1.8, 'volume_24h' => 3000000],
            
            // Utilities
            ['symbol' => 'DUK', 'name' => 'Duke Energy Corporation', 'base_currency' => 'DUK', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 0.5, 'volume_24h' => 6000000],
            ['symbol' => 'NEE', 'name' => 'NextEra Energy Inc.', 'base_currency' => 'NEE', 'quote_currency' => 'USD', 'current_price' => 70.00, 'change_24h' => 1.2, 'volume_24h' => 8000000],
            ['symbol' => 'SO', 'name' => 'Southern Company', 'base_currency' => 'SO', 'quote_currency' => 'USD', 'current_price' => 70.00, 'change_24h' => 0.3, 'volume_24h' => 5000000],
            
            // Real Estate
            ['symbol' => 'AMT', 'name' => 'American Tower Corporation', 'base_currency' => 'AMT', 'quote_currency' => 'USD', 'current_price' => 200.00, 'change_24h' => 1.5, 'volume_24h' => 4000000],
            
            // ETFs
            ['symbol' => 'SPY', 'name' => 'SPDR S&P 500 ETF Trust', 'base_currency' => 'SPY', 'quote_currency' => 'USD', 'current_price' => 450.00, 'change_24h' => 1.2, 'volume_24h' => 80000000],
            ['symbol' => 'QQQ', 'name' => 'Invesco QQQ Trust', 'base_currency' => 'QQQ', 'quote_currency' => 'USD', 'current_price' => 380.00, 'change_24h' => 2.1, 'volume_24h' => 40000000],
            ['symbol' => 'IWM', 'name' => 'iShares Russell 2000 ETF', 'base_currency' => 'IWM', 'quote_currency' => 'USD', 'current_price' => 180.00, 'change_24h' => 1.8, 'volume_24h' => 25000000],
        ];

        // Crypto pairs
        $cryptos = [
            ['symbol' => 'BTC', 'name' => 'Bitcoin', 'base_currency' => 'BTC', 'quote_currency' => 'USD', 'current_price' => 45000.00, 'change_24h' => 2.8, 'volume_24h' => 25000000000],
            ['symbol' => 'ETH', 'name' => 'Ethereum', 'base_currency' => 'ETH', 'quote_currency' => 'USD', 'current_price' => 3000.00, 'change_24h' => 1.5, 'volume_24h' => 15000000000],
            ['symbol' => 'BNB', 'name' => 'Binance Coin', 'base_currency' => 'BNB', 'quote_currency' => 'USD', 'current_price' => 350.00, 'change_24h' => 3.2, 'volume_24h' => 2000000000],
            ['symbol' => 'ADA', 'name' => 'Cardano', 'base_currency' => 'ADA', 'quote_currency' => 'USD', 'current_price' => 0.50, 'change_24h' => -1.8, 'volume_24h' => 800000000],
            ['symbol' => 'SOL', 'name' => 'Solana', 'base_currency' => 'SOL', 'quote_currency' => 'USD', 'current_price' => 100.00, 'change_24h' => 5.5, 'volume_24h' => 1200000000],
            ['symbol' => 'DOT', 'name' => 'Polkadot', 'base_currency' => 'DOT', 'quote_currency' => 'USD', 'current_price' => 7.50, 'change_24h' => 2.1, 'volume_24h' => 500000000],
            ['symbol' => 'DOGE', 'name' => 'Dogecoin', 'base_currency' => 'DOGE', 'quote_currency' => 'USD', 'current_price' => 0.08, 'change_24h' => 8.2, 'volume_24h' => 300000000],
            ['symbol' => 'AVAX', 'name' => 'Avalanche', 'base_currency' => 'AVAX', 'quote_currency' => 'USD', 'current_price' => 25.00, 'change_24h' => 4.3, 'volume_24h' => 400000000],
            ['symbol' => 'MATIC', 'name' => 'Polygon', 'base_currency' => 'MATIC', 'quote_currency' => 'USD', 'current_price' => 0.80, 'change_24h' => 1.9, 'volume_24h' => 250000000],
            ['symbol' => 'LINK', 'name' => 'Chainlink', 'base_currency' => 'LINK', 'quote_currency' => 'USD', 'current_price' => 15.00, 'change_24h' => 2.7, 'volume_24h' => 350000000],
        ];

        // Forex pairs
        $forexes = [
            ['symbol' => 'EURUSD', 'name' => 'Euro / US Dollar', 'base_currency' => 'EUR', 'quote_currency' => 'USD', 'current_price' => 1.0850, 'change_24h' => 0.15, 'volume_24h' => 5000000000],
            ['symbol' => 'GBPUSD', 'name' => 'British Pound / US Dollar', 'base_currency' => 'GBP', 'quote_currency' => 'USD', 'current_price' => 1.2650, 'change_24h' => -0.25, 'volume_24h' => 3000000000],
            ['symbol' => 'USDJPY', 'name' => 'US Dollar / Japanese Yen', 'base_currency' => 'USD', 'quote_currency' => 'JPY', 'current_price' => 150.50, 'change_24h' => 0.35, 'volume_24h' => 4000000000],
            ['symbol' => 'USDCHF', 'name' => 'US Dollar / Swiss Franc', 'base_currency' => 'USD', 'quote_currency' => 'CHF', 'current_price' => 0.8750, 'change_24h' => -0.12, 'volume_24h' => 1500000000],
            ['symbol' => 'AUDUSD', 'name' => 'Australian Dollar / US Dollar', 'base_currency' => 'AUD', 'quote_currency' => 'USD', 'current_price' => 0.6650, 'change_24h' => 0.45, 'volume_24h' => 2000000000],
            ['symbol' => 'USDCAD', 'name' => 'US Dollar / Canadian Dollar', 'base_currency' => 'USD', 'quote_currency' => 'CAD', 'current_price' => 1.3550, 'change_24h' => -0.18, 'volume_24h' => 1800000000],
            ['symbol' => 'NZDUSD', 'name' => 'New Zealand Dollar / US Dollar', 'base_currency' => 'NZD', 'quote_currency' => 'USD', 'current_price' => 0.6150, 'change_24h' => 0.22, 'volume_24h' => 800000000],
            ['symbol' => 'EURGBP', 'name' => 'Euro / British Pound', 'base_currency' => 'EUR', 'quote_currency' => 'GBP', 'current_price' => 0.8575, 'change_24h' => 0.08, 'volume_24h' => 1200000000],
            ['symbol' => 'EURJPY', 'name' => 'Euro / Japanese Yen', 'base_currency' => 'EUR', 'quote_currency' => 'JPY', 'current_price' => 163.25, 'change_24h' => 0.42, 'volume_24h' => 2500000000],
            ['symbol' => 'GBPJPY', 'name' => 'British Pound / Japanese Yen', 'base_currency' => 'GBP', 'quote_currency' => 'JPY', 'current_price' => 190.50, 'change_24h' => 0.15, 'volume_24h' => 1800000000],
        ];

        // Insert stocks
        foreach ($stocks as $stock) {
            TradePair::create(array_merge($stock, [
                'market' => 'stock',
                'price_precision' => 2,
                'amount_precision' => 2,
                'min_amount' => 10.00,
                'max_amount' => 100000.00,
            ]));
        }

        // Insert cryptos
        foreach ($cryptos as $crypto) {
            TradePair::create(array_merge($crypto, [
                'market' => 'crypto',
                'price_precision' => 8,
                'amount_precision' => 6,
                'min_amount' => 5.00,
                'max_amount' => 50000.00,
            ]));
        }

        // Insert forex
        foreach ($forexes as $forex) {
            TradePair::create(array_merge($forex, [
                'market' => 'forex',
                'price_precision' => 5,
                'amount_precision' => 2,
                'min_amount' => 100.00,
                'max_amount' => 1000000.00,
            ]));
        }
    }
} 