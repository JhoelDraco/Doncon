<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Persona;
use Dflydev\DotAccessData\Data;

class ClienteController extends Controller
{

    //Funciones diseñadas para la vista del administrador
    public function index(){

        $cliente_empresa = Cliente::join('empresas', 'clientes.id', '=', 'empresas.id_clientes')
        ->get();

        //$cliente_empresa = Cliente::paginate(10);

        $data=[
            'clientes' => $cliente_empresa
        ];

        return view("administrador.clientes.index", $data);
    }

    public function crear(){
        return view("administrador.clientes.crear");
    }

    public function mostrar(Cliente $cliente){

        //$cliente_empresa = $cliente::with('empresas')->get();

        $empresa = $cliente->empresa()->first();

        $data=[
            'cliente' => $cliente,
            'empresa' => $empresa
        ];

        return view('administrador.clientes.mostrar', $data);
    }

    public function editar(Cliente $cliente){
        return view('administrador.clientes.editar', compact('cliente'));
    }

    
    //Funciones que de actualización y almacenamiento
    public function almacenar(Request $request){

        $cliente = new Cliente();
        $cliente->ci = $request->input('ci');
        $cliente->correo = $request->input('correo');
        $cliente->celular = $request->input('celular');
        $cliente->save();

        $empresa = new Empresa();
        $empresa->cirs = $request->input('cirs');
        $empresa->id_clientes = $cliente->id;
        $empresa->save();

        return redirect()->route('cliente.index');
    }

    public function actualizar(Cliente $cliente, Request $request){

        $empresa = $cliente->empresa()->first();
        
        $cliente->update([
            'ci' => $request->ci,
            'correo' => $request->correo,
            'celular' => $request->celular
        ]);

        $empresa->update([
            'cirs' => $request->cirs,
        ]);

        return redirect()->route('cliente.index');
    }

    public function eliminar(Cliente $cliente){
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
