<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BuyStockController;
use App\Http\Controllers\CopiedTradeController;
use App\Http\Controllers\CryptoExchangeController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SellStockController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockOrderController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\TradeSignalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('/index', 'pages.index2')->name('index2');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/market/forex', 'pages.forex')->name('forex');
Route::view('/market/stock', 'pages.stocks')->name('stock');
Route::view('/market/crypto', 'pages.crypto')->name('crypto');
Route::view('/deposit-withdrawal', 'pages.deposit_withdrawals')->name('deposit_withdrawals');
Route::view('/trading-central', 'pages.trading_central')->name('trading_central');
Route::view('/execution_policy', 'pages.execution_policy')->name('execution_policy');


Route::view('/fcm-disclosure', 'pages.disclosure')->name('disclosure');
Route::view('/terms-condition', 'pages.terms')->name('terms');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update/profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::post('update/password/', [UserController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals.index');

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

    Route::get('crypto/exchange', [CryptoExchangeController::class, 'index'])->name('cryptoExchange');
    Route::post('crypto/exchange/deposit', [CryptoExchangeController::class, 'store'])->name('cryptoExchange.store');
    Route::post('crypto/exchange/withdrawal', [CryptoExchangeController::class, 'withdrawal'])->name('cryptoExchange.withdrawal');
    Route::get('crypto/order/history', [CryptoExchangeController::class, 'OrderHistory'])->name('OrderHistory');


    Route::get('trade/room', [TradeController::class, 'index'])->name('trade.index');
    Route::post('trade/room', [TradeController::class, 'store'])->name('trade.store');

    Route::get('signal/plans', [TradeSignalController::class, 'index'])->name('tradeSignal');
    Route::get('trade/signal/{id}', [TradeSignalController::class, 'tradeSignal'])->name('tradeSignal.create');
    Route::post('store/trade/signal/', [TradeSignalController::class, 'tradeSignalStore'])->name('tradeSignalStore');
    Route::get('trade-signal/history', [TradeSignalController::class, 'tradeSignalHistory'])->name('tradeSignalHistory');

    Route::get('copy-trades', [CopiedTradeController::class, 'index'])->name('copytrade.index');
    Route::post('store/copytrades', [CopiedTradeController::class, 'store'])->name('copytrade.store');


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
