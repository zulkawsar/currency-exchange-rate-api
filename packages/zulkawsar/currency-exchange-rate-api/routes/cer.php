<?php

use Zulkawsar\CurrencyExchangeRateApi\Http\Controllers\MoneyExchangeRate;
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
Route::get('/cer',[MoneyExchangeRate::class, 'index'])->name('cer');