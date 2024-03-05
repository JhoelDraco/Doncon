<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Proveedor;
use App\Models\Producto;

class ComprasController extends Controller
{
    public function index(){

        return view("administrador.compras.index");
    }

    public function crear(){
        $proveedor = Proveedor::all();
        $producto = Producto::all();
        return view("administrador.compras.crear", compact('proveedor','producto'));
    }

    public function mostrar(Compras $compras){
        return view('administrador.compras.mostrar', compact('compras'));
    }

    public function editar(Compras $compras){
        return view('administrador.compras.editar', compact('compras'));
    }

    public function almacenar(Request $request){
        

        $ahora = new DateTime();
        $fecha_actual = $ahora->format('Y-m-d H:i:s');
        Compras::create([
            'cantidad' => $request->cantidad,
            'detalle' =>$request->detalle,           
            'precio_unitario' => $request->precio_unitario,
            'subtotal' => $request->subtotal,
            'id_proveedores' => $request->id_proveedor,
            'id_productos' => $request->id_proveedor,
            //$compra->id_proveedor = $proveedor->proveedor_id,
            //$compra->id_cajadia = $proveedor->proveedor_id,
        ]);


        $proveedorId = Proveedor::findOrFail($request->id_proveedor);
        $productoId = Producto::findOrFail($request->id_producto);

        $compra = Producto::latest()->first();

        //$compra->proveedor()->attach($proveedorId);
        //$compra->producto()->attach($productoId);
        return redirect()->route('compras.mostrar');
    }

    public function actualizar(Compras $compra, Request $request){

        $compra->update([
            'compras' => $request->compra,
        ]);

        return redirect()->route('compras.index');
    }

    public function eliminar(Compras $compra){
        $compra->delete();

        return redirect()->route('compras.index');
    }
}
