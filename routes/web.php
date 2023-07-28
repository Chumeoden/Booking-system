<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;



Route::get('/', function () {
    return view('HomePage.main');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Trang đăng ký
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//logout tài khoản khỏi homepage
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

// Trang người dùng
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Trang người dùng
Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');

Route::get('/viewsaccount', [DashBoardController::class, 'index'])->name('Account.viewsaccount');


