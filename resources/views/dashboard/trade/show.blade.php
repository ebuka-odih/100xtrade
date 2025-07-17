@extends('dashboard.layout.app')
@section('content')

<style>
body {
    background-color: #080909 !important;
}
.container-fluid {
    margin-top: 100px;
}
.card {
    background-color: #1e2634;
    border: 1px solid #2d3748;
}
.card-header {
    background-color: #2d3748;
    border-bottom: 1px solid #4a5568;
    color: #e2e8f0;
}
.card-body {
    background-color: #1e2634;
    color: #e2e8f0;
}
.form-control {
    background-color: #2d3748;
    border: 1px solid #4a5568;
    color: #e2e8f0;
}
.form-control:focus {
    background-color: #2d3748;
    border-color: #63b3ed;
    color: #e2e8f0;
    box-shadow: 0 0 0 0.2rem rgba(99, 179, 237, 0.25);
}
.form-label {
    color: #e2e8f0;
}
.form-text {
    color: #a0aec0;
}
.alert {
    background-color: #2d3748;
    border: 1px solid #4a5568;
    color: #e2e8f0;
}
.alert-info {
    background-color: #1a365d;
    border-color: #2c5282;
    color: #90cdf4;
}
.alert-success {
    background-color: #22543d;
    border-color: #38a169;
    color: #9ae6b4;
}
.alert-danger {
    background-color: #742a2a;
    border-color: #c53030;
    color: #feb2b2;
}
.btn-secondary {
    background-color: #4a5568;
    border-color: #4a5568;
    color: #e2e8f0;
}
.btn-secondary:hover {
    background-color: #2d3748;
    border-color: #2d3748;
    color: #e2e8f0;
}
.text-muted {
    color: #a0aec0 !important;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0">{{ $tradePair->name }} ({{ $tradePair->symbol }})</h4>
                            <!-- <p class="mb-0 text-muted">{{ $tradePair->market_badge }}</p> -->
                        </div>
                        <div>
                            <a href="{{ route('user.trade.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i>Back to Markets
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- TradingView Chart -->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Price Chart</h6>
                                </div>
                                <div class="card-body p-0">
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
                                                "symbol": "{{ $tradePair->trading_view_symbol }}",
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
                                </div>
                            </div>
                        </div>

                        <!-- Trade Form -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Place Trade</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Available Balance -->
                                    <div class="alert alert-info">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Available Balance:</span>
                                            <strong>${{ number_format($user->balance, 2) }}</strong>
                                        </div>
                                    </div>

                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
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

                                    <!-- Trade Form -->
                                    <form action="{{ route('user.trade.store', $tradePair) }}" method="POST">
                                        @csrf
                                        
                                        <!-- Trade Type -->
                                        <div class="mb-3">
                                            <label class="form-label">Trade Type</label>
                                            <div class="d-flex gap-2">
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="type" id="buy" value="buy" checked>
                                                    <label class="btn btn-outline-success w-100" for="buy">
                                                        <i class="fas fa-arrow-up me-1"></i>{{ $tradePair->market === 'stock' ? 'Call' : 'Buy' }}
                                                    </label>
                                                </div>
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="type" id="sell" value="sell">
                                                    <label class="btn btn-outline-danger w-100" for="sell">
                                                        <i class="fas fa-arrow-down me-1"></i>{{ $tradePair->market === 'stock' ? 'Put' : 'Sell' }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Amount -->
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount ($)</label>
                                            <input type="number" 
                                                   class="form-control" 
                                                   id="amount" 
                                                   name="amount" 
                                                   step="0.01"
                                                   min="{{ $tradePair->min_amount }}"
                                                   max="{{ $tradePair->max_amount }}"
                                                   placeholder="Enter amount"
                                                   required>
                                            <div class="form-text">
                                                Min: ${{ number_format($tradePair->min_amount, 2) }} | 
                                                Max: ${{ number_format($tradePair->max_amount, 2) }}
                                            </div>
                                        </div>

                                        <!-- Order Type -->
                                        <div class="mb-3">
                                            <label for="order_type" class="form-label">Order Type</label>
                                            <select class="form-control" id="order_type" name="order_type" required>
                                                <option value="market">Market Order</option>
                                                <option value="limit">Limit Order</option>
                                                <option value="stop">Stop Order</option>
                                            </select>
                                        </div>

                                        <!-- Limit Price (shown when limit order is selected) -->
                                        <div class="mb-3" id="limit_price_div" style="display: none;">
                                            <label for="limit_price" class="form-label">Limit Price ($)</label>
                                            <input type="number" 
                                                   class="form-control" 
                                                   id="limit_price" 
                                                   name="limit_price" 
                                                   step="0.00000001"
                                                   placeholder="Enter limit price">
                                        </div>

                                        <!-- Stop Loss -->
                                        <div class="mb-3">
                                            <label for="stop_loss" class="form-label">Stop Loss ($)</label>
                                            <input type="number" 
                                                   class="form-control" 
                                                   id="stop_loss" 
                                                   name="stop_loss" 
                                                   step="0.00000001"
                                                   placeholder="Optional">
                                        </div>

                                        <!-- Take Profit -->
                                        <div class="mb-3">
                                            <label for="take_profit" class="form-label">Take Profit ($)</label>
                                            <input type="number" 
                                                   class="form-control" 
                                                   id="take_profit" 
                                                   name="take_profit" 
                                                   step="0.00000001"
                                                   placeholder="Optional">
                                        </div>

                                        <!-- Interval -->
                                        <div class="mb-3">
                                            <label for="interval" class="form-label">{{ $tradePair->market === 'stock' ? 'Expiry Interval' : 'Execution Interval' }}</label>
                                            <select class="form-control" id="interval" name="interval">
                                                <option value="">{{ $tradePair->market === 'stock' ? 'No Expiry' : 'Execute Immediately' }}</option>
                                                <option value="5min">5 Minutes</option>
                                                <option value="10min">10 Minutes</option>
                                                <option value="15min">15 Minutes</option>
                                                <option value="30min">30 Minutes</option>
                                                <option value="1hour">1 Hour</option>
                                                <option value="2hour">2 Hours</option>
                                                <option value="4hour">4 Hours</option>
                                                <option value="6hour">6 Hours</option>
                                                <option value="8hour">8 Hours</option>
                                                <option value="12hour">12 Hours</option>
                                                <option value="1day">1 Day</option>
                                                <option value="2day">2 Days</option>
                                                <option value="3day">3 Days</option>
                                                <option value="1week">1 Week</option>
                                                <option value="2week">2 Weeks</option>
                                                <option value="1month">1 Month</option>
                                                <option value="3month">3 Months</option>
                                                <option value="6month">6 Months</option>
                                                <option value="1year">1 Year</option>
                                            </select>
                                            <small class="form-text text-muted">
                                                @if($tradePair->market === 'stock')
                                                    Choose when this trade expires. Leave empty for no expiry.
                                                @else
                                                    Choose when to execute this trade. Leave empty for immediate execution.
                                                @endif
                                            </small>
                                        </div>

                                        <!-- Submit Buttons -->
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success btn-lg">
                                                <i class="fas fa-play me-1"></i>Place {{ $tradePair->market === 'stock' ? 'Call' : 'Buy' }} Order
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle order type change
    const orderTypeSelect = document.getElementById('order_type');
    const limitPriceDiv = document.getElementById('limit_price_div');
    const limitPriceInput = document.getElementById('limit_price');

    orderTypeSelect.addEventListener('change', function() {
        if (this.value === 'limit') {
            limitPriceDiv.style.display = 'block';
            limitPriceInput.required = true;
        } else {
            limitPriceDiv.style.display = 'none';
            limitPriceInput.required = false;
        }
    });

    // Handle trade type change
    const buyRadio = document.getElementById('buy');
    const sellRadio = document.getElementById('sell');
    const submitButton = document.querySelector('button[type="submit"]');

    function updateSubmitButton() {
        if (buyRadio.checked) {
            submitButton.className = 'btn btn-success btn-lg';
            submitButton.innerHTML = '<i class="fas fa-play me-1"></i>Place {{ $tradePair->market === "stock" ? "Call" : "Buy" }} Order';
        } else {
            submitButton.className = 'btn btn-danger btn-lg';
            submitButton.innerHTML = '<i class="fas fa-play me-1"></i>Place {{ $tradePair->market === "stock" ? "Put" : "Sell" }} Order';
        }
    }

    buyRadio.addEventListener('change', updateSubmitButton);
    sellRadio.addEventListener('change', updateSubmitButton);
});
</script>

@endsection 