<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LagoutController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas de la web
|--------------------------------------------------------------------------
|
| Aqui es donde se registran las rutas de la web para tu aplicación.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Grupo para diseñado para el usurio general
Route::controller(IndexController::class)->group(function(){
    Route::get('/index', 'index')->name('main.index');
});

//Grupo para el login
Route::controller(loginController::class)->group(function(){
    Route::get('/login/acceso', 'acceso')->name('login.acceso');
});
