<?php


use App\Http\Controllers\Web\Admin\AccountController;
use App\Http\Controllers\Web\Admin\AdminAuthController;
use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Admin\RadioController;
use App\Http\Controllers\Web\Admin\SearchRadioController;
use App\Http\Controllers\Web\Admin\SettingController;
use App\Http\Controllers\Web\Admin\SyncRadioController;
use App\Http\Controllers\Web\Admin\UpdateRadioController;
use Illuminate\Support\Facades\Route;

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




Route::group(['as' => 'admin.' , 'prefix' => env('ADMIN_PANEL')] , function()
{
    Route::middleware('admin')->group(function()
    {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        Route::view('new-admin', 'admin.create-new-admin')->name('newAdmin');
        Route::post('new-admin', [AccountController::class,'store'])->name('newAdmin.store');

        Route::prefix('radio/search')->group(function (){
            Route::get('/',[SearchRadioController::class,'index'])->name('radio.search.index');
            Route::get('request/{uuid}',[SearchRadioController::class,'request'])->name('radio.search.request');
        });


        Route::prefix('radio/sync')->group(function (){
            Route::get('/',[SyncRadioController::class,'index'])->name('radio.update.index');
            Route::get('request',[SyncRadioController::class,'request'])->name('radio.update.request');
            Route::post('store',[SyncRadioController::class,'store'])->name('radio.update.store');
            Route::delete('delete/{id}',[SyncRadioController::class,'destroy'])->name('radio.update.delete');
        });

        Route::prefix('radios')->group(function (){
            Route::get('/',[RadioController::class,'index'])->name('radio.index');
            Route::get('details/{radio}',[RadioController::class,'details'])->name('radio.details');
            Route::put('update/{radio}',[RadioController::class,'update'])->name('radio.update');
        });


        Route::prefix('settings')->group(function(){
            Route::get('/', [SettingController::class,'index'])->name('setting.index');
            Route::put('update/{setting}',[SettingController::class,'update'])->name('setting.update');
        });




        Route::get('account-settings',[AccountController::class ,'show'])->name('account-settings');
        Route::post('account-settings/store/info',[AccountController::class ,'storeInfo'])->name('account-settings.store.info');
        Route::post('account-settings/store/new-password',[AccountController::class ,'storePassword'])->name('account-settings.store.new-password');
        Route::post('logout',[AdminAuthController::class , 'logout'])->name('logout');
    });


    // authentication part ...

    Route::get('/login', [AdminAuthController::class , 'show'])->name('login.show');
    Route::post('/login', [AdminAuthController::class , 'login'])->name('login');

});


