<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){

        $roles = Role::all();

        return view('administrador.roles.index' , compact('roles'));
    }

    public function crear(){

        $permisos = Permission::all();
        return view("administrador.roles.crear", compact('permisos'));
    }

    public function mostrar(Role $rol){
        return view('administrador.roles.mostrar', compact('rol'));
    }

    public function editar(Role $rol){

        $permisos = Permission::all();

        return view('administrador.roles.editar', compact('rol', 'permisos'));
    }

    //Funciones que no se muestran

    public function almacenar(Role $rol, Request $request){

        $request->validate([
            'name' => 'required'
        ]);
        $rol = Role::create($request->all());

        $rol->permissions()->sync($request->permisos);

        return redirect()->route('rol.index');
    }

    public function actualizar(Role $rol, Request $request){

        $request->validate([
            'name' => 'required'
        ]);

        $rol->update([
            'name' => $request->name,
        ]);
        $rol->permissions()->sync($request->permisos);

        return redirect()->route('rol.index');
    }

    public function eliminar(Role $rol){
        $rol->delete();

        return redirect()->route('rol.index');
    }

    
}
