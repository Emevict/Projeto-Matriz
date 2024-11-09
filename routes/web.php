<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LoginMiddleware;

//Rota principal
Route::middleware([LoginMiddleware::class])->group(function () { //Validar se o usuario esta logado
    Route::get('/', function () {
        return view('home');
    })->name('home');
});

//Login com Google
Route::controller(SocialiteController::class)->group(function () {
    Route::get('/auth/redirection/{provider}', 'authProviderRedirect')->name('auth.redirection');
    Route::get('/auth/{provider}/callback', 'socialAuth')->name('auth.callback');
});

//Rotas das guias
Route::get('/login', [UserController::class, 'guideLogin'])->name('guideLogin');
Route::get('/createlogin', [UserController::class, 'guideCreateLogin'])->name('guideCreateLogin');

//Rota dos processos
Route::post('/createlogin', [UserController::class, 'createLogin'])->name('createLogin'); 
Route::post('/authlogin', [UserController::class, 'authLogin'])->name('authLogin'); 
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/addProfile', [ProfileController::class, 'addProfile'])->name('addProfile');
Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
Route::delete('/deleteProfile/{profile_id}', [ProfileController::class, 'deleteProfile'])->name('deleteProfile');

//Rotas para ADMIN
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/permission', [PermissionController::class, 'guidePermission'])->name('guidePermission');
    Route::post('/update-admin/{user_id}/{is_admin}', [PermissionController::class, 'updateAdminStatus'])->name('update-user-admin');
    Route::get('/perfil', [ProfileController::class, 'guideProfile'])->name('guideProfile');
});