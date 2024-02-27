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
    return view('Clientes.inicio');
});


//Grupo para el login
Route::controller(loginController::class)->group(function(){
   // Route::get('/login/acceso', 'acceso')->name('login.acceso');//cambio de carpeta login 24/02/24
    //Route::get('/login', 'acceso')->name('login.acceso');
    
});
Route::controller(InicioController::class)->group(function(){
     Route::get('/inicio', 'inicio')->name('inicio.inicio');
     Route::get('/nosotros', 'nosotros')->name('nosotros.nosotros');
     Route::get('/servicios', 'servicios')->name('servicios.servicios');
     Route::get('/articulos', 'articulos')->name('articulos.articulos');
     Route::get('/artiordenadores', 'artiordenadores')->name('artiordenadores.artiordenadores');
     
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
