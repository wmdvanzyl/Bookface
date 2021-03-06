<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'serveIndex'])->name('serveIndex');

Route::get('/register', function () {
    return view('register');
});

Route::post('registerUserRoute', [RegistrationController::class, 'registerUser'])->name('registerUser');

Route::post('loginUserRoute', [LoginController::class, 'loginUser'])->name('loginUser');
