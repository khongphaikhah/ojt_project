<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'logining'])->name('logining');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'registering'])->name('registering');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');
Route::get('/auth/callback/{provider}', [AuthController::class, 'callback'])->name('auth.callback');
