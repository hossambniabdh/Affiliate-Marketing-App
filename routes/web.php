<?php

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
    if (auth()) {
        return view('auth.login');
    }
})->middleware();

Auth::routes();
//Go To Home User
Route::get('/users', [App\Http\Controllers\BusController::class, 'home'])->name('users')->middleware();
//To Add Pic
Route::get('/pic', [App\Http\Controllers\HomeController::class, 'index'])->name('pic')->middleware();
//To complete register
Route::post('/complete', [\App\Http\Controllers\Auth\PictureController::class, 'index'])->name('complete')->middleware();
//To go to wallet
Route::get('/wallet', [App\Http\Controllers\wallet\WalletController::class, 'index'])->name('wallet')->middleware();
//Active Wallet
Route::get('/active', [\App\Http\Controllers\wallet\WalletController::class, 'active'])->name('active')->middleware();
//Add Income
Route::get('/income', [\App\Http\Controllers\wallet\WalletController::class, 'income'])->name('income')->middleware();
//Add Expenses
Route::get('/expenses', [\App\Http\Controllers\wallet\WalletController::class, 'expenses'])->name('expenses')->middleware();
//Add Balance
Route::get('/balance', [\App\Http\Controllers\wallet\WalletController::class, 'balance'])->name('balance')->middleware();
//Add Num Of Views
Route::get('/views', [\App\Http\Controllers\ViewController::class, 'index'])->name('views')->middleware();
//Chart
Route::get('/chart', [\App\Http\Controllers\ChartController::class, 'LineChart'])->name('chart')->middleware();
