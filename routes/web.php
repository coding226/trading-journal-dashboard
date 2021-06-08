<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\SymbolanalyticsController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ToolsController;


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
Route::get('/cks', function() {
    Artisan::call('optimize');
    echo 'DiskFree'.disk_free_space(storage_path());
    echo 'DiskTotal'.disk_total_space(storage_path());
});

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/terms', function () { return view('landing.terms'); });
Route::get('/privacy', function () { return view('landing.privacy'); });
Route::get('/cookie', function () { return view('landing.cookie'); });
Route::get('/usepolicy', function () { return view('landing.usepolicy'); });

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    // Dashboard start
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboardinfo', [DashboardController::class, 'getinfoes'])->name('dashboard.getinfoes');
    Route::post('/drawdashchart', [DashboardController::class, 'drawdashchart'])->name('dashboard.drawdashchart');
    // Dashboard ends

    // Trade start
    Route::get('/mytrades', [TradeController::class, 'index'])->name('mytrades.index');
    Route::get('/activetrades', [TradeController::class, 'activetrades'])->name('activetrades.index');
    Route::get('/new-trade', [TradeController::class, 'addnewtrade'])->name('newtrade.index');
    Route::post('/createtrade', [TradeController::class, 'create'])->name('newtrade.create');
    Route::post('/import', [TradeController::class, 'import'])->name('trade.import');
    Route::get('/viewtrade/{username}', [TradeController::class, 'show'])->name('trade.show');
    Route::get('/downloadpdf/{username}', [TradeController::class, 'createPDF'])->name('trade.createPDF');
    Route::get('/edittrade/{username}', [TradeController::class, 'edit'])->name('trade.edit');
    Route::post('/deltrade/{username}', [TradeController::class, 'delete'])->name('trade.del');
    Route::post('/updatetrade/{tradeid}', [TradeController::class, 'update'])->name('trade.update',['tradeid']);
    Route::post('/trade-datefilter', [TradeController::class, 'datefilter'])->name('trade.filter');
    Route::post('/activetrade-datefilter', [TradeController::class, 'activedatefilter'])->name('trade.activefilter');
    // Trade end

    // Analytics start
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
    Route::get('/analytics-long', [AnalyticsController::class, 'long_index'])->name('analytics.long');
    Route::get('/analytics-short', [AnalyticsController::class, 'short_index'])->name('analytics.short');
    // Analytics ends

    // Symbol Analytics start
    Route::get('/symbolanalytics', [SymbolanalyticsController::class, 'index'])->name('symbolanalytics.index');
    Route::get('/symbolmore/{symbolid}', [SymbolanalyticsController::class, 'symbolmore'])->name('symbolanalytics.moredata', ['symbolid']);
    // Symbol Analytics ends

    // User start
    Route::get('/account-setting', [UserController::class, 'setting'])->name('user.setting');
    Route::get('/new-account', [UserController::class, 'new_account'])->name('user.newaccount');
    Route::get('/change_user/{id}', [UserController::class, 'change_user'])->name('user.change_user');
    Route::post('/create_subaccount', [UserController::class, 'create_subaccount'])->name('user.createsub');
    Route::post('/mainsetting', [UserController::class, 'mainsetting'])->name('user.mainsetting');
    Route::post('/changepassword', [UserController::class, 'changepassword'])->name('user.changepassword');
    Route::post('/depositwithdrawal', [UserController::class, 'depositwithdrawal'])->name('user.depositwithdrawal');
    Route::post('/setstartingbal', [UserController::class, 'setstartingbal'])->name('user.setstartingbal');
    Route::get('/getstartingbal', [UserController::class, 'getstartingbal'])->name('user.getstartingbal');
    Route::get('/subuser-setting', [UserController::class, 'subuser_setting'])->name('user.subusersetting');
    Route::post('/change-subsetting', [UserController::class, 'change_subsetting'])->name('user.change_subsetting');
    Route::post('/darkmode', [UserController::class, 'darkmode'])->name('user.darkmode');
    // User ends

    //Subscription start
    Route::get('/subscribe-checkout/{plan}', [SubscriptionController::class, 'show'])->name('subscribe.checkout', ['plan']);
    Route::post('/subscribe-store', [SubscriptionController::class, 'store'])->name('subscribe.store');
    Route::get('/subscribe-approval', [SubscriptionController::class, 'approval'])->name('subscribe.approval');
    Route::get('/subscribe-cancelled', [SubscriptionController::class, 'cancelled'])->name('subscribe.cancelled');
    //Subscription ends

    //Tools part start
    Route::get('/notes', [ToolsController::class, 'notes'])->name('tools.notes');
    Route::post('/addnote', [ToolsController::class, 'addnote'])->name('tools.note.add');
    Route::get('/editnotes', [ToolsController::class, 'editnotes'])->name('tools.note.edit');
    Route::post('/updatenote', [ToolsController::class, 'updatenote'])->name('tools.note.update');
    Route::post('/delnote', [ToolsController::class, 'delnote'])->name('tools.note.del');
    Route::get('/ecocal', [ToolsController::class, 'ecocal'])->name('tools.ecocal');
    Route::get('/nationalcal', [ToolsController::class, 'nationalcal'])->name('tools.nationalcal');
    Route::get('/markethour', [ToolsController::class, 'markethour'])->name('tools.markethour');
    Route::get('/currency', [ToolsController::class, 'currency'])->name('tools.currency');
    //Tools part ends
});

Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
Route::get('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');

//Contact us
Route::get('/course', [HomeController::class, 'course'])->name('course.index');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus.index');
Route::post('validate-g-recaptcha', [HomeController::class, 'validateGCaptch']);