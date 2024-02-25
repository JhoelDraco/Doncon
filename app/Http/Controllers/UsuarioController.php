<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(){

        return view('administrador.usuarios.index');
    }

    public function crear(){
        return view("administrador.usuarios.crear");
    }

    public function mostrar(User $usuario){
        return view('administrador.usuarios.mostrar', compact('usuario'));
    }

    public function editar(User $usuario){

        $roles = Role::all();

        return view('administrador.usuarios.editar', compact('usuario', 'roles'));
    }

    //Funciones que no se muestran
    public function actualizar(User $usuario, Request $request){

        $usuario->roles()->sync($request->roles);

        return redirect()->route('producto.index');
    }
}
