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

Route::get('/home', HomeController::class);
// peticion a index de homeController
Route::get('/areas', [HomeController::class, 'areas'])->name('areas');
Route::get('/show-routes', [HomeController::class, 'showRoutes'])->name('showRoutes');
Route::view('/services','services');

