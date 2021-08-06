<?php

use Illuminate\Support\Facades\Route;
use AmrShawky\LaravelCurrency\Facade\Currency;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;

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

Route::get('/rate', function () {

      

    return Currency::convert()
    ->from('USD')
    ->to('EUR')
    // ->latest()
    // ->amount(1)
    // ->date('2021-06-30')
    // ->round(2)
    ->get();

    
    
});

