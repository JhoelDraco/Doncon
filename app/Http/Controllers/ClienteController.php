<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){

        $cliente = Cliente::paginate(10);

        $data=[
            'cliente' => $cliente
        ];

        return view("administrador.productos.index", $data);
    }

    public function crear(){
        return view("administrador.productos.crear");
    }

    public function mostrar(Cliente $producto){
        return view('administrador.productos.mostrar', compact('producto'));
    }

    public function editar(Cliente $producto){
        return view('administrador.productos.editar', compact('producto'));
    }

    

    public function almacenar(Request $request){
        Cliente::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('producto.index');
    }

    public function actualizar(Cliente $producto, Request $request){

        $producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('producto.index');
    }

    public function eliminar(Cliente $producto){
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
