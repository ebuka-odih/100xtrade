@extends('dashboard.layout.app')
@section('content')

<div class="container-fluid main-content px-2 px-lg-4" style="margin-top: 4rem; padding-top: 2rem;">
    <!-- Wallet Header -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="text-white mb-1">Wallet</h4>
                            <p class="text-white-50 mb-0">Manage your funds and transactions</p>
                        </div>
                        <div class="text-end">
                            <h3 class="text-white mb-0">${{ number_format($user->balance, 2) }}</h3>
                            <small class="text-white-50">Available Balance</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wallet Stats -->
    <div class="row my-4 g-4">
        <div class="col-md-6">
            <div class="card bg-gradient-primary border-0 shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white-50 mb-1">Total Deposits</h6>
                            <h3 class="text-white mb-0">${{ number_format($deposit, 2) }}</h3>
                            <small class="text-white-50">Funds added to account</small>
                        </div>
                        <div class="text-end">
                            <div class="bg-white bg-opacity-20 rounded-circle p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 9h4a1 1 0 0 0 0-2h-2V6a1 1 0 0 0-2 0v1a3 3 0 0 0 0 6h2a1 1 0 0 1 0 2H9a1 1 0 0 0 0 2h2v1a1 1 0 0 0 2 0v-1a3 3 0 0 0 0-6h-2a1 1 0 0 1 0-2m1-8a11 11 0 1 0 11 11A11 11 0 0 0 12 1m0 20a9 9 0 1 1 9-9a9 9 0 0 1-9 9"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-gradient-warning border-0 shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white-50 mb-1">Total Withdrawals</h6>
                            <h3 class="text-white mb-0">${{ number_format($withdrawal, 2) }}</h3>
                            <small class="text-white-50">Funds withdrawn</small>
                        </div>
                        <div class="text-end">
                            <div class="bg-white bg-opacity-20 rounded-circle p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 9h4a1 1 0 0 0 0-2h-2V6a1 1 0 0 0-2 0v1a3 3 0 0 0 0 6h2a1 1 0 0 1 0 2H9a1 1 0 0 0 0 2h2v1a1 1 0 0 0 2 0v-1a3 3 0 0 0 0-6h-2a1 1 0 0 1 0-2m1-8a11 11 0 1 0 11 11A11 11 0 0 0 12 1m0 20a9 9 0 1 1 9-9a9 9 0 0 1-9 9"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-body p-4">
                    <h5 class="text-white mb-4">Quick Actions</h5>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <a href="{{ route('user.deposit') }}" class="action-button deposit-btn">
                                <div class="button-content">
                                    <div class="button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                        </svg>
                                    </div>
                                    <div class="button-text">
                                        <h5 class="mb-1">Deposit Funds</h5>
                                        <small>Add money to your account</small>
                                    </div>
                                    <div class="button-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('user.withdrawal') }}" class="action-button withdraw-btn">
                                <div class="button-content">
                                    <div class="button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 2v20M6 5h5.5a3.5 3.5 0 0 1 0 7H6"/>
                                        </svg>
                                    </div>
                                    <div class="button-text">
                                        <h5 class="mb-1">Withdraw Funds</h5>
                                        <small>Take money out of your account</small>
                                    </div>
                                    <div class="button-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-dark border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="text-white mb-0">Recent Transactions</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-0">Type</th>
                                    <th class="border-0">Amount</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $recentDeposits = \App\Models\Deposit::where('user_id', auth()->id())
                                        ->latest()
                                        ->take(5)
                                        ->get();
                                    $recentWithdrawals = \App\Models\Withdrawal::where('user_id', auth()->id())
                                        ->latest()
                                        ->take(5)
                                        ->get();
                                    $recentTransactions = $recentDeposits->concat($recentWithdrawals)
                                        ->sortByDesc('created_at')
                                        ->take(10);
                                @endphp
                                
                                @forelse($recentTransactions as $transaction)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            @if($transaction instanceof \App\Models\Deposit)
                                                <span class="badge bg-success">Deposit</span>
                                            @else
                                                <span class="badge bg-warning">Withdrawal</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-white">${{ number_format($transaction->amount, 2) }}</td>
                                    <td>
                                        @if($transaction->status == 1)
                                            <span class="badge bg-success">Completed</span>
                                        @elseif($transaction->status == 0)
                                            <span class="badge bg-warning">Pending</span>
                                        @else
                                            <span class="badge bg-danger">Failed</span>
                                        @endif
                                    </td>
                                    <td class="text-white">{{ $transaction->created_at->format('M d, Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-white-50 py-4">
                                        No transactions found
                                    </td>
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

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.bg-gradient-warning {
    background: linear-gradient(135deg, #ffc107 0%, #ff8c00 100%);
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

/* Action Button Styles */
.action-button {
    display: block;
    text-decoration: none;
    border-radius: 12px;
    padding: 0;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    height: 80px;
}

.action-button:hover {
    text-decoration: none;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.action-button:active {
    transform: translateY(-1px);
}

.button-content {
    display: flex;
    align-items: center;
    padding: 0 1.5rem;
    position: relative;
    height: 100%;
}

.button-icon {
    margin-right: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
}

.button-text {
    flex: 1;
}

.button-text h5 {
    margin: 0;
    font-weight: 600;
    font-size: 1rem;
}

.button-text small {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.8rem;
    margin-top: 2px;
    display: block;
}

.button-arrow {
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.action-button:hover .button-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* Deposit Button */
.deposit-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.deposit-btn:hover {
    background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
    color: white;
    border-color: rgba(255, 255, 255, 0.3);
}

.deposit-btn .button-icon {
    background: rgba(255, 255, 255, 0.15);
}

/* Withdraw Button */
.withdraw-btn {
    background: linear-gradient(135deg, #ffc107 0%, #ff8c00 100%);
    color: white;
}

.withdraw-btn:hover {
    background: linear-gradient(135deg, #e6ac00 0%, #e67e00 100%);
    color: white;
    border-color: rgba(255, 255, 255, 0.3);
}

.withdraw-btn .button-icon {
    background: rgba(255, 255, 255, 0.15);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .action-button {
        height: 70px;
    }
    
    .button-content {
        padding: 0 1rem;
    }
    
    .button-icon {
        width: 40px;
        height: 40px;
        margin-right: 0.75rem;
    }
    
    .button-text h5 {
        font-size: 0.9rem;
    }
    
    .button-text small {
        font-size: 0.75rem;
    }
}
</style>

@endsection 