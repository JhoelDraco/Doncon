<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\FuncionesVentaController;
use App\Models\Venta;
use Illuminate\Http\Request;

class RegistroVentaController extends Controller
{
    public function index(){

        return view("administrador.registro_ventas.index");
    }

    public function mostrar(Venta $venta){

        $funcionesVenta = new FuncionesVentaController();

        $registroVenta = $funcionesVenta->registroVenta($venta->id);
        $productos = $funcionesVenta->encontrarProductoFacturacion($venta->id);

        return view("administrador.registro_ventas.mostrar", compact('registroVenta', 'productos'));
    }
}
