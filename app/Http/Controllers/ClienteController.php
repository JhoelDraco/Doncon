<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\FuncionesVentaController;
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

        $funciones_venta = new FuncionesVentaController();
        $caja_dia = $funciones_venta->cajaDiaUsuario();
        $caja = $funciones_venta->encontrarCajaUsuario($caja_dia);

        //$cliente_empresa = Cliente::paginate(10);

        $data=[
            'clientes' => $clientes,
            'caja' => $caja
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

        if($cliente->tipo === 'P'){
            $c_cliente = $cliente->persona()->first();
        }else{
            $c_cliente = $cliente->empresa()->first();
        }
        
        return view('administrador.clientes.editar', compact('cliente', 'c_cliente'));
    }

    
    //Funciones que de actualización y almacenamiento
    public function almacenar(Request $request){
        
        if($request->tipo_cliente == 'E'){
            $request->validate([
                'ci' => 'required',
                'correo' => 'required|email',
                'celular' => 'required|numeric',
                'cirs' => 'required',
            ],[
                'required' => 'El campo debe ser llenado',
                'numeric' => 'El campo debe de ser de tipo',
                'email' => 'El campo debe de ser un correo'
            ]);

            $cliente = new Cliente();
            $cliente->ci = $request->input('ci');
            $cliente->correo = $request->input('correo');
            $cliente->celular = $request->input('celular');
            $cliente->tipo = $request->input('tipo_cliente');
            $cliente->ubicacion = $request->input('ubicacion');
            $cliente->contacto = $request->input('contacto');
            $cliente->save();

            $empresa = new Empresa();
            $empresa->cirs = $request->input('cirs');
            $empresa->id_clientes = $cliente->id;
            $empresa->save();

        } else {
            $request->validate([
                'ci' => 'required',
                'correo' => 'required|email',
                'celular' => 'required|numeric',
                'nombre1' => 'required',
                'nombre2' => 'required',
                'apellido1' => 'required',
                'apellido2' => 'required',
            ],[
                'required' => 'El campo debe ser llenado',
                'numeric' => 'El campo debe de ser de tipo numerico',
                'email' => 'El campo debe de ser un correo'
            ]);

            $cliente = new Cliente();
            $cliente->ci = $request->input('ci');
            $cliente->correo = $request->input('correo');
            $cliente->celular = $request->input('celular');
            $cliente->tipo = $request->input('tipo_cliente');
            $cliente->ubicacion = $request->input('ubicacion');
            $cliente->contacto = $request->input('contacto');
            $cliente->save();

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

        if($cliente->tipo == "E"){
            $request->validate([
                'ci' => 'required',
                'correo' => 'required|email',
                'celular' => 'required|numeric',
                'tipo' => 'required',
                'cirs' => 'required',
            ],[
                'required' => 'El campo debe ser llenado',
                'numeric' => 'El campo debe de ser de tipo numerico',
                'email' => 'El campo debe de ser un correo'
            ]);

            $cliente->update([
                'ci' => $request->ci,
                'correo' => $request->correo,
                'celular' => $request->celular,
                'ubicacion' => $request->ubicacion,
                'contacto' => $request->contacto
            ]);

            $empresa->update([
                'cirs' => $request->cirs
            ]);
        }else{
            $request->validate([
                'ci' => 'required',
                'correo' => 'required|email',
                'celular' => 'required|numeric',
                'tipo' => 'required',
                'nombre1' => 'required',
                'nombre2' => 'required',
                'apellido1' => 'required',
                'apellido2' => 'required',
            ],[
                'required' => 'El campo debe ser llenado',
                'numeric' => 'El campo debe de ser de tipo numerico',
                'email' => 'El campo debe de ser un correo'
            ]);

            $cliente->update([
                'ci' => $request->ci,
                'correo' => $request->correo,
                'celular' => $request->celular,
                'ubicacion' => $request->ubicacion,
                'contacto' => $request->contacto
            ]);

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
