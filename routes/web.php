<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnalyticsController;
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


Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm']);
Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm']);

Route::post('/admin/login', [LoginController::class, 'adminLogin']);
Route::post('/admin/register', [RegisterController::class, 'createAdmin']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');


// Dashboard start
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Dashboard ends


// Trade start
Route::get('/mytrades', [TradeController::class, 'index'])->name('mytrades.index');
Route::get('/new-trade', [TradeController::class, 'addnewtrade'])->name('newtrade.index');
// Trade end


// Analytics start
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
// Analytics ends


// User start
Route::get('/account-setting', [UserController::class, 'setting'])->name('user.setting');
// User ends


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
