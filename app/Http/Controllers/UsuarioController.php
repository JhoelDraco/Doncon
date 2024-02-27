<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function index(){

        return view('administrador.usuarios.index');
    }

    public function crear(){
        $roles = Role::all();
        return view("administrador.usuarios.crear", compact('roles'));
    }

    public function mostrar(User $usuario){
        return view('administrador.usuarios.mostrar', compact('usuario'));
    }

    public function editar(User $usuario){

        $roles = Role::all();

        return view('administrador.usuarios.editar', compact('usuario', 'roles'));
    }

    //Funciones que no se muestran

    public function almacenar(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        $user->save();
    
        return redirect()->route('usuario.index');
    }

    public function actualizar(User $usuario, Request $request){

        $usuario->roles()->sync($request->roles);

        return redirect()->route('usuario.index');
    }
}
