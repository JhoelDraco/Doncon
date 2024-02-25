<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LagoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ArticulosController;
use App\Models\Producto;
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

//Grupo para diseñado para el usuario general
Route::controller(IndexController::class)->group(function(){
    Route::get('/index', 'index')->name('main.index');
    Route::get('/index/otro', 'otro')->name('main.otro');
});


//Grupo para el login
Route::controller(loginController::class)->group(function(){
   // Route::get('/login/acceso', 'acceso')->name('login.acceso');//cambio de carpeta login 24/02/24
    Route::get('/login', 'acceso')->name('login.acceso');
    
});
Route::controller(InicioController::class)->group(function(){
     Route::get('/inicio', 'index')->name('inicio.index');
     
 });

Route::controller(NosotrosController::class)->group(function(){
    Route::get('/nosotros', 'index')->name('nosotros.index');
    
});

Route::controller(ServiciosController::class)->group(function(){
    Route::get('/servicios', 'index')->name('servicios.index');
    
});

Route::controller(ArticulosController::class)->group(function(){
    Route::get('/articulos', 'index')->name('articulos.index');
    
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

