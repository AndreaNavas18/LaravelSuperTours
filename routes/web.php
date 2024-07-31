<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;


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
    Route::post('/savePickDrop', 'savePickDrop')->name('savePickDrop');
    Route::get('/confirmInformation', 'confirmInformation')->name('confirmInformation');
    Route::view('/confirmPayment', 'formPay')->name('formPay'); 
});
Route::view('/services','services');
Route::view('/destinations','destinations');
Route::view('/aboutus','aboutus');
Route::view('/faq','faq');
Route::view('/contact','contact');

// Route::get('/register', [RegisterrController::class, 'showRegister'])->name('register');
// Route::post('/register', [RegisterrController::class, 'register']);
// Route::get('/login', [LoginnController::class, 'showLogin'])->name('login');
// Route::post('/login', [LoginnController::class, 'login']);

Auth::routes();

// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login/guest', [HomeController::class, 'ingresoInvitado'])->name('login.guest');

Route::post('/login/guest', [HomeController::class, 'creacionInvitado'])->name('login.guest.store');

