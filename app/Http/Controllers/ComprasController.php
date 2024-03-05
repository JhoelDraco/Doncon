<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;

class ComprasController extends Controller
{
    public function index(){

        return view("administrador.compras.index");
    }

    public function crear(){
        return view("administrador.compras.crear");
    }

    public function mostrar(Compras $compra){
        return view('administrador.compras.mostrar', compact('compra'));
    }

    public function editar(Compras $compra){
        return view('administrador.compras.editar', compact('compra'));
    }

    public function almacenar(Request $request){
        

        Compras::create([
            'compras' => $request->compra,
        ]);
        return redirect()->route('compras.index');
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
