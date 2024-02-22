<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    //Funciones para las vistas
    public function index(){

        $productos = Producto::paginate(10);

        $data=[
            'productos' => $productos
        ];

        return view("administrador.productos.index", $data);
    }

    public function crear(){
        return view("administrador.productos.crear");
    }

    public function mostrar(Producto $producto){
        return view('administrador.productos.mostrar', compact('producto'));
    }

    public function editar(Producto $producto){
        return view('administrador.productos.editar', compact('producto'));
    }

    
    //Funciones para los procesos del sistemas
    
    public function almacenar(Request $request){
        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('producto.index');
    }

    public function actualizar(Producto $producto, Request $request){

        $producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('producto.index');
    }

    public function eliminar(Producto $producto){
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
