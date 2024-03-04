<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\FuncionesClienteController;
use App\Http\Controllers\Admin\FuncionesVentaController;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Factura;
use App\Models\Moneda;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\Venta;

class VentasController extends Controller
{
    public function crear(Cliente $cliente){
        
        $encontrarCliente = new FuncionesClienteController();
        $cliente = $encontrarCliente->informacionCliente($cliente->id);
    
        $monedas = Moneda::all();
        return view("administrador.ventas.crear", compact('cliente', 'monedas'));
    }

    public function facturar(){
        
        return view("administrador.ventas.facturacion");
    }

    public function almacenar(Cliente $cliente, Request $request){

        $encontrarCliente = new FuncionesClienteController();
        $cliente = $encontrarCliente->informacionCliente($cliente->id);

        $funciones_venta = new FuncionesVentaController();
        $caja_dia = $funciones_venta->cajaDiaUsuario();
        
        $ahora = new DateTime();
        $fecha_actual = $ahora->format('Y-m-d H:i:s');

        $venta = new Venta();

        $venta->fecha_hora = $fecha_actual;
        $venta->total = $request->total;
        $venta->descripcion = $request->descripcion;
        $venta->id_clientes = $cliente->cliente_id;
        $venta->id_cajadia = $caja_dia->id;

        $venta->save();

        $codigoProductos = array_values($request->codigoProducto);
        $cantidadProductos = array_values($request->cantidadProducto);
        $subtotales = array_values($request->subtotal);

        //Funcion para almacenar subtotales y cantidades
        $funciones_venta->almacenarVentas($venta, $codigoProductos,
                        $cantidadProductos, $subtotales);

        $productos = $funciones_venta->encontrarProductoFacturacion($venta->id);

        return view('administrador.ventas.facturacion', compact('productos', 'venta', 'cliente'));
    }

    public function almacenar_factura(Venta $venta, Request $request){

        $factura = new Factura();

        $factura->nro_factura = $request->numero_factura;
        $factura->codigo_autorizacion = $request->codigo_autorizacion;
        $factura->nit = $request->nit;
        $factura->id_ventas = $venta->id;

        $factura->save();

        return redirect()->route('cliente.index');
    }
}
