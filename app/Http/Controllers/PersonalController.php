<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    //funciones de las vistas
    public function index(){

        return view("administrador.personal.index");
    }

    public function crear(){
        return view("administrador.personal.crear");
    }

    public function mostrar(Personal $personal){
        return view('administrador.personal.mostrar', compact('personal'));
    }

    public function editar(Personal $personal){
        return view('administrador.personal.editar', compact('personal'));
    }

       //Funciones para los procesos del sistemas
    
    
       public function almacenar(Request $request){
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }
        
        


        Personal::create([
            'nombre1' => $request->nombre1,
            'nombre2' => $request->nombre2,
            'apellido1' =>$request->apellido1,           
            'apellido2' => $request->apellido2,
            'area' => $request->area,
            'imagen' => $destination. $filename
        ]);
        return redirect()->route('personal.index');
    }

    public function actualizar(Personal $personal, Request $request){

        $personal->update([
            'nombre1' => $request->codigo,
            'nombre2' => $request->nombre,
            'detalle' =>$request->detalle,           
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen' => $destination. $filename
        ]);

        return redirect()->route('personal.index');
    }

    public function eliminar(Personal $personal){
        $personal->delete();

        return redirect()->route('personal.index');
    }

}
