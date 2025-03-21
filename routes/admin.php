<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
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
     Route::get('transactions/withdrawal', [TransactionController::class, 'withdraws'])->name('transactions.withdraws');
     Route::get('approve/withdrawal/{id}', [TransactionController::class, 'approveWithdraw'])->name('approveWithdraw');

     Route::get('all/stocks', [StockController::class, 'index'])->name('stocks.index');
     Route::delete('delete/stock/{id}', [StockController::class, 'deleteStock'])->name('deleteStock');
     Route::get('trade/history', [StockController::class, 'tradeHistory'])->name('tradeHistory');
     Route::post('trade/profit/{id}', [StockController::class, 'addStockProfit'])->name('addStockProfit');
     Route::delete('delete/trade/{id}', [StockController::class, 'deleteTrade'])->name('deleteTrade');
});
