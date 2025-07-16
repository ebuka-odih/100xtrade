@extends('admin.layout.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Trade Management</h4>
                        <div>
                            <a href="{{ route('admin.trade.statistics') }}" class="btn btn-info">
                                <i class="fas fa-chart-bar"></i> Statistics
                            </a>
                            <a href="{{ route('admin.trade.export') }}" class="btn btn-success">
                                <i class="fas fa-download"></i> Export CSV
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="tradeTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">
                                All Trades ({{ $trades->total() }})
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="open-tab" data-bs-toggle="tab" data-bs-target="#open" type="button" role="tab">
                                Open Trades ({{ $trades->where('status', 2)->count() }})
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed" type="button" role="tab">
                                Closed Trades ({{ $trades->where('status', 3)->count() }})
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab">
                                Pending Trades ({{ $trades->where('status', 1)->count() }})
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="tradeTabsContent">
                        <!-- All Trades Tab -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                            <div class="table-responsive mt-3">
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
                                        @forelse($trades as $trade)
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
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('admin.trade.show', $trade->id) }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="fas fa-eye me-1"></i>View
                                                        </a>
                                                        
                                                        @if($trade->canBeCancelled())
                                                            <form action="{{ route('admin.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Cancel this trade?')">
                                                                    <i class="fas fa-times me-1"></i>Cancel
                                                                </button>
                                                            </form>
                                                        @endif
                                                        
                                                        @if($trade->isPending())
                                                            <form action="{{ route('admin.trade.execute', $trade->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Execute this trade?')">
                                                                    <i class="fas fa-play me-1"></i>Execute
                                                                </button>
                                                            </form>
                                                        @endif
                                                        
                                                        @if($trade->canBeClosed())
                                                            <form action="{{ route('admin.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Close this trade?')">
                                                                    <i class="fas fa-check me-1"></i>Close
                                                                </button>
                                                            </form>
                                                        @endif
                                                        
                                                        @if(in_array($trade->status, [3, 4]))
                                                            <form action="{{ route('admin.trade.destroy', $trade->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this trade?')">
                                                                    <i class="fas fa-trash me-1"></i>Delete
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No trades found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
                            @if($trades->hasPages())
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $trades->links() }}
                                </div>
                            @endif
                        </div>

                        <!-- Open Trades Tab -->
                        <div class="tab-pane fade" id="open" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Market</th>
                                            <th>Symbol</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Entry Price</th>
                                            <th>Current P&L</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trades->where('status', 2) as $trade)
                                            <tr>
                                                <td>{{ $trade->id }}</td>
                                                <td>{{ $trade->user->name }}</td>
                                                <td>{!! $trade->market_badge !!}</td>
                                                <td><strong>{{ $trade->symbol }}</strong></td>
                                                <td>{!! $trade->type_badge !!}</td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td>${{ number_format($trade->entry_price, 2) }}</td>
                                                <td>
                                                    <span class="badge {{ $trade->getCurrentPnlAttribute() >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                        {{ number_format($trade->getCurrentPnlAttribute(), 2) }}%
                                                    </span>
                                                </td>
                                                <td>{{ $trade->created_at->format('M d, Y H:i') }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('admin.trade.show', $trade->id) }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="fas fa-eye me-1"></i>View
                                                        </a>
                                                        <form action="{{ route('admin.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Close this trade?')">
                                                                <i class="fas fa-check me-1"></i>Close
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Closed Trades Tab -->
                        <div class="tab-pane fade" id="closed" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Market</th>
                                            <th>Symbol</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Entry Price</th>
                                            <th>Exit Price</th>
                                            <th>P&L</th>
                                            <th>Closed</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trades->where('status', 3) as $trade)
                                            <tr>
                                                <td>{{ $trade->id }}</td>
                                                <td>{{ $trade->user->name }}</td>
                                                <td>{!! $trade->market_badge !!}</td>
                                                <td><strong>{{ $trade->symbol }}</strong></td>
                                                <td>{!! $trade->type_badge !!}</td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td>${{ number_format($trade->entry_price, 2) }}</td>
                                                <td>${{ number_format($trade->exit_price, 2) }}</td>
                                                <td>
                                                    <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                        ${{ number_format($trade->pnl, 2) }}
                                                    </span>
                                                </td>
                                                <td>{{ $trade->closed_at->format('M d, Y H:i') }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('admin.trade.show', $trade->id) }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="fas fa-eye me-1"></i>View
                                                        </a>
                                                        <form action="{{ route('admin.trade.destroy', $trade->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this trade?')">
                                                                <i class="fas fa-trash me-1"></i>Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pending Trades Tab -->
                        <div class="tab-pane fade" id="pending" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Market</th>
                                            <th>Symbol</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Order Type</th>
                                            <th>Limit Price</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trades->where('status', 1) as $trade)
                                            <tr>
                                                <td>{{ $trade->id }}</td>
                                                <td>{{ $trade->user->name }}</td>
                                                <td>{!! $trade->market_badge !!}</td>
                                                <td><strong>{{ $trade->symbol }}</strong></td>
                                                <td>{!! $trade->type_badge !!}</td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td><span class="badge bg-info">{{ ucfirst($trade->order_type) }}</span></td>
                                                <td>{{ $trade->limit_price ? '$' . number_format($trade->limit_price, 2) : '-' }}</td>
                                                <td>{{ $trade->created_at->format('M d, Y H:i') }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('admin.trade.show', $trade->id) }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="fas fa-eye me-1"></i>View
                                                        </a>
                                                        <form action="{{ route('admin.trade.execute', $trade->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Execute this trade?')">
                                                                <i class="fas fa-play me-1"></i>Execute
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('admin.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Cancel this trade?')">
                                                                <i class="fas fa-times me-1"></i>Cancel
                                                            </button>
                                                        </form>
                                                    </div>
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
        </div>
    </div>
</div>

@endsection 