<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\LogoutController;

use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('home');
})->name('index');

Route::view('/home', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [AdminController::class, 'show'])->name('dashboard');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
