<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth - Login / Register
Route::controller(AuthController::class)->group(function () {
    Route::name('web.')->group(function () {
        Route::get('/login', 'index_login')->name('login');
        Route::get('/register', 'index_register')->name('register');
    });
});

// Home Page
Route::controller(HomeController::class)->group(function () {
    Route::name('web.')->group(function () {
        Route::get('/', 'index')->name('home');
    });
});

/*
Route::prefix('/news')->group(function () {
    Route::controller(NewsController::class)->group(function () {
        Route::post('/store', 'store')->name('store_news');
    });
});
*/