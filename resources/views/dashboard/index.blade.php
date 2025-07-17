@extends('dashboard.layout.app')
@section('content')

<div class="container-fluid main-content px-2 px-lg-4">
    <!-- Main Dashboard Row -->
    <div class="row my-4 g-4">
        <!-- Left Column - Balance Chart (8 columns) -->
        <div class="col-lg-8">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-white mb-0">Account Balance Overview</h4>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-light btn-sm" onclick="updateChart('7d')">7D</button>
                            <button class="btn btn-outline-light btn-sm" onclick="updateChart('30d')">30D</button>
                            <button class="btn btn-outline-light btn-sm" onclick="updateChart('90d')">90D</button>
                        </div>
                    </div>
                    <div class="chart-container" style="position: relative; height: 400px;">
                        <canvas id="balanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Stats Cards (4 columns) -->
        <div class="col-lg-4">
            <div class="row g-3">
                <!-- Profit Card -->
                <div class="col-12">
                    <div class="card bg-gradient-primary border-0 shadow-lg">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-white-50 mb-1">Total Profit</h6>
                                    <h3 class="text-white mb-0">${{ number_format($user->profit, 2) }}</h3>
                                    <small class="text-white-50">Lifetime earnings</small>
                                </div>
                                <div class="text-end">
                                    <div class="bg-white bg-opacity-20 rounded-circle p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stock Holdings Card -->
                <div class="col-12">
                    <div class="card bg-gradient-success border-0 shadow-lg">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-white-50 mb-1">Stock Holdings</h6>
                                    <h3 class="text-white mb-0">${{ number_format($totalHoldingsValue ?? 0, 2) }}</h3>
                                    <small class="text-white-50">{{ $stockHoldings->count() }} positions</small>
                                </div>
                                <div class="text-end">
                                    <div class="bg-white bg-opacity-20 rounded-circle p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                            <path d="M3 3v18h18"/>
                                            <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="col-12">
                    <div class="card bg-dark border-0 shadow-lg">
                        <div class="card-body p-4">
                            <h6 class="text-white mb-3">Quick Stats</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="text-center">
                                        <h5 class="text-white mb-1">${{ number_format($user->balance, 2) }}</h5>
                                        <small class="text-muted">Available Balance</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <h5 class="text-white mb-1">${{ number_format($invested, 2) }}</h5>
                                        <small class="text-muted">Total Invested</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <h5 class="text-white mb-1">${{ number_format($deposit, 2) }}</h5>
                                        <small class="text-muted">Total Deposits</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <h5 class="text-white mb-1">${{ number_format($withdrawal, 2) }}</h5>
                                        <small class="text-muted">Total Withdrawals</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stock Holdings Table -->
    @if($stockHoldings->count() > 0)
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="text-white mb-0">Your Stock Holdings</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-0">Stock</th>
                                    <th class="border-0">Shares</th>
                                    <th class="border-0">Avg Price</th>
                                    <th class="border-0">Current Value</th>
                                    <th class="border-0">P&L</th>
                                    <th class="border-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stockHoldings as $holding)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset($holding->stock->avatar()) }}" alt="{{ $holding->stock->symbol }}" width="30" height="30" class="rounded">
                                            <span class="text-white">{{ $holding->stock->symbol }}</span>
                                        </div>
                                    </td>
                                    <td class="text-white">{{ number_format($holding->total_shares, 2) }}</td>
                                    <td class="text-white">${{ number_format($holding->average_price, 2) }}</td>
                                    <td class="text-white">${{ number_format($holding->current_value, 2) }}</td>
                                    <td>
                                        @php
                                            $pnl = $holding->current_value - $holding->total_amount;
                                            $pnlPercent = $holding->total_amount > 0 ? ($pnl / $holding->total_amount) * 100 : 0;
                                        @endphp
                                        <span class="badge {{ $pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                            {{ $pnl >= 0 ? '+' : '' }}${{ number_format($pnl, 2) }} ({{ number_format($pnlPercent, 1) }}%)
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.sellStock', $holding->id) }}" class="btn btn-sm btn-outline-danger">Sell</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- TradingView Widget -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="text-white mb-0">Market Overview</h5>
                </div>
                <div class="card-body p-0">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                        </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                        "width": "100%",
                        "height": "400",
                        "symbolsGroups": [
                            {
                                "name": "Indices",
                                "originalName": "Indices",
                                "symbols": [
                                    {
                                        "name": "FOREXCOM:SPXUSD",
                                        "displayName": "S&P 500 Index"
                                    },
                                    {
                                        "name": "FOREXCOM:NSXUSD",
                                        "displayName": "US 100 Cash CFD"
                                    },
                                    {
                                        "name": "FOREXCOM:DJI",
                                        "displayName": "Dow Jones Industrial Average Index"
                                    }
                                ]
                            },
                            {
                                "name": "Stocks",
                                "symbols": [
                                    {
                                        "name": "NASDAQ:NVDA",
                                        "displayName": "NVDA"
                                    },
                                    {
                                        "name": "NASDAQ:TSLA",
                                        "displayName": "Tesla"
                                    },
                                    {
                                        "name": "NASDAQ:AAPL",
                                        "displayName": "APPLE INC"
                                    },
                                    {
                                        "name": "NASDAQ:META",
                                        "displayName": "META INC"
                                    },
                                    {
                                        "name": "NASDAQ:MSFT",
                                        "displayName": "MICROSOFT"
                                    }
                                ]
                            }
                        ],
                        "showSymbolLogo": true,
                        "isTransparent": false,
                        "colorTheme": "dark",
                        "locale": "en",
                        "backgroundColor": "#131722"
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Referral Section -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-body p-4">
                    <h6 class="text-white mb-3">Referral Program</h6>
                    <div class="input-group">
                        <input type="text" 
                               value="{{ route('register', ['ref' => auth()->user()->referral->code]) }}" 
                               id="referralLink" 
                               readonly 
                               class="form-control bg-dark text-white border-secondary">
                        <button class="btn btn-primary" onclick="copyReferral()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Initialize the balance chart
let balanceChart;
let currentPeriod = '30d';

function initChart() {
    const ctx = document.getElementById('balanceChart').getContext('2d');
    
    // Generate realistic balance data based on user's actual balance
    const balanceData = generateBalanceData({{ $user->balance }}, currentPeriod);
    
    balanceChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: balanceData.labels,
            datasets: [{
                label: 'Account Balance',
                data: balanceData.data,
                borderColor: '#00d4aa',
                backgroundColor: 'rgba(0, 212, 170, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#00d4aa',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#ffffff',
                    bodyColor: '#ffffff',
                    borderColor: '#00d4aa',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            return 'Balance: $' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    ticks: {
                        color: '#ffffff'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    ticks: {
                        color: '#ffffff',
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            },
            elements: {
                point: {
                    hoverBackgroundColor: '#00d4aa'
                }
            }
        }
    });
}

function generateBalanceData(currentBalance, period) {
    const labels = [];
    const data = [];
    const today = new Date();
    
    let days;
    switch(period) {
        case '7d':
            days = 7;
            break;
        case '30d':
            days = 30;
            break;
        case '90d':
            days = 90;
            break;
        default:
            days = 30;
    }
    
    // Generate realistic balance progression
    let balance = currentBalance * 0.8; // Start at 80% of current balance
    const volatility = currentBalance * 0.15; // 15% volatility
    
    for (let i = days; i >= 0; i--) {
        const date = new Date(today);
        date.setDate(date.getDate() - i);
        
        // Format label based on period
        if (period === '7d') {
            labels.push(date.toLocaleDateString('en-US', { weekday: 'short' }));
        } else if (period === '30d') {
            labels.push(date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' }));
        } else {
            labels.push(date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' }));
        }
        
        // Generate realistic balance movement
        const randomChange = (Math.random() - 0.5) * volatility * 0.1; // Smaller daily changes
        balance = Math.max(0, balance + randomChange);
        
        // Gradually trend towards current balance
        const trend = (currentBalance - balance) * 0.02;
        balance += trend;
        
        data.push(Math.round(balance * 100) / 100);
    }
    
    return { labels, data };
}

function updateChart(period) {
    currentPeriod = period;
    
    if (balanceChart) {
        const balanceData = generateBalanceData({{ $user->balance }}, period);
        
        balanceChart.data.labels = balanceData.labels;
        balanceChart.data.datasets[0].data = balanceData.data;
        balanceChart.update();
    }
}

function copyReferral() {
    const copyText = document.getElementById("referralLink");
    copyText.select();
    document.execCommand("copy");
    
    // Show a toast notification
    const button = event.target.closest('button');
    const originalText = button.innerHTML;
    button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"></polyline></svg> Copied!';
    button.classList.remove('btn-primary');
    button.classList.add('btn-success');
    
    setTimeout(() => {
        button.innerHTML = originalText;
        button.classList.remove('btn-success');
        button.classList.add('btn-primary');
    }, 2000);
}

// Initialize chart when page loads
document.addEventListener('DOMContentLoaded', function() {
    initChart();
});
</script>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.bg-gradient-success {
    background: linear-gradient(135deg, #00d4aa 0%, #00b894 100%);
}

.card {
    border-radius: 15px;
}

.table-dark {
    background-color: transparent;
}

.table-dark th,
.table-dark td {
    border-color: rgba(255, 255, 255, 0.1);
}

.btn-outline-light:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.3);
}

.form-control:focus {
    background-color: #2a2a2a !important;
    border-color: #00d4aa !important;
    box-shadow: 0 0 0 0.2rem rgba(0, 212, 170, 0.25) !important;
}
</style>

@endsection
