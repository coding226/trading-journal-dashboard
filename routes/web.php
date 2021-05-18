<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\SymbolanalyticsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/pricing', function () {
    return view('landing.pricing');
});

Route::get('/contact', function () {
    return view('landing.contactus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    // Dashboard start
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // Dashboard ends

    // Trade start
    Route::get('/mytrades', [TradeController::class, 'index'])->name('mytrades.index');
    Route::get('/activetrades', [TradeController::class, 'activetrades'])->name('activetrades.index');
    Route::get('/new-trade', [TradeController::class, 'addnewtrade'])->name('newtrade.index');
    Route::post('/createtrade', [TradeController::class, 'create'])->name('newtrade.create');
    Route::get('/videwtrade/{username}', [TradeController::class, 'show'])->name('trade.show');
    Route::get('/edittrade/{username}', [TradeController::class, 'edit'])->name('trade.edit');
    Route::post('/deltrade/{username}', [TradeController::class, 'delete'])->name('trade.del');
    Route::post('/updatetrade/{tradeid}', [TradeController::class, 'update'])->name('trade.update',['tradeid']);
    Route::post('/trade-datefilter', [TradeController::class, 'datefilter'])->name('trade.filter');
    // Trade end

    // Analytics start
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
    Route::get('/analytics-long', [AnalyticsController::class, 'long_index'])->name('analytics.long');
    Route::get('/analytics-short', [AnalyticsController::class, 'short_index'])->name('analytics.short');
    // Analytics ends

    // Symbol Analytics start
    Route::get('/symbolanalytics', [SymbolanalyticsController::class, 'index'])->name('symbolanalytics.index');
    Route::get('/symbolmore', [SymbolanalyticsController::class, 'symbolmore'])->name('symbolanalytics.moredata');
    // Symbol Analytics ends

    // User start
    Route::get('/account-setting', [UserController::class, 'setting'])->name('user.setting');
    Route::get('/new-account', [UserController::class, 'new_account'])->name('user.newaccount');
    Route::get('/change_user/{id}', [UserController::class, 'change_user'])->name('user.change_user');
    Route::post('/create_subaccount', [UserController::class, 'create_subaccount'])->name('user.createsub');
    Route::post('/mainsetting', [UserController::class, 'mainsetting'])->name('user.mainsetting');
    Route::post('/changepassword', [UserController::class, 'changepassword'])->name('user.changepassword');
    Route::post('/depositwithdrawal', [UserController::class, 'depositwithdrawal'])->name('user.depositwithdrawal');
    Route::get('/subuser-setting', [UserController::class, 'subuser_setting'])->name('user.subusersetting');
    Route::post('/change-subsetting', [UserController::class, 'change_subsetting'])->name('user.change_subsetting');
    Route::post('/darkmode', [UserController::class, 'darkmode'])->name('user.darkmode');
    // User ends

    //Contact us
    // Route::get('/contactus', [DashboardController::class, 'contactus'])->name('contactus.index');
});