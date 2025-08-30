<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BuyStockController;
use App\Http\Controllers\CopyTradeController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SellStockController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockOrderController;
use App\Http\Controllers\SubPackageController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/our-solutions', 'pages.our-solutions')->name('our-solutions');
Route::view('/profit-calculator', 'pages.calculator')->name('calculator');
Route::view('/fcm-disclosure', 'pages.disclosure')->name('disclosure');
Route::view('/terms-condition', 'pages.terms')->name('terms');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update/profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::post('update/password/', [UserController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals.index');

    Route::get('wallet', [UserController::class, 'wallet'])->name('wallet');

    Route::get('deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::post('process/deposit/', [DepositController::class, 'processDeposit'])->name('processDeposit');
    Route::get('crypto/payment/{id}', [DepositController::class, 'cryptoPayment'])->name('cryptoPayment');
    Route::post('process/payment/{id}', [DepositController::class, 'confirmPayment'])->name('confirmPayment');
    Route::get('bank/deposit/', [DepositController::class, 'bankDeposit'])->name('bankDeposit');
    Route::post('bank/payment/', [DepositController::class, 'bankPayment'])->name('bankPayment');

    Route::get('withdrawal/', [WithdrawalController::class, 'withdrawal'])->name('withdrawal');
    Route::post('store/withdrawal/', [WithdrawalController::class, 'withdrawalStore'])->name('withdrawalStore');

    Route::get('fetch/stocks', [StockController::class, 'getStockData'])->name('getStockData');

    Route::get('/stocks', [StockController::class, 'index'])->name('stocks');
    Route::get('test/stocks', [StockController::class, 'testStockData']);

    Route::get('buy/stock/{id}', [StockOrderController::class, 'buyStock'])->name('buyStock');
    Route::post('buy/stock', [StockOrderController::class, 'store'])->name('buyStock.store');
    Route::get('stock/holdings/', [StockOrderController::class, 'stockHoldings'])->name('stockHoldings');
    Route::get('buy/history/{id}', [StockOrderController::class, 'buyHistory'])->name('buyHistory');
    Route::get('filled-order/history', [StockOrderController::class, 'filledOrders'])->name('filledOrders');
    Route::get('limit-order/history', [StockOrderController::class, 'limitOrders'])->name('limitOrders');

    Route::get('sell/stock/{id}', [SellStockController::class, 'sellStock'])->name('sellStock');
    Route::post('stock/sell/stock', [SellStockController::class, 'storeSell'])->name('storeSell');
    Route::get('sell/history/', [SellStockController::class, 'sellHistory'])->name('sellHistory');
    Route::get('sell/orders/', [SellStockController::class, 'sellOrders'])->name('sellOrders');

    Route::get('copytrades', [CopyTradeController::class, 'index'])->name('copy.trade.index');
    Route::post('store/copytrades', [CopyTradeController::class, 'store'])->name('copy.trade.store');
    Route::get('copy-trade/history', [CopyTradeController::class, 'history'])->name('copy.trade.history');

    Route::get('subscription', [SubPackageController::class, 'index'])->name('subscription.index');
    Route::post('subscription/store', [SubPackageController::class, 'store'])->name('subscription.store');
    Route::get('subscription/history', [SubPackageController::class, 'history'])->name('subscription.history');

    // Trade Routes
    Route::get('trade', [TradeController::class, 'index'])->name('trade.index');
    Route::get('trade/history', [TradeController::class, 'history'])->name('trade.history');
    Route::get('trade/{tradePair}', [TradeController::class, 'show'])->name('trade.show');
    Route::post('trade/{tradePair}/store', [TradeController::class, 'store'])->name('trade.store');
    Route::patch('trade/{trade}/close', [TradeController::class, 'close'])->name('trade.close');
    Route::delete('trade/{trade}/cancel', [TradeController::class, 'cancel'])->name('trade.cancel');

});

Route::middleware('auth')->group(function () {
    Route::get('/verify-email', [VerifyEmailController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, 'verify'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
