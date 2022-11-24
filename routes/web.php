<?php

use App\Http\Controllers\ProfileController;
use App\Models\Business;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(["namespace"=>'App\Http\Controllers\Admin','prefix'=>'admin','middleware'=>'role:Admin'],function (){
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
    });
    Route::group(["namespace"=>'Client','prefix'=>'client'],function(){
        Route::get('/','IndexController')->name('client.index');
        Route::get('/create','CreateController')->name('client.create');
        Route::post('/store','StoreController')->name('client.store');
        Route::get('/{client}','ShowController')->name('client.show');
        Route::get('/{client}/edit','EditController')->name('client.edit');
        Route::patch('/{client}','UpdateController')->name('client.update');
        Route::delete('/{client}','DeleteController')->name('client.delete');
    });

    Route::group(["namespace"=>'Business','prefix'=>'business'],function(){
        Route::get('/','IndexController')->name('business.index');
        Route::get('/create','CreateController')->name('business.create');
        Route::post('/store','StoreController')->name('business.store');
        Route::get('/{business}','ShowController')->name('business.show');
        Route::get('/{business}/edit','EditController')->name('business.edit');
        Route::patch('/{business}','UpdateController')->name('business.update');
        Route::delete('/{business}','DeleteController')->name('business.delete');
    });
});
Route::group(["namespace"=>'App\Http\Controllers\Api'],function () {
    Route::get('/invoice/api-payment', 'CreateController')->name('topUp');
    Route::post('/invoice/api-payment/store', 'PaymentController')->name('payment.index');

})->middleware('role:Business');

     Route::get('/dashboard',function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/balance',\App\Http\Controllers\Admin\Client\BalanceController::class)->name('balanceweb');
Route::get('/account',\App\Http\Controllers\Admin\Business\AccountController::class)->name('accountweb');


require __DIR__.'/auth.php';
