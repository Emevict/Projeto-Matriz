<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;


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

//Rotas para ADMIN
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/permission', [PermissionController::class, 'guidePermission'])->name('guidePermission');
    Route::post('/update-admin/{user_id}/{is_admin}', [PermissionController::class, 'updateAdminStatus'])->name('update-user-admin');
});