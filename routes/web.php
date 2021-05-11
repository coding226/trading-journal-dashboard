<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\SymbolanalyticsController;
use App\Http\Controllers\admin\AdmindashboardController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\MemberController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm']);

Route::post('/admin/login', [LoginController::class, 'adminLogin']);
Route::post('/admin/register', [RegisterController::class, 'createAdmin']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');


Route::group(['middleware' => ['auth']], function () {

    // Dashboard start
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // Dashboard ends

    // Trade start
    Route::get('/mytrades', [TradeController::class, 'index'])->name('mytrades.index');
    Route::get('/activetrades', [TradeController::class, 'activetrades'])->name('activetrades.index');
    Route::get('/new-trade', [TradeController::class, 'addnewtrade'])->name('newtrade.index');
    Route::post('/createtrade', [TradeController::class, 'create'])->name('newtrade.create');
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
    Route::post('/othersetting', [UserController::class, 'othersetting'])->name('user.othersetting');
    // User ends

    //Contact us
    Route::get('/contactus', [DashboardController::class, 'contactus'])->name('contactus.index');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function(){

    Route::get('/dashboard', [AdmindashboardController::class, 'index'])->name('admindashboard.index');
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
    Route::get('/create-account', [MemberController::class, 'create_account'])->name('member.create');
});