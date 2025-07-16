@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                    <div class="activity">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">Trade Details</h5>
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

                    <div class="row mt-4">
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
                                        "symbol": "{{ $trade->market === 'stock' ? 'NASDAQ:' : ($trade->market === 'crypto' ? 'BINANCE:' : 'FX:') }}{{ $trade->symbol }}",
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
                            <div class="card bg-dark text-white">
                                <div class="card-header">
                                    <h6 class="mb-0">Trade Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Market:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->market_badge !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Symbol:</strong>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">{{ $trade->symbol }}</span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Type:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->type_badge !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Amount:</strong>
                                        </div>
                                        <div class="col-6">
                                            ${{ number_format($trade->amount, 2) }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Order Type:</strong>
                                        </div>
                                        <div class="col-6">
                                            <span class="badge bg-info">{{ ucfirst($trade->order_type) }}</span>
                                        </div>
                                    </div>

                                    @if($trade->entry_price)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Entry Price:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->entry_price, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->exit_price)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Exit Price:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->exit_price, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->quantity)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Quantity:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ number_format($trade->quantity, 4) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->stop_loss)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Stop Loss:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->stop_loss, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->take_profit)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Take Profit:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->take_profit, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Status:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->status_badge !!}
                                        </div>
                                    </div>

                                    @if($trade->pnl !== null)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>P&L:</strong>
                                            </div>
                                            <div class="col-6">
                                                <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                    ${{ number_format($trade->pnl, 2) }}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Created:</strong>
                                        </div>
                                        <div class="col-6">
                                            {{ $trade->created_at->format('M d, Y H:i') }}
                                        </div>
                                    </div>

                                    @if($trade->filled_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Filled:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ $trade->filled_at->format('M d, Y H:i') }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->closed_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Closed:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ $trade->closed_at->format('M d, Y H:i') }}
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Action Buttons -->
                                    <div class="mt-4">
                                        @if($trade->canBeCancelled()) {{-- Pending --}}
                                            <form action="{{ route('user.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger w-100 mb-2" onclick="return confirm('Are you sure you want to cancel this trade?')">
                                                    <i class="fas fa-times"></i> Cancel Trade
                                                </button>
                                            </form>
                                        @elseif($trade->canBeClosed()) {{-- Active --}}
                                            <form action="{{ route('user.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success w-100 mb-2" onclick="return confirm('Are you sure you want to close this trade?')">
                                                    <i class="fas fa-check"></i> Close Trade
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 