<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\RegistroVentaController;
use App\Http\Controllers\VendedorCajaController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ProveedorController;
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

//GRUPO PARA EL CRUD DE CAJAS
Route::controller(CajaController::class)->group(function(){
    Route::get('/caja', 'index')->middleware('can:admin.caja.index')->name('caja.index');

    Route::post('/caja', 'almacenar')->middleware('can:admin.caja.almacenar')->name('caja.almacenar');
    Route::put('/caja/{caja}/activar', 'activar')->middleware('can:admin.caja.activar')->name('caja.activar');
    Route::put('/caja/{caja}/desactivar', 'desactivar')->middleware('can:admin.caja.activar')->name('caja.desactivar');
    Route::delete('/caja/{caja}', 'eliminar')->middleware('can:admin.caja.eliminar')->name('caja.eliminar');
});

//GRUPO PARA LA ACTIVACIÓN DE CAJAS
Route::controller(VendedorCajaController::class)->group(function(){
    Route::get('/vendedor_cajas', 'index')->middleware('can:admin.vendedor_cajas.index')->name('vendedor_cajas.index');
    Route::get('/vendedor_cajas/crear', 'crear')->middleware('can:admin.vendedor_cajas.crear')->name('vendedor_cajas.crear');

    Route::post('/vendedor_cajas', 'almacenar')->middleware('can:admin.vendedor_cajas.almacenar')->name('vendedor_cajas.almacenar');
    //Route::put('/caja/activacion/{caja}/actualizar', 'activar')->name('caja.activacion.actualizar');
    //Route::delete('/caja/activacion/{caja}', 'eliminar')->name('caja.eliminar');
});

//Grupo diseñado para realizar ventas y facturación
Route::controller(VentasController::class)->group(function(){
    //Route::get('/vendedor_cajas', 'index')->name('vendedor_cajas.index');
    Route::get('/venta/{cliente}/crear', 'crear')->middleware('can:admin.venta.crear')->name('venta.crear');
    Route::get('/venta/{cliente}/factura/{venta}', 'facturar')->middleware('can:admin.venta.facturar')->name('venta.facturar');

    Route::post('/venta/{cliente}', 'almacenar')->middleware('can:admin.venta.crear')->name('venta.almacenar');
    Route::post('/venta/{venta}/facutura', 'almacenar_factura')->middleware('can:admin.venta.facturar')->name('factura.almacenar');
});

//Grupo diseñado para registros de ventas
Route::controller(RegistroVentaController::class)->group(function(){
    //Route::get('/vendedor_cajas', 'index')->name('vendedor_cajas.index');
    Route::get('/registro/ventas', 'index')->middleware('can:admin.registro_venta.index')->name('registro_venta.index');
    Route::get('/registro/ventas/{venta}', 'mostrar')->middleware('can:admin.registro_venta.mostrar')->name('registro_venta.mostrar');
});


