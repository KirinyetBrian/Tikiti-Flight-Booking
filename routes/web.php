<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\web\SearchFlightController;
use App\Http\Controllers\GetPriceController;
use App\Http\Controllers\OrderFlightController;

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
    return view('booking');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/search', FlightSearchController::class);



Route::post('/price', GetPriceController::class);

Route::post('/order', OrderFlightController::class);





Route::get('',SearchFlightController::class);



