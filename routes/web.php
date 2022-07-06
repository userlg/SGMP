<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);
