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
//Route::get('admin/dashboard', [AdminController::class,'dashboard']);

/** By Prakhar */
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Admin routes protected by 'admin' middleware
Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/user-register-details', [AdminController::class, 'userRegisterDetails'])->name('admin.user-register-details');
    Route::get('admin/user-login-details', [AdminController::class, 'userLoginDetails'])->name('admin.user-login-details');
    //Route::get('admin/user-details', [AdminController::class, 'userDetails'])->name('admin.user-details');
    Route::get('admin/about-us-content', [AdminController::class, 'aboutUsContent'])->name('admin.about-us-content');
    Route::get('admin/about-us-image', [AdminController::class, 'aboutUsImage'])->name('admin.about-us-image');
    Route::get('admin/profile', [AdminController::class,'profile']);

});
