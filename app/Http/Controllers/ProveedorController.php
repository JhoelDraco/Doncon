<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index(){

        return view("administrador.proveedor.index");
    }


    public function crear()
    {

        return view("administrador.proveedor.crear");
    }
    public function mostrar(Proveedor $proveedor){
        return view('administrador.proveedor.mostrar',compact('proveedor'));
    }

    public function editar(Proveedor $proveedor)
{
    return view('administrador.proveedor.editar', compact('proveedor'));
}
    
    //Funciones para los procesos del sistemas
    
    
    public function almacenar(Request $request){
        
        
        Proveedor::create([
            'cirs' => $request->cirs,
            'celular' => $request->celular,   
        ]);

        

        return redirect()->route('proveedor.index');
    }

    public function actualizar(Proveedor $proveedor, Request $request){

        $proveedor->update([
            'cirs' => $request->cirs,
            'celular' => $request->celular,   
        ]);

        return redirect()->route('proveedor.index');
    }

    public function eliminar(Proveedor $proveedor){
        $proveedor->delete();

        return redirect()->route('proveedor.index');
    }
    
    
}
