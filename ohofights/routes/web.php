<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FlightController;
use App\Http\Controllers\Frontend\HotelController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\RailwayController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('registration',[AdminController::class,'registration']);
Route::post('register_by_admin',[AdminController::class,'registerByAdmin']);
Route::post('login',[AdminController::class,'login']);
Route::get('about-us',[AdminController::class,'aboutUs']);
Route::get('logout', [AdminController::class,'logout']);
Route::get('profile', [AdminController::class,'profile']);

/** By Prakhar */
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
