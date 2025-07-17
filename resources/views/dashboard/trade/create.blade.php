@extends('dashboard.layout.app')
@section('content')

    <style>
        .stock-price-display {
            background-color: #161617;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        .order-radio {
            margin-right: 20px;
        }

        .market-selector {
            margin-bottom: 20px;
        }

        .market-selector .btn {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .market-selector .btn.active {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>

    <div class="container-fluid main-content px-2 px-lg-4">
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                    <div class="activity">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">Place Trade</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('user.trade.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to Trades
                                </a>
                            </div>
                        </div>
                    </div>

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                                    </a>
                                </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                    {
                                        "width": "100%",
                                        "height": "500",
                                        "symbol": "NASDAQ:AAPL",
                                        "interval": "D",
                                        "timezone": "Etc/UTC",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "en",
                                        "allow_symbol_change": true,
                                        "calendar": false,
                                        "support_host": "https://www.tradingview.com"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                        <div class="col-lg-4">
                            <form action="{{ route('user.trade.store') }}" method="POST" id="tradeForm">
                                @csrf
                                
                                <!-- Balance Display -->
                                <div class="mb-3">
                                    <div class="alert alert-info">
                                        <strong>Available Balance:</strong> ${{ number_format(auth()->user()->balance, 2) }}
                                    </div>
                                </div>
                                
                                <!-- Market Selection -->
                                <div class="mb-3">
                                    <label class="form-label">Market</label>
                                    <div class="market-selector">
                                        @foreach($markets as $key => $market)
                                            <button type="button" class="btn btn-outline-primary market-btn" data-market="{{ $key }}">
                                                {{ $market }}
                                            </button>
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="market" id="selected_market" value="stock" required>
                                </div>

                                <!-- Symbol Selection -->
                                <div class="mb-3">
                                    <label for="symbol" class="form-label">Symbol</label>
                                    <select name="symbol" id="symbol" class="form-control" required>
                                        <option value="">Select Symbol</option>
                                    </select>
                                </div>

                                <!-- Amount -->
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount ($)</label>
                                    <input type="number" class="form-control" id="amount" name="amount" step="0.01" required placeholder="Enter amount">
                                </div>

                                <!-- Order Type -->
                                <div class="mb-3">
                                    <label for="order_type" class="form-label">Order Type</label>
                                    <select name="order_type" id="order_type" class="form-control">
                                        <option value="market">Market Order</option>
                                        <option value="limit">Limit Order</option>
                                        <option value="stop">Stop Order</option>
                                    </select>
                                </div>

                                <!-- Limit Price (hidden by default) -->
                                <div class="mb-3" id="limit_price_field" style="display: none;">
                                    <label for="limit_price" class="form-label">Limit Price</label>
                                    <input type="number" class="form-control" id="limit_price" name="limit_price" step="0.01" placeholder="Enter limit price">
                                </div>

                                <!-- Stop Loss -->
                                <div class="mb-3">
                                    <label for="stop_loss" class="form-label">Stop Loss (Optional)</label>
                                    <input type="number" class="form-control" id="stop_loss" name="stop_loss" step="0.01" placeholder="Enter stop loss price">
                                </div>

                                <!-- Take Profit -->
                                <div class="mb-3">
                                    <label for="take_profit" class="form-label">Take Profit (Optional)</label>
                                    <input type="number" class="form-control" id="take_profit" name="take_profit" step="0.01" placeholder="Enter take profit price">
                                </div>

                                <!-- Hidden trade type field -->
                                <input type="hidden" name="type" id="trade_type" value="buy">

                                <!-- Buy/Sell Buttons -->
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100" onclick="setTradeType('buy')">
                                            <i class="fas fa-arrow-up"></i> Call
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-danger w-100" onclick="setTradeType('sell')">
                                            <i class="fas fa-arrow-down"></i> Put
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Market selection
        document.querySelectorAll('.market-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.market-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const market = this.dataset.market;
                document.getElementById('selected_market').value = market;
                
                // Update symbols dropdown
                updateSymbols(market);
            });
        });

        // Order type change
        document.getElementById('order_type').addEventListener('change', function() {
            const limitField = document.getElementById('limit_price_field');
            limitField.style.display = this.value === 'limit' ? 'block' : 'none';
        });

        // Symbol change
        document.getElementById('symbol').addEventListener('change', function() {
            const market = document.getElementById('selected_market').value;
            const symbol = this.value;
            if (symbol) {
                updateChart(market, symbol);
            }
        });

        function updateSymbols(market) {
            const symbolSelect = document.getElementById('symbol');
            symbolSelect.innerHTML = '<option value="">Select Symbol</option>';
            
            const symbols = @json($symbols);
            if (symbols[market]) {
                Object.entries(symbols[market]).forEach(([symbol, name]) => {
                    const option = document.createElement('option');
                    option.value = symbol;
                    option.textContent = `${symbol} - ${name}`;
                    symbolSelect.appendChild(option);
                });
            }
        }

        function updateChart(market, symbol) {
            // Update TradingView chart
            const chartSymbol = getChartSymbol(market, symbol);
            if (window.TradingView && window.TradingView.widget) {
                // This would need to be implemented based on TradingView widget API
                console.log('Updating chart to:', chartSymbol);
            }
        }

        function getChartSymbol(market, symbol) {
            switch(market) {
                case 'stock':
                    return `NASDAQ:${symbol}`;
                case 'crypto':
                    return `BINANCE:${symbol}USD`;
                case 'forex':
                    return `FX:${symbol}`;
                default:
                    return symbol;
            }
        }

        // Initialize with stock market
        document.querySelector('.market-btn[data-market="stock"]').classList.add('active');
        updateSymbols('stock');

        // Function to set trade type before form submission
        function setTradeType(type) {
            document.getElementById('trade_type').value = type;
        }
    </script>

@endsection 