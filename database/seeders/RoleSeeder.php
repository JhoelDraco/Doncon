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

        //permiso para configuraciónd de cuenta
        Permission::create(['name' => 'admin.cuenta.index', 
                            'description' => 'Administración de cuenta'])->assignRole($rolAdmin);

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

        //permisos para crear y activar cajas
        Permission::create(['name' => 'admin.caja.index',
                            'description' => 'Ver listado de cajas'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.caja.almacenar',
                            'description' => 'Crear nuevas cajas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.caja.activar', 
                            'description' => 'Activar y desactivar cajas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.caja.eliminar', 
                            'description' => 'Eliminar cajas'])->assignRole($rolAdmin);

        //permisos para colocar monto_inicial en cajas o acciones de vendedor
        Permission::create(['name' => 'admin.vendedor_cajas.index',
                            'description' => 'Ver si caja esta activa'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.vendedor_cajas.crear',
                            'description' => 'Activación de monto de caja'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.vendedor_cajas.almacenar', 
                            'description' => 'Poder activar caja junto al monto'])->syncRoles([$rolAdmin, $rolVendedor]);

        //permisos para las ventas
        Permission::create(['name' => 'admin.venta.crear', 
                            'description' => 'Realizar una nueva venta'])->syncRoles([$rolAdmin, $rolVendedor]);
        Permission::create(['name' => 'admin.venta.facturar', 
                            'description' => 'Realizar facturas'])->syncRoles([$rolAdmin, $rolVendedor]);

        //permisos para registros de ventas
        Permission::create(['name' => 'admin.registro_venta.index', 
                            'description' => 'Ver listado de registros de ventas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.registro_venta.mostrar', 
                            'description' => 'Ver un especifico registro de venta'])->assignRole($rolAdmin);

        //permisos para las compras
        Permission::create(['name' => 'admin.compras.crear', 
                            'description' => 'Comprar productos'])->assignRole($rolAdmin);
        
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


        //permisos para los tipos de productos
        Permission::create(['name' => 'admin.tipo.index',
                            'description' => 'Ver registros de tipos de productos'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.tipo.crear',
                            'description' => 'Crear tipos de productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.tipo.mostrar', 
                            'description' => 'Mostrar los tipos de productos'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.tipo.editar',
                            'description' => 'Editar los tipos de productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.tipo.eliminar',
                            'description' => 'Eliminar los tipos de productos'])->syncRoles([$rolAdmin]);

        //permisos para marcas de productos
        Permission::create(['name' => 'admin.marca.index',
                            'description' => 'Ver registros de marcas de productos'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.marca.crear',
                            'description' => 'Crear marcas de productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.marca.mostrar', 
                            'description' => 'Mostrar los marcas de productos'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.marca.editar',
                            'description' => 'Editar los marcas de productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.marca.eliminar',
                            'description' => 'Eliminar los marcas de productos'])->syncRoles([$rolAdmin]);

        //permisos para los empleados
        Permission::create(['name' => 'admin.empleado.index', 
                            'description' => 'Ver listado de empleados'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.empleado.crear', 
                            'description' => 'Crear nuevos empleados'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.empleado.editar', 
                            'description' => 'Editar informacion de los empleados'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.empleado.mostrar', 
                            'description' => 'Ver caracteristicas de los empleados'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.empleado.eliminar', 
                            'description' => 'Eliminar empleados'])->assignRole($rolAdmin);

        //permisos para los monedas
        Permission::create(['name' => 'admin.moneda.index', 
                            'description' => 'Ver listado de monedas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.moneda.crear', 
                            'description' => 'Crear nuevos monedas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.moneda.editar', 
                            'description' => 'Editar informacion de los monedas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.moneda.mostrar', 
                            'description' => 'Ver caracteristicas de los monedas'])->assignRole($rolAdmin);
        Permission::create(['name' => 'admin.moneda.eliminar', 
                            'description' => 'Eliminar monedas'])->assignRole($rolAdmin);

        //permisos para proveedores
        Permission::create(['name' => 'admin.proveedor.index',
                            'description' => 'Ver registros de proveedores'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.proveedor.crear',
                            'description' => 'Crear proveedor'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.proveedor.mostrar', 
                            'description' => 'Mostrar caracteristicas de los proveedores'])->syncRoles([$rolAdmin, $rolVendedor, $rolObservador]);
        Permission::create(['name' => 'admin.proveedor.editar',
                            'description' => 'Editar información de proveedor'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'admin.proveedor.eliminar',
                            'description' => 'Eliminar proveedores'])->syncRoles([$rolAdmin]);

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
