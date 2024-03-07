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
});
Route::view('/services','services');
Route::view('/destinations','destinations');
Route::view('/aboutus','aboutus');
Route::view('/faq','faq');
Route::view('/contact','contact');


