<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    //Funciones para las vistas
    public function index(){

        $servicios = Servicio::paginate(10);

        $data=[
            'servicios' => $servicios
        ];

        return view("administrador.servicios.index", $data);
    }

    public function crear(){
        return view("administrador.servicios.crear");
    }

    public function mostrar(Servicio $servicio){
        return view('administrador.servicios.mostrar', compact('servicio'));
    }

    public function editar(Servicio $servicio){
        return view('administrador.servicios.editar', compact('servicio'));
    }

    
    //Funciones para los procesos del sistemas
    
    public function almacenar(Request $request){

        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
        ], [
            'required' => 'El campo debe de ser llenado'
        ]);

        Servicio::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('servicio.index');
    }

    public function actualizar(Servicio $servicio, Request $request){
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
        ], [
            'required' => 'El campo debe de ser llenado'
        ]);

        $servicio->update([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('servicio.index');
    }

    public function eliminar(Servicio $servicio){
        $servicio->delete();

        return redirect()->route('servicio.index');
    }
}
