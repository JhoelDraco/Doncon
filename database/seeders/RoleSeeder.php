<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolAdmin = Role::create(['name' => 'Administrador']);
        $rolVendedor = Role::create(['name' => 'Vendedor']);
        $rolObservador = Role::create(['name' => 'Observador']);


        /*
        * Mackas añade para que permisos para los usuarios
        */

        //permisos para usuarios
        Permission::create(['name' => 'admin.usuario.index', 
                            'description' => 'Ver listado de usuarios'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.usuario.crear', 
                            'description' => 'Crear nuevos usuarios'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.usuario.editar', 
                            'description' => 'Editar informacion de los usuarios'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.usuario.mostrar', 
                            'description' => 'Ver características de los usuarios'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.usuario.eliminar', 
                            'description' => 'Eliminar usuarios'])->assignRole($rolAdmin);

        //permisos para los roles
        Permission::create(['name' => 'admin.rol.index', 
                            'description' => 'Ver listado de roles'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.rol.crear', 
                            'description' => 'Crear nuevos roles'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.rol.editar', 
                            'description' => 'Editar informacion de los roles'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.rol.mostrar', 
                            'description' => 'Ver caracteristicas de los roles'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.rol.eliminar', 
                            'description' => 'Eliminar roles'])->assignRole($rolAdmin);

        //permisos para productos
        Permission::create(['name' => 'admin.producto.index', 
                            'description' => 'Ver listado de productos'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.producto.crear', 
                            'description' => 'Crear nuevos productos'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.producto.editar', 
                            'description' => 'Editar informacion de los productos'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.producto.mostrar', 
                            'description' => 'Ver caracteristicas de los productos'])->syncRoles([$rolAdmin, $rolVendedor , $rolObservador]);
        Permission::create(['name' => 'admin.producto.eliminar', 
                            'description' => 'Eliminar productos'])->syncRoles([$rolAdmin, $rolVendedor]);

        //permisos para servicios
        Permission::create(['name' => 'admin.servicio.index', 
                            'description' => 'Ver listado de servicios'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.servicio.crear', 
                            'description' => 'Crear nuevos servicios'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.servicio.editar', 
                            'description' => 'Editar informacion de los servicios'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.servicio.mostrar', 
                            'description' => 'Ver caracteristicas de los servicios'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.servicio.eliminar', 
                            'description' => 'Eliminar servicios'])->syncRoles([$rolAdmin, $rolVendedor]);

        //permisos para clientes
        Permission::create(['name' => 'admin.cliente.index', 
                            'description' => 'Ver listado de clientes'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.cliente.crear', 
                            'description' => 'Crear nuevos clientes'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.cliente.editar', 
                            'description' => 'Editar informacion de los clientes'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.cliente.mostrar', 
                            'description' => 'Ver caracteristicas de los clientes'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.cliente.eliminar', 
                            'description' => 'Eliminar clientes'])->syncRoles([$rolAdmin, $rolVendedor]);
    }
}
