<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FlightController;
use App\Http\Controllers\Frontend\HotelController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\RailwayController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
/* Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/flight-listing', [FlightController::class, 'index'])->name('flights');
Route::get('/hotel-listing', [HotelController::class, 'index'])->name('hotels');
Route::get('/listing', [PackageController::class, 'index'])->name('packages');
Route::get('/railways', [RailwayController::class, 'index'])->name('railways');
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); */
