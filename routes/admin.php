<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CopyTraderController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SubPackageController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
     Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
     Route::get('settings', [AdminController::class, 'settings'])->name('settings');
     Route::post('update/profile', [AdminController::class, 'updateProfile'])->name('updateProfile');
     Route::get('activities', [AdminController::class, 'activities'])->name('activities');
     Route::get('security', [AdminController::class, 'security'])->name('security');
     Route::post('update/password', [AdminController::class, 'updatePassword'])->name('updatePassword');

     Route::get('users', [UserController::class, 'index'])->name('users.index');
     Route::get('user/show/{id}', [UserController::class, 'show'])->name('user.show');
     Route::get('verify/user/{id}', [UserController::class, 'verifyUser'])->name('verifyUser');
     Route::post('fund/user/{id}', [UserController::class, 'fundUser'])->name('fundUser');
     Route::delete('delete/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

     Route::resource('/payment-method', PaymentMethodController::class)->only(['index', 'store', 'update', 'destroy']);
     Route::post('/save/bank-details', [PaymentMethodController::class, 'storeBankDetails'])->name('storeBankDetails');
     Route::post('/update/bank-details/{id}', [PaymentMethodController::class, 'updateBankDetails'])->name('updateBankDetails');

     Route::get('deposit/history', [TransactionController::class, 'deposits'])->name('transactions.deposits');
     Route::get('approve/deposit/{id}', [TransactionController::class, 'approveDeposit'])->name('approveDeposit');
     Route::get('decline/deposit/{id}', [TransactionController::class, 'declineDeposit'])->name('declineDeposit');
     Route::get('transactions/withdrawal', [TransactionController::class, 'withdraws'])->name('transactions.withdraws');
     Route::get('approve/withdrawal/{id}', [TransactionController::class, 'approveWithdraw'])->name('approveWithdraw');
     Route::get('decline/withdrawal/{id}', [TransactionController::class, 'declineWithdraw'])->name('declineWithdraw');

     Route::get('all/stocks', [StockController::class, 'index'])->name('stocks.index');
     Route::delete('delete/stock/{id}', [StockController::class, 'deleteStock'])->name('deleteStock');
     Route::get('trade/history', [StockController::class, 'tradeHistory'])->name('tradeHistory');
     Route::post('trade/profit/{id}', [StockController::class, 'addStockProfit'])->name('addStockProfit');
     Route::delete('delete/trade/{id}', [StockController::class, 'deleteTrade'])->name('deleteTrade');

     Route::get('create/copy-trader', [CopyTraderController::class, 'index'])->name('copyTrader.index');
    Route::post('store/copy-trader', [CopyTraderController::class, 'store'])->name('copyTrader.store');
    Route::patch('update/copy-trader/{id}', [CopyTraderController::class, 'update'])->name('copyTrader.update');
    Route::delete('delete/copy-trader/{id}', [CopyTraderController::class, 'destroy'])->name('copyTrader.destroy');

    Route::get('copied-trades/history', [HistoryController::class, 'copiedTrades'])->name('copiedTrades');
    Route::post('fund/copied-trades/{id}', [HistoryController::class, 'fundCopiedTrade'])->name('fundCopiedTrade');
    Route::get('close/copied-trades/{id}', [HistoryController::class, 'closeCopiedTrade'])->name('closeCopiedTrade');

    Route::resource('package', PackageController::class);

    Route::get('subscriptions', [SubPackageController::class, 'index'])->name('subscriptions.index');
    Route::get('approve/subscription/{id}', [SubPackageController::class, 'approveSubscription'])->name('approveSubscription');
    Route::get('decline/subscription/{id}', [SubPackageController::class, 'declineSubscription'])->name('declineSubscription');
    Route::post('fund/subscription/{id}', [SubPackageController::class, 'fundSubscription'])->name('fundSubscription');

});
