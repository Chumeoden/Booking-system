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


// Trang admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Thêm các route khác cho trang admin nếu cần
});

Route::group(['middleware' => 'checkRole'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.main');
    })->name('dashboard.main');
});

