<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    //Funciones para las vistas
    public function index(){

        return view("administrador.productos.index");
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
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }

        Producto::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'detalle' =>$request->detalle,           
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen' => $destination. $filename
        ]);
        return redirect()->route('producto.index');
    }

    public function actualizar(Producto $producto, Request $request){

        $producto->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'detalle' =>$request->detalle,           
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        return redirect()->route('producto.index');
    }

    public function eliminar(Producto $producto){
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
