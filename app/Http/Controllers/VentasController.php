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

    public function facturar(Cliente $cliente, Venta $venta){

        $encontrarCliente = new FuncionesClienteController();
        $cliente = $encontrarCliente->informacionCliente($cliente->id);

        $funciones_venta = new FuncionesVentaController();
        $productos = $funciones_venta->encontrarProductoFacturacion($venta->id);
        
        return view("administrador.ventas.facturacion" , compact('venta', 'cliente', 'productos'));
    }

    public function almacenar(Cliente $cliente, Request $request){

        //Campos obligatorios
        $request->validate([
            'total' => 'required|numeric',
            'recibido' => 'required|numeric',
            'cambio' => 'required|numeric',

            'codigoProducto' => 'required|array',
            'cantidadProducto' => 'required|array',
            'subtotal' => 'required|array',

            'codigoProducto.*' => 'required|numeric',
            'cantidadProducto.*' => 'required|numeric',
            'subtotal.*' => 'required|numeric',
        ]);


        $funciones_venta = new FuncionesVentaController();
        $caja_dia = $funciones_venta->cajaDiaUsuario();
        
        $ahora = new DateTime();
        $fecha_actual = $ahora->format('Y-m-d H:i:s');

        $venta = new Venta();

        $venta->fecha_hora = $fecha_actual;
        $venta->total = $request->total;
        $venta->descripcion = $request->descripcion;
        $venta->id_clientes = $cliente->id;
        $venta->id_cajadia = $caja_dia->id;

        $venta->save();

        $codigoProductos = array_values($request->codigoProducto);
        $cantidadProductos = array_values($request->cantidadProducto);
        $subtotales = array_values($request->subtotal);

        //Funcion para almacenar subtotales y cantidades
        $funciones_venta->almacenarVentas($venta, $codigoProductos,
                        $cantidadProductos, $subtotales);

        return redirect()->route('venta.facturar', ['cliente' => $cliente->id, 'venta' => $venta->id])
        ->with('cliente', $cliente)
        ->with('venta', $venta);
    }

    public function almacenar_factura(Venta $venta, Request $request){

        $request->validate([
            'numero_factura' => 'required',
            'codigo_autorizacion' => 'required',
            'nit' => 'required'
        ]);

        $factura = new Factura();

        $factura->nro_factura = $request->numero_factura;
        $factura->codigo_autorizacion = $request->codigo_autorizacion;
        $factura->nit = $request->nit;
        $factura->id_ventas = $venta->id;

        $factura->save();

        return redirect()->route('cliente.index');
    }
}
