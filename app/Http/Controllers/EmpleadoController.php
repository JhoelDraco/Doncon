<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    //funciones de las vistas
    public function index(){

        return view("administrador.empleado.index");
    }

    public function crear(){
        return view("administrador.empleado.crear");
    }

    public function mostrar(Empleado $empleado){
        return view('administrador.empleado.mostrar', compact('empleado'));
    }

    public function editar(Empleado $empleado){
        return view('administrador.empleado.editar', compact('empleado'));
    }

       //Funciones para los procesos del sistemas
    
    
       public function almacenar(Request $request){
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destination = 'imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destination, $filename);
        }
        
        


        Empleado::create([
            'nombre1' => $request->nombre1,
            'nombre2' => $request->nombre2,
            'apellido1' =>$request->apellido1,           
            'apellido2' => $request->apellido2,
            'area' => $request->area,
            'imagen' => $destination. $filename
        ]);
        return redirect()->route('empleado.index');
    }

    public function actualizar(Empleado $empleado, Request $request){

        $empleado->update([
            'nombre1' => $request->nombre1,
            'nombre2' => $request->nombre2,
            'apellido1' =>$request->apellido1,           
            'apellido2' => $request->apellido2,
            'area' => $request->area,
        ]);

        return redirect()->route('empleado.index');
    }

    public function eliminar(Empleado $empleado){
        $empleado->delete();

        return redirect()->route('empleado.index');
    }

}

