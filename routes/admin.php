<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

//Grupos diseñados para la parte administrativas

//Grupo diseñado para el crud de los usuarios
Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuario', 'index')->middleware('can:admin.usuario.index')->name('usuario.index');
    Route::get('/usuario/crear', 'crear')->middleware('can:admin.usuario.crear')->name('usuario.crear');
    Route::get('/usuario/{usuario}/mostrar', 'mostrar')->middleware('can:admin.usuario.mostrar')->name('usuario.mostrar');
    Route::get('/usuario/{usuario}/editar', 'editar')->middleware('can:admin.usuario.editar')->name('usuario.editar');

    Route::post('/usuario', 'almacenar')->middleware('can:admin.usuario.crear')->name('usuario.almacenar');
    Route::put('/usuario/{usuario}', 'actualizar')->middleware('can:admin.usuario.editar')->name('usuario.actualizar');
    Route::delete('/usuario/{usuario}', 'eliminar')->middleware('can:admin.usuario.eliminar')->name('usuario.eliminar');
});

//Grupo diseñado para el crud de los roles
Route::controller(RoleController::class)->group(function(){
    Route::get('/rol', 'index')->middleware('can:admin.rol.index')->name('rol.index');
    Route::get('/rol/crear', 'crear')->middleware('can:admin.rol.crear')->name('rol.crear');
    Route::get('/rol/{rol}/mostrar', 'mostrar')->middleware('can:admin.rol.mostrar')->name('rol.mostrar');
    Route::get('/rol/{rol}/editar', 'editar')->middleware('can:admin.rol.editar')->name('rol.editar');

    Route::post('/rol', 'almacenar')->middleware('can:admin.rol.crear')->name('rol.almacenar');
    Route::put('/rol/{rol}', 'actualizar')->middleware('can:admin.rol.editar')->name('rol.actualizar');
    Route::delete('/rol/{rol}', 'eliminar')->middleware('can:admin.rol.eliminar')->name('rol.eliminar');
});

//Grupo diseñado para el crud del producto
Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto', 'index')->middleware('can:admin.producto.index')->name('producto.index');
    Route::get('/producto/crear', 'crear')->middleware('can:admin.producto.crear')->name('producto.crear');
    Route::get('/producto/{producto}/mostrar', 'mostrar')->middleware('can:admin.producto.mostrar')->name('producto.mostrar');
    Route::get('/producto/{producto}/editar', 'editar')->middleware('can:admin.producto.editar')->name('producto.editar');

    Route::post('/producto', 'almacenar')->middleware('can:admin.producto.crear')->name('producto.almacenar');
    Route::put('/producto/{producto}', 'actualizar')->middleware('can:admin.producto.editar')->name('producto.actualizar');
    Route::delete('/producto/{producto}', 'eliminar')->middleware('can:admin.producto.eliminar')->name('producto.eliminar');
});

//GRUPO DISEÑADO PARA EL CRUD DE CLIENTE
Route::controller(ClienteController::class)->group(function(){
    Route::get('/cliente', 'index')->middleware('can:admin.cliente.index')->name('cliente.index');
    Route::get('/cliente/crear', 'crear')->middleware('can:admin.cliente.crear')->name('cliente.crear');
    Route::get('/cliente/{cliente}/mostrar', 'mostrar')->middleware('can:admin.cliente.mostrar')->name('cliente.mostrar');
    Route::get('/cliente/{cliente}/editar', 'editar')->middleware('can:admin.cliente.editar')->name('cliente.editar');

    Route::post('/cliente', 'almacenar')->middleware('can:admin.cliente.crear')->name('cliente.almacenar');
    Route::put('/cliente/{cliente}', 'actualizar')->middleware('can:admin.cliente.editar')->name('cliente.actualizar');
    Route::delete('/cliente/{cliente}', 'eliminar')->middleware('can:admin.cliente.eliminar')->name('cliente.eliminar');
});

//GRUPO DISEÑADO PARA EL CRUD DE SERVICIO
Route::controller(ServicioController::class)->group(function(){
    Route::get('/servicio', 'index')->middleware('can:admin.servicio.index')->name('servicio.index');
    Route::get('/servicio/crear', 'crear')->middleware('can:admin.servicio.crear')->name('servicio.crear');
    Route::get('/servicio/{servicio}/mostrar', 'mostrar')->middleware('can:admin.servicio.mostrar')->name('servicio.mostrar');
    Route::get('/servicio/{servicio}/editar', 'editar')->middleware('can:admin.servicio.editar')->name('servicio.editar');

    Route::post('/servicio', 'almacenar')->middleware('can:admin.servicio.crear')->name('servicio.almacenar');
    Route::put('/servicio/{servicio}', 'actualizar')->middleware('can:admin.servicio.editar')->name('servicio.actualizar');
    Route::delete('/servicio/{servicio}', 'eliminar')->middleware('can:admin.servicio.eliminar')->name('servicio.eliminar');
});