@extends('admin.layout.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Trade Statistics</h4>
                        <div>
                            <a href="{{ route('admin.trade.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back to Trades
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Statistics Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Total Trades</h6>
                                            <h3 class="mb-0">{{ number_format($stats['total_trades']) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-chart-line fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Active Trades</h6>
                                            <h3 class="mb-0">{{ number_format($stats['active_trades']) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-play-circle fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Pending Trades</h6>
                                            <h3 class="mb-0">{{ number_format($stats['pending_trades']) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-clock fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Total Volume</h6>
                                            <h3 class="mb-0">${{ number_format($stats['total_volume']) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-dollar-sign fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Performance Metrics -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Closed Trades Performance</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text-center">
                                                <h4 class="text-success">{{ number_format($stats['profitable_trades']) }}</h4>
                                                <p class="text-muted">Profitable Trades</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center">
                                                <h4 class="text-danger">{{ number_format($stats['losing_trades']) }}</h4>
                                                <p class="text-muted">Losing Trades</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if($stats['closed_trades'] > 0)
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>Win Rate</span>
                                                <span>{{ number_format(($stats['profitable_trades'] / $stats['closed_trades']) * 100, 1) }}%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" style="width: {{ ($stats['profitable_trades'] / $stats['closed_trades']) * 100 }}%"></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Total P&L</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="{{ $stats['total_pnl'] >= 0 ? 'text-success' : 'text-danger' }}">
                                            ${{ number_format($stats['total_pnl'], 2) }}
                                        </h2>
                                        <p class="text-muted">Overall Profit/Loss</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Market Breakdown -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Market Breakdown</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Market</th>
                                                    <th>Total Trades</th>
                                                    <th>Total Volume</th>
                                                    <th>Active Trades</th>
                                                    <th>Closed Trades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($marketStats as $market)
                                                    <tr>
                                                        <td>
                                                            <span class="badge bg-primary">{{ ucfirst($market->market) }}</span>
                                                        </td>
                                                        <td>{{ number_format($market->count) }}</td>
                                                        <td>${{ number_format($market->volume, 2) }}</td>
                                                        <td>
                                                            {{ \App\Models\Trade::where('market', $market->market)->where('status', 2)->count() }}
                                                        </td>
                                                        <td>
                                                            {{ \App\Models\Trade::where('market', $market->market)->where('status', 3)->count() }}
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

                    <!-- Recent Trades -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Recent Trades</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User</th>
                                                    <th>Market</th>
                                                    <th>Symbol</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>P&L</th>
                                                    <th>Created</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($recentTrades as $trade)
                                                    <tr>
                                                        <td>{{ $trade->id }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.user.show', $trade->user->id) }}">
                                                                {{ $trade->user->name }}
                                                            </a>
                                                        </td>
                                                        <td>{!! $trade->market_badge !!}</td>
                                                        <td><strong>{{ $trade->symbol }}</strong></td>
                                                        <td>{!! $trade->type_badge !!}</td>
                                                        <td>${{ number_format($trade->amount, 2) }}</td>
                                                        <td>{!! $trade->status_badge !!}</td>
                                                        <td>
                                                            @if($trade->status == 3) {{-- Closed --}}
                                                                <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                                    ${{ number_format($trade->pnl, 2) }}
                                                                </span>
                                                            @elseif($trade->status == 2) {{-- Active --}}
                                                                <span class="badge {{ $trade->getCurrentPnlAttribute() >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                                    {{ number_format($trade->getCurrentPnlAttribute(), 2) }}%
                                                                </span>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>{{ $trade->created_at->format('M d, Y H:i') }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.trade.show', $trade->id) }}" class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="10" class="text-center">No recent trades found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
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