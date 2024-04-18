<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/', '__invoke')->name('home');
    Route::get('/areas', 'areas')->name('areas');
    Route::get('/show-routes', 'showRoutes')->name('showRoutes');
    Route::get('/reserve-trip', 'reserveTrip')->name('reserveTrip');
    Route::get('/cancel-reserve', 'cancelReserve')->name('cancelReserve');
    Route::get('/pickUp-dropOff', 'pickupDropoff')->name('pickupDropoff');
});
Route::view('/services','services');
Route::view('/destinations','destinations');
Route::view('/aboutus','aboutus');
Route::view('/faq','faq');
Route::view('/contact','contact');


