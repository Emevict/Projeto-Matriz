<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Rota principal
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Rotas das guias
Route::get('/login', [UserController::class, 'guideLogin'])->name('guideLogin');
Route::get('/createlogin', [UserController::class, 'guideCreateLogin'])->name('guideCreateLogin');

//Rota dos processos
Route::post('/createlogin', [UserController::class, 'createLogin'])->name('createLogin'); 
Route::post('/authlogin', [UserController::class, 'authLogin'])->name('authLogin'); 
Route::post('/logout', [UserController::class, 'logout'])->name('logout'); 