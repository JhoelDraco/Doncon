<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;

use Illuminate\Support\Facades\Route;

//Grupos diseñados para la parte administrativas

//Grupo diseñado para el crud del producto
Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto', 'index')->name('producto.index');
    Route::get('/producto/crear', 'crear')->name('producto.crear');
    Route::get('/producto/{producto}/mostrar', 'mostrar')->name('producto.mostrar');
    Route::get('/producto/{producto}/editar', 'editar')->name('producto.editar');

    Route::post('/producto', 'almacenar')->name('producto.almacenar');
    Route::put('/producto/{producto}', 'actualizar')->name('producto.actualizar');
    Route::delete('/producto/{producto}', 'eliminar')->name('producto.eliminar');
});

//GRUPO DISEÑADO PARA EL CRUD DE CLIENTE
Route::controller(ClienteController::class)->group(function(){
    Route::get('/cliente', 'index')->name('cliente.index');
    Route::get('/cliente/crear', 'crear')->name('cliente.crear');
    Route::get('/cliente/{cliente}/mostrar', 'mostrar')->name('cliente.mostrar');
    Route::get('/cliente/{cliente}/editar', 'editar')->name('cliente.editar');

    Route::post('/cliente', 'almacenar')->name('cliente.almacenar');
    Route::put('/cliente/{cliente}', 'actualizar')->name('cliente.actualizar');
    Route::delete('/cliente/{cliente}', 'eliminar')->name('cliente.eliminar');
});

//GRUPO DISEÑADO PARA EL CRUD DE SERVICIO
Route::controller(ServicioController::class)->group(function(){
    Route::get('/servicio', 'index')->name('servicio.index');
    Route::get('/servicio/crear', 'crear')->name('servicio.crear');
    Route::get('/servicio/{servicio}/mostrar', 'mostrar')->name('servicio.mostrar');
    Route::get('/servicio/{servicio}/editar', 'editar')->name('servicio.editar');

    Route::post('/servicio', 'almacenar')->name('servicio.almacenar');
    Route::put('/servicio/{servicio}', 'actualizar')->name('servicio.actualizar');
    Route::delete('/servicio/{servicio}', 'eliminar')->name('servicio.eliminar');
});