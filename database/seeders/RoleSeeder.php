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
        Permission::create(['name' => 'admin.usuario.index'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.usuario.crear'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.usuario.editar'])->assignRole($rolAdmin, $rolVendedor);
        Permission::create(['name' => 'admin.usuario.mostrar'])->syncRoles([$rolAdmin, $rolVendedor , $rolObservador]);
        Permission::create(['name' => 'admin.usuario.eliminar'])->assignRole($rolAdmin, $rolVendedor);

        //permisos para productos
        Permission::create(['name' => 'admin.producto.index'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.producto.crear'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.producto.editar'])->assignRole($rolAdmin, $rolVendedor);
        Permission::create(['name' => 'admin.producto.mostrar'])->syncRoles([$rolAdmin, $rolVendedor , $rolObservador]);
        Permission::create(['name' => 'admin.producto.eliminar'])->assignRole($rolAdmin, $rolVendedor);

        //permisos para servicios
        Permission::create(['name' => 'admin.servicios.index'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.servicios.crear'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.servicios.editar'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.servicios.mostrar'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.servicios.eliminar'])->syncRoles([$rolAdmin, $rolVendedor]);

        //permisos para clientes
        Permission::create(['name' => 'admin.cliente.index'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.cliente.crear'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.cliente.editar'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.cliente.mostrar'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.cliente.eliminar'])->syncRoles([$rolAdmin, $rolVendedor]);
    }
}
