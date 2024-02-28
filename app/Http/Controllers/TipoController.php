<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;


class TipoController extends Controller
{
    //
     //funciones de las vistas
     public function index(){

        return view("administrador.tipo.index");
    }

    public function crear(){
        return view("administrador.tipo.crear");
    }

    public function mostrar(Tipo $tipo){
        return view('administrador.tipo.mostrar', compact('tipo'));
    }

    public function editar(Tipo $tipo){
        return view('administrador.tipo.editar', compact('tipo'));
    }

    public function almacenar(Request $request){
        

        Tipo::create([
            'tipo' => $request->tipo,
        ]);
        return redirect()->route('tipo.index');
    }

    public function actualizar(Tipo $tipo, Request $request){

        $personal->update([
            'tipo' => $request->tipo,
        ]);

        return redirect()->route('tipo.index');
    }

    public function eliminar(Tipo $tipo){
        $personal->delete();

        return redirect()->route('tipo.index');
    }
}
