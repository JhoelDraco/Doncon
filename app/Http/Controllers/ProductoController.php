<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Tipo;
use App\Models\Marca;


class ProductoController extends Controller
{

    //Funciones para las vistas
    public function index(){

        return view("administrador.productos.index");
    }


    public function crear()
    {
        $tiposProductos = Tipo::all();
        $marcasProductos = Marca::all();

        return view("administrador.productos.crear", compact('tiposProductos', 'marcasProductos'));
    }
    public function mostrar(Producto $producto){
        return view('administrador.productos.mostrar', compact('producto'));
    }

    public function editar(Producto $producto){
        return view('administrador.productos.editar', compact('producto'));
    }

    
    //Funciones para los procesos del sistemas
    
    
    public function almacenar(Request $request){

        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
        ],[
            'required' => 'El campo: debe ser llenado'
        ]);
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }else{
            $destination = '';
            $filename = '';
        }
        
        Producto::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'detalle' =>$request->detalle,           
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen' => $destination. $filename
        ]);


        $tipoId = Tipo::findOrFail($request->id_tipo_producto);
        $marcaId = Marca::findOrFail($request->id_marca_producto);

        $producto = Producto::latest()->first();

        $producto->tipos()->attach($tipoId);
        $producto->marcas()->attach($marcaId);
        

        return redirect()->route('producto.index');
    }

    public function actualizar(Producto $producto, Request $request){

        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
        ],[
            'required' => 'El campo: debe ser llenado'
        ]);

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