//Grupo diseñado para el crud del compras
Route::controller(ComprasController::class)->group(function(){
    
    Route::get('/compras', 'index')->name('compras.index');
    Route::get('/compras/crear', 'crear')->middleware('can:admin.compras.crear')->name('compras.crear');
    Route::get('/compras/{compras}/mostrar', 'mostrar')->name('compras.mostrar');
    Route::get('/compras/{compras}/editar', 'editar')->name('compras.editar');

    Route::post('/compras', 'almacenar')->middleware('can:admin.compras.crear')->name('compras.almacenar');
    Route::put('/compras/{compras}', 'actualizar')->name('compras.actualizar');
    Route::delete('/compras/{compras}', 'eliminar')->name('compras.eliminar');
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

//GRUPO PARA EL CRUD DE PRODUCTOS TIPO
Route::controller(TipoController::class)->group(function(){
    Route::get('/tipo', 'index')->middleware('can:admin.tipo.index')->name('tipo.index');
    Route::get('/tipo/crear', 'crear')->middleware('can:admin.tipo.crear')->name('tipo.crear');
    Route::get('/tipo/{tipo}/mostrar', 'mostrar')->middleware('can:admin.tipo.mostrar')->name('tipo.mostrar');
    Route::get('/tipo/{tipo}/editar', 'editar')->middleware('can:admin.tipo.editar')->name('tipo.editar');

    Route::post('/tipo', 'almacenar')->middleware('can:admin.tipo.crear')->name('tipo.almacenar');
    Route::put('/tipo/{tipo}', 'actualizar')->middleware('can:admin.tipo.editar')->name('tipo.actualizar');
    Route::delete('/tipo/{tipo}', 'eliminar')->middleware('can:admin.tipo.eliminar')->name('tipo.eliminar');
});

//GRUPO PARA EL CRUD DE PRODUCTOS MARCA
Route::controller(MarcaController::class)->group(function(){
    Route::get('/marca', 'index')->middleware('can:admin.marca.index')->name('marca.index');
    Route::get('/marca/crear', 'crear')->middleware('can:admin.marca.crear')->name('marca.crear');
    Route::get('/marca/{marca}/mostrar', 'mostrar')->middleware('can:admin.marca.mostrar')->name('marca.mostrar');
    Route::get('/marca/{marca}/editar', 'editar')->middleware('can:admin.marca.editar')->name('marca.editar');

    Route::post('/marca', 'almacenar')->middleware('can:admin.marca.crear')->name('marca.almacenar');
    Route::put('/marca/{marca}', 'actualizar')->middleware('can:admin.marca.editar')->name('marca.actualizar');
    Route::delete('/marca/{marca}', 'eliminar')->middleware('can:admin.marca.eliminar')->name('marca.eliminar');
});

//GRUPO PARA EL CRUD DE EMPLEADO
Route::controller(EmpleadoController::class)->group(function(){
    Route::get('/empleado', 'index')->middleware('can:admin.empleado.index')->name('empleado.index');
    Route::get('/empleado/crear', 'crear')->middleware('can:admin.empleado.crear')->name('empleado.crear');
    Route::get('/empleado/{empleado}/mostrar', 'mostrar')->middleware('can:admin.empleado.mostrar')->name('empleado.mostrar');
    Route::get('/empleado/{empleado}/editar', 'editar')->middleware('can:admin.empleado.editar')->name('empleado.editar');

    Route::post('/empleado', 'almacenar')->middleware('can:admin.empleado.crear')->name('empleado.almacenar');
    Route::put('/empleado/{empleado}', 'actualizar')->middleware('can:admin.empleado.editar')->name('empleado.actualizar');
    Route::delete('/empleado/{empleado}', 'eliminar')->middleware('can:admin.empleado.eliminar')->name('empleado.eliminar');
});

//CRUD PARA LAS MONDEDAS
Route::controller(MonedaController::class)->group(function(){
    Route::get('/moneda', 'index')->middleware('can:admin.moneda.index')->name('moneda.index');
    Route::get('/moneda/crear', 'crear')->middleware('can:admin.moneda.crear')->name('moneda.crear');
    Route::get('/moneda/{moneda}/mostrar', 'mostrar')->middleware('can:admin.moneda.mostrar')->name('moneda.mostrar');
    Route::get('/moneda/{moneda}/editar', 'editar')->middleware('can:admin.moneda.editar')->name('moneda.editar');

    Route::post('/moneda', 'almacenar')->middleware('can:admin.moneda.crear')->name('moneda.almacenar');
    Route::put('/moneda/{moneda}', 'actualizar')->middleware('can:admin.moneda.editar')->name('moneda.actualizar');
    Route::delete('/moneda/{moneda}', 'eliminar')->middleware('can:admin.moneda.eliminar')->name('moneda.eliminar');
});

//CRUD PARA LOS PROVEEDORES
Route::controller(ProveedorController::class)->group(function(){
    Route::get('/proveedor', 'index')->middleware('can:admin.proveedor.index')->name('proveedor.index');
    Route::get('/proveedor/crear', 'crear')->middleware('can:admin.proveedor.crear')->name('proveedor.crear');
    Route::get('/proveedor/{proveedor}/mostrar', 'mostrar')->middleware('can:admin.proveedor.mostrar')->name('proveedor.mostrar');
    Route::get('/proveedor/{proveedor}/editar', 'editar')->middleware('can:admin.proveedor.editar')->name('proveedor.editar');

    Route::post('/proveedor', 'almacenar')->middleware('can:admin.proveedor.crear')->name('proveedor.almacenar');
    Route::put('/proveedor/{proveedor}', 'actualizar')->middleware('can:admin.proveedor.editar')->name('proveedor.actualizar');
    Route::delete('/proveedor/{proveedor}', 'eliminar')->middleware('can:admin.proveedor.eliminar')->name('proveedor.eliminar');
});