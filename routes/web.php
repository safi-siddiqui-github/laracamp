<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home_page')->name('home_page');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_page')->name('login_page');
    Route::get('/register', 'register_page')->name('register_page');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/register_user', 'register_user')->name('register_user');
    Route::get('/auth/redirect', 'google_redirect')->name('google_redirect');
    Route::get('/auth/google/callback', 'google_callback');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('bank')->name('bank.')->controller(BankController::class)->group(function () {
    Route::get('/', 'home_page')->name('home_page');
    Route::get('/dashboard', 'bank_dashboard_page')->name('dashboard_page');
    Route::get('/statement', 'bank_statement_page')->name('statement_page');
});

// Route::view('page-one', 'landing.page-one');
Route::view('page-two', 'landing.page-two');
Route::view('page-four', 'landing.page-four');