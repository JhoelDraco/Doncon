<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moneda;

class MonedaController extends Controller
{
    //
    
    //Funciones para las vistas
    public function index(){

        return view("administrador.moneda.index");
    }

    public function crear()
    {
        return view("administrador.moneda.crear",);
    }

    public function mostrar(Moneda $moneda){
        return view('administrador.moneda.mostrar', compact('moneda'));
    }

    public function editar(Moneda $moneda){
        return view('administrador.moneda.editar', compact('moneda'));
    }

    
    //Funciones para los procesos del sistemas
    
    
    public function almacenar(Request $request){
        

        Moneda::create([
            'nombre_moneda' => $request->nombre_moneda,
            'moneda_entrante' => $request->moneda_entrante,
            'tipo_cambio' =>$request->tipo_cambio      
        ]);
        return redirect()->route('moneda.index');
    }

    public function actualizar(Moneda $moneda, Request $request){

        $moneda->update([
            'nombre_moneda' => $request->nombre_moneda,
            'moneda_entrante' => $request->moneda_entrante,
            'tipo_cambio' =>$request->tipo_cambio
        ]);

        return redirect()->route('moneda.index');
    }

    public function eliminar(Moneda $moneda){
        $moneda->delete();

        return redirect()->route('moneda.index');
    }
}
