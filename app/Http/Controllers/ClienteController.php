<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::paginate(10);

        $data=[
            'clientes' => $clientes
        ];

        return view("administrador.clientes.index", $data);
    }

    public function crear(){
        return view("administrador.clientes.crear");
    }

    public function mostrar(Cliente $cliente){
        return view('administrador.clientes.mostrar', compact('cliente'));
    }

    public function editar(Cliente $cliente){
        return view('administrador.clientes.editar', compact('cliente'));
    }

    

    public function almacenar(Request $request){
        Cliente::create([
            'cirs' => $request->cirs,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'celular' => $request->celular
        ]);
        return redirect()->route('cliente.index');
    }

    public function actualizar(Cliente $cliente, Request $request){

        $cliente->update([
            'cirs' => $request->cirs,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'celular' => $request->celular
        ]);

        return redirect()->route('cliente.index');
    }

    public function eliminar(Cliente $cliente){
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
