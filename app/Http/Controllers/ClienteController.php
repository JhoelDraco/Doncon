<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Persona;

class ClienteController extends Controller
{

    //Funciones diseñadas para la vista del administrador
    public function index(){

        /*
        $cliente_empresa = Cliente::join('empresas', 'clientes.id', '=', 'empresas.id_clientes')
        ->get();
        */
        
        $clientes = Cliente::select('clientes.*', 'empresas.*', 'personas.*', 'clientes.id as cliente_id')
        ->leftJoin('empresas', 'clientes.id', '=', 'empresas.id_clientes')
        ->leftJoin('personas', 'clientes.id', '=', 'personas.id_clientes')
        ->whereNotNull('empresas.id')->orWhereNotNull('personas.id')
        ->get();

        //$cliente_empresa = Cliente::paginate(10);

        $data=[
            'clientes' => $clientes
        ];

        return view("administrador.clientes.index", $data);
    }

    public function crear(){
        return view("administrador.clientes.crear");
    }

    public function mostrar(Cliente $cliente){

        //$cliente_empresa = $cliente::with('empresas')->get();

        $empresa = $cliente->empresa()->first();
        $persona = $cliente->persona()->first();

        $data=[
            'cliente' => $cliente,
            'empresa' => $empresa,
            'persona' => $persona
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
        $cliente->tipo = $request->input('tipo_cliente');
        $cliente->ubicacion = $request->input('ubicacion');
        $cliente->contacto = $request->input('contacto');
        $cliente->save();

        if($request->tipo_cliente == 'E'){
            $empresa = new Empresa();
            $empresa->cirs = $request->input('cirs');
            $empresa->id_clientes = $cliente->id;
            $empresa->save();

        } else {
            $persona = new Persona();
            $persona->nombre1 = $request->input('nombre1');
            $persona->nombre2 = $request->input('nombre2');
            $persona->apellido1 = $request->input('apellido1');
            $persona->apellido2 = $request->input('apellido2');
            $persona->id_clientes = $cliente->id;
            $persona->save();
        }

        return redirect()->route('cliente.index');
    }

    public function actualizar(Cliente $cliente, Request $request){

        $empresa = $cliente->empresa()->first();
        $persona = $cliente->persona()->first();
        
        $cliente->update([
            'ci' => $request->ci,
            'correo' => $request->correo,
            'celular' => $request->celular,
            'ubicacion' => $request->ubicacion,
            'contacto' => $request->contacto
        ]);

        if($cliente->tipo == "E"){
            $empresa->update([
                'cirs' => $request->cirs
            ]);
        }else{
            $persona->update([
                'nombre1' => $request->nombre1,
                'nombre2' => $request->nombre2,
                'apellido1' => $request->apellido1,
                'apellido2' => $request->apellido2
            ]);
        }        

        return redirect()->route('cliente.index');
    }

    public function eliminar(Cliente $cliente){
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}