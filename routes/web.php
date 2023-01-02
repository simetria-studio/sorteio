<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\NumberController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/generate', [GenerateController::class, 'generate'])->name('generate');

Route::get('/cadastro', [AuthController::class, 'register'])->name('register.custom');
Route::post('/cadastro-store', [AuthController::class, 'registerStore'])->name('register.custom.store');

Route::get('/login-custom', [AuthController::class, 'login'])->name('login.custom');

Route::post('/save-number', [NumberController::class, 'store'])->name('save.number');