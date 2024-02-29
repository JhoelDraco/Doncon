<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    //Funciones para las vistas
    public function index(){

        return view("administrador.marca.index");
    }

    public function crear(){
        return view("administrador.marca.crear");
    }

    public function mostrar(Marca $marca){
        return view('administrador.marca.mostrar', compact('marca'));
    }

    public function editar(Marca $marca){
        return view('administrador.marca.editar', compact('marca'));
    }

    //Funciones que no se deberian ver
    public function almacenar(Request $request){
        

        Marca::create([
            'marca' => $request->marca,
        ]);
        return redirect()->route('marca.index');
    }

    public function actualizar(Marca $marca, Request $request){

        $marca->update([
            'marca' => $request->marca,
        ]);

        return redirect()->route('marca.index');
    }

    public function eliminar(Marca $marca){
        $marca->delete();

        return redirect()->route('marca.index');
    }
}
