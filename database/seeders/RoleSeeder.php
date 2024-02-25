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
        $rolUsuario = Role::create(['name' => 'Usuario']);


        //permisos para productos
        Permission::create(['name' => 'admin.producto.index'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.producto.crear'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.producto.editar'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.producto.mostrar'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.producto.eliminar'])->assignRole($rolAdmin);

        //permisos para servicios
        Permission::create(['name' => 'admin.servicios.index'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.servicios.crear'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.servicios.editar'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.servicios.mostrar'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.servicios.eliminar'])->assignRole($rolAdmin);

        //permisos para clientes
        Permission::create(['name' => 'admin.cliente.index'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.cliente.crear'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.cliente.editar'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.cliente.mostrar'])->syncRoles([$rolAdmin, $rolUsuario]);
        Permission::create(['name' => 'admin.cliente.eliminar'])->assignRole($rolAdmin);
    }
}
