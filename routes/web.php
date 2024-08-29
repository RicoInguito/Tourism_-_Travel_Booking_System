<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Access Dashboard
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'dash']);

//Login
// Route to display the login form
Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route to handle the login submission
Route::post('/login', [LoginController::class, 'loginUser']);

//Users
Route::resource('users', UserController::class);
//Tours
Route::resource('tours', ToursController::class);
//Bookings
Route::resource('bookings', BookingsController::class);
//Destinations
Route::resource('destinations', DestinationController::class);