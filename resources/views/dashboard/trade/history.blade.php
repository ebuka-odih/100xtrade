@extends('dashboard.layout.app')

@section('title', 'Trade History')

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
.table {
    background-color: #1e2634;
    color: #e2e8f0;
}
.table-striped > tbody > tr:nth-of-type(odd) {
    background-color: #2d3748;
}
.table-hover > tbody > tr:hover {
    background-color: #374151;
    color: #e2e8f0;
}
.table-dark {
    background-color: #1f2937;
    color: #e2e8f0;
}
.table-dark th {
    background-color: #1f2937;
    border-color: #4a5568;
    color: #e2e8f0;
}
.nav-tabs {
    border-bottom: 1px solid #4a5568;
}
.nav-tabs .nav-link {
    background-color: #2d3748;
    border: 1px solid #4a5568;
    color: #a0aec0;
}
.nav-tabs .nav-link:hover {
    background-color: #374151;
    border-color: #4a5568;
    color: #e2e8f0;
}
.nav-tabs .nav-link.active {
    background-color: #1e2634;
    border-color: #4a5568 #4a5568 #1e2634;
    color: #e2e8f0;
}
.btn {
    border: 1px solid #4a5568;
}
.btn-primary {
    background-color: #3182ce;
    border-color: #3182ce;
    color: #ffffff;
}
.btn-primary:hover {
    background-color: #2c5aa0;
    border-color: #2c5aa0;
    color: #ffffff;
}
.btn-success {
    background-color: #38a169;
    border-color: #38a169;
    color: #ffffff;
}
.btn-success:hover {
    background-color: #2f855a;
    border-color: #2f855a;
    color: #ffffff;
}
.btn-info {
    background-color: #319795;
    border-color: #319795;
    color: #ffffff;
}
.btn-info:hover {
    background-color: #2c7a7b;
    border-color: #2c7a7b;
    color: #ffffff;
}
.alert {
    background-color: #2d3748;
    border: 1px solid #4a5568;
    color: #e2e8f0;
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
.text-muted {
    color: #a0aec0 !important;
}
.badge {
    color: #ffffff;
}
.modal-content {
    background-color: #1e2634;
    border: 1px solid #2d3748;
}
.modal-header {
    background-color: #2d3748;
    border-bottom: 1px solid #4a5568;
    color: #e2e8f0;
}
.modal-body {
    background-color: #1e2634;
    color: #e2e8f0;
}
.modal-footer {
    background-color: #2d3748;
    border-top: 1px solid #4a5568;
}

/* Ensure all text is white/light for dark background */
* {
    color: #e2e8f0 !important;
}

/* Override any remaining black text */
h1, h2, h3, h4, h5, h6 {
    color: #e2e8f0 !important;
}

p {
    color: #e2e8f0 !important;
}

span {
    color: #e2e8f0 !important;
}

td {
    color: #e2e8f0 !important;
}

th {
    color: #e2e8f0 !important;
}

/* Keep specific colors for status indicators */
.text-success {
    color: #9ae6b4 !important;
}

.text-danger {
    color: #feb2b2 !important;
}

.text-warning {
    color: #fbd38d !important;
}

.text-info {
    color: #90cdf4 !important;
}

/* Ensure buttons maintain their colors */
.btn-primary {
    color: #ffffff !important;
}

.btn-success {
    color: #ffffff !important;
}

.btn-info {
    color: #ffffff !important;
}

.btn-warning {
    color: #ffffff !important;
}

.btn-danger {
    color: #ffffff !important;
}

/* Badge colors */
.badge.bg-primary {
    color: #ffffff !important;
}

.badge.bg-success {
    color: #ffffff !important;
}

.badge.bg-danger {
    color: #ffffff !important;
}

.badge.bg-warning {
    color: #ffffff !important;
}

.badge.bg-info {
    color: #ffffff !important;
}

/* Keep muted text slightly lighter */
.text-muted {
    color: #a0aec0 !important;
}

/* Ensure form elements are visible */
.form-control {
    color: #e2e8f0 !important;
}

.form-control::placeholder {
    color: #a0aec0 !important;
}

/* Ensure links are visible */
a {
    color: #90cdf4 !important;
}

a:hover {
    color: #63b3ed !important;
}
</style>

@section('content')
<div style="margin-top: 100px;" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Trade History</h4>
                        <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Trade
                        </a>
                    </div>
                </div>
                <div class="card-body">
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

                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="tradeTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="open-trades-tab" data-bs-toggle="tab" data-bs-target="#open-trades" type="button" role="tab">
                                <i class="fas fa-play-circle me-2"></i>Open Trades
                                <span class="badge bg-primary ms-2">{{ $openTrades->count() }}</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="closed-trades-tab" data-bs-toggle="tab" data-bs-target="#closed-trades" type="button" role="tab">
                                <i class="fas fa-check-circle me-2"></i>Closed Trades
                                <span class="badge bg-success ms-2">{{ $closedTrades->count() }}</span>
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content mt-3" id="tradeTabsContent">
                        <!-- Open Trades Tab -->
                        <div class="tab-pane fade show active" id="open-trades" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Market</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Entry Price</th>
                                            <th>Quantity</th>
                                            <th>Current P&L</th>
                                            <th>Opened</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($openTrades as $trade)
                                            <tr>
                                                <td>
                                                    <strong>{{ $trade->symbol }}</strong>
                                                    <br>
                                                    <small class="text-muted">{{ $trade->tradePair->name ?? 'N/A' }}</small>
                                                </td>
                                                <td>{!! $trade->market_badge !!}</td>
                                                <td>{!! $trade->type_badge !!}</td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td>${{ number_format($trade->entry_price ?? 0, 2) }}</td>
                                                <td>{{ number_format($trade->quantity ?? 0, 4) }}</td>
                                                <td>
                                                    @if($trade->entry_price)
                                                        @php
                                                            $currentPrice = $trade->tradePair->current_price ?? $trade->entry_price;
                                                            $pnl = $trade->type === 'buy' 
                                                                ? (($currentPrice - $trade->entry_price) / $trade->entry_price) * 100
                                                                : (($trade->entry_price - $currentPrice) / $trade->entry_price) * 100;
                                                        @endphp
                                                        <span class="{{ $pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                                            {{ number_format($pnl, 2) }}%
                                                        </span>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <small>{{ $trade->filled_at ? $trade->filled_at->format('M d, Y H:i') : $trade->created_at->format('M d, Y H:i') }}</small>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#tradeModal{{ $trade->id }}">
                                                            <i class="fas fa-eye"></i> View
                                                        </button>
                                                        <form action="{{ route('user.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to close this trade?')">
                                                                <i class="fas fa-check"></i> Close
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center py-4">
                                                    <div class="text-muted">
                                                        <i class="fas fa-play-circle fa-3x mb-3"></i>
                                                        <h5>No open trades</h5>
                                                        <p>You don't have any active trades at the moment.</p>
                                                        <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                                                            <i class="fas fa-plus"></i> Start Trading
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Closed Trades Tab -->
                        <div class="tab-pane fade" id="closed-trades" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Market</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Entry Price</th>
                                            <th>Exit Price</th>
                                            <th>Quantity</th>
                                            <th>P&L</th>
                                            <th>Closed</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($closedTrades as $trade)
                                            <tr>
                                                <td>
                                                    <strong>{{ $trade->symbol }}</strong>
                                                    <br>
                                                    <small class="text-muted">{{ $trade->tradePair->name ?? 'N/A' }}</small>
                                                </td>
                                                <td>{!! $trade->market_badge !!}</td>
                                                <td>{!! $trade->type_badge !!}</td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td>${{ number_format($trade->entry_price ?? 0, 2) }}</td>
                                                <td>${{ number_format($trade->exit_price ?? 0, 2) }}</td>
                                                <td>{{ number_format($trade->quantity ?? 0, 4) }}</td>
                                                <td>
                                                    @if($trade->pnl !== null)
                                                        <span class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                                            ${{ number_format($trade->pnl, 2) }}
                                                        </span>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <small>{{ $trade->closed_at ? $trade->closed_at->format('M d, Y H:i') : 'N/A' }}</small>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#tradeModal{{ $trade->id }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center py-4">
                                                    <div class="text-muted">
                                                        <i class="fas fa-check-circle fa-3x mb-3"></i>
                                                        <h5>No closed trades</h5>
                                                        <p>You haven't closed any trades yet.</p>
                                                        <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                                                            <i class="fas fa-plus"></i> Start Trading
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Trade Details Modals -->
                    @foreach($openTrades->concat($closedTrades) as $trade)
                        <div class="modal fade" id="tradeModal{{ $trade->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Trade Details - {{ $trade->symbol }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Basic Information</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <td><strong>Trade ID:</strong></td>
                                                        <td>{{ $trade->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Symbol:</strong></td>
                                                        <td>{{ $trade->symbol }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Market:</strong></td>
                                                        <td>{!! $trade->market_badge !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Type:</strong></td>
                                                        <td>{!! $trade->type_badge !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Amount:</strong></td>
                                                        <td>${{ number_format($trade->amount, 2) }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Trade Details</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <td><strong>Entry Price:</strong></td>
                                                        <td>${{ number_format($trade->entry_price ?? 0, 2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Exit Price:</strong></td>
                                                        <td>${{ number_format($trade->exit_price ?? 0, 2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Quantity:</strong></td>
                                                        <td>{{ number_format($trade->quantity ?? 0, 4) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>P&L:</strong></td>
                                                        <td>
                                                            @if($trade->pnl !== null)
                                                                <span class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                                                    ${{ number_format($trade->pnl, 2) }}
                                                                </span>
                                                            @else
                                                                <span class="text-muted">-</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Status:</strong></td>
                                                        <td>{!! $trade->status_badge !!}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h6>Order Information</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <td><strong>Order Type:</strong></td>
                                                        <td>{{ ucfirst($trade->order_type) }}</td>
                                                    </tr>
                                                    @if($trade->limit_price)
                                                        <tr>
                                                            <td><strong>Limit Price:</strong></td>
                                                            <td>${{ number_format($trade->limit_price, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                    @if($trade->stop_loss)
                                                        <tr>
                                                            <td><strong>Stop Loss:</strong></td>
                                                            <td>${{ number_format($trade->stop_loss, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                    @if($trade->take_profit)
                                                        <tr>
                                                            <td><strong>Take Profit:</strong></td>
                                                            <td>${{ number_format($trade->take_profit, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                    <tr>
                                                        <td><strong>Created:</strong></td>
                                                        <td>{{ $trade->created_at->format('M d, Y H:i:s') }}</td>
                                                    </tr>
                                                    @if($trade->filled_at)
                                                        <tr>
                                                            <td><strong>Filled:</strong></td>
                                                            <td>{{ $trade->filled_at->format('M d, Y H:i:s') }}</td>
                                                        </tr>
                                                    @endif
                                                    @if($trade->closed_at)
                                                        <tr>
                                                            <td><strong>Closed:</strong></td>
                                                            <td>{{ $trade->closed_at->format('M d, Y H:i:s') }}</td>
                                                        </tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 