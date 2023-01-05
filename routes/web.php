<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SorteioController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\UserController;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/cadastro', [AuthController::class, 'register'])->name('register.custom');
Route::post('/cadastro-store', [AuthController::class, 'registerStore'])->name('register.custom.store');

Route::get('/login-custom', [AuthController::class, 'login'])->name('login.custom');

Route::post('/save-number', [NumberController::class, 'store'])->name('save.number');

Route::get('/cidade/{estado}', [AuthController::class, 'getCidade'])->name('get.cidade');

Route::middleware('auth')->group(function () {
    Route::get('/numero/{number}', [NumberController::class, 'numberGet'])->name('number.get');
});

Route::middleware('auth')->middleware('email')->group(function () {
    Route::get('/dashboard', [PainelController::class, 'index'])->name('painel.index');
    Route::get('/gerarqr', [GenerateController::class, 'index'])->name('painel.gerarqr');
    Route::post('/generate', [GenerateController::class, 'generate'])->name('generate');
    Route::get('/sorteio', [SorteioController::class, 'index'])->name('painel.sorteio');
    Route::get('/sorteio-number', [SorteioController::class, 'sorteio'])->name('sorteio');
    Route::get('/sorteados', [SorteioController::class, 'sorteados'])->name('painel.sorteados');
    Route::get('/usuarios', [UserController::class, 'index'])->name('painel.users');
});
