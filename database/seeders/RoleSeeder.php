<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Editor']);

        $role1 = 'Admin';
        $role2 = 'Editor';
        Permission::create(['name' => 'admin',
            'description' => 'Ver la página principal']) -> syncRoles([$role1, $role2]);
        //Permission::create(['name' => '/',
        //    'description' => 'Ver la página principal']) -> syncRoles([$role1, $role2]);

        Permission::create(['name' => 'roles.index',
            'description' => 'Ver Listado de roles']) -> syncRoles([$role1]);
        Permission::create(['name' => 'roles.create',
            'description' => 'Crear rol']) -> syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit',
            'description' => 'Editar rol']) -> syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy',
            'description' => 'Eliminar rol']) -> syncRoles([$role1]);

        Permission::create(['name' => 'users.index',
            'description' => 'Ver Listado de usuarios']) -> syncRoles([$role1]);
        Permission::create(['name' => 'users.create',
            'description' => 'Crear usuario']) -> syncRoles([$role1]);
        Permission::create(['name' => 'users.edit',
            'description' => 'Editar usuario']) -> syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy',
            'description' => 'Eliminar usuario']) -> syncRoles([$role1]);



        Permission::create(['name' => 'contacto.index',
            'description' => 'Ver Contacto Index']) -> syncRoles([$role1]);
        Permission::create(['name' => 'contacto.create',
            'description' => 'Crear Contacto']) -> syncRoles([$role1]);
        Permission::create(['name' => 'contacto.edit',
            'description' => 'Editar Contacto']) -> syncRoles([$role1]);
        Permission::create(['name' => 'contacto.destroy',
            'description' => 'Eliminar Contacto']) -> syncRoles([$role1]);

        
            Permission::create(['name' => 'capacidad.index',
            'description' => 'Ver Capacidad Index']) -> syncRoles([$role1]);
            Permission::create(['name' => 'capacidad.create',
            'description' => 'Crear Capacidad']) -> syncRoles([$role1]);
        Permission::create(['name' => 'capacidad.edit',
            'description' => 'Editar Capacidad']) -> syncRoles([$role1]);
        Permission::create(['name' => 'capacidad.destroy',
            'description' => 'Eliminar Capacidad']) -> syncRoles([$role1]);


            
        Permission::create(['name' => 'tipo.index',
            'description' => 'Ver Listado de tipos']) -> syncRoles([$role1]);
        Permission::create(['name' => 'tipo.create',
            'description' => 'Crear tipo']) -> syncRoles([$role1]);
        Permission::create(['name' => 'tipo.edit',
            'description' => 'Editar tipo']) -> syncRoles([$role1]);
        Permission::create(['name' => 'tipo.destroy',
            'description' => 'Eliminar tipo']) -> syncRoles([$role1]);

        Permission::create(['name' => 'instancia.index',
            'description' => 'Ver Listado de tipos']) -> syncRoles([$role1]);
        Permission::create(['name' => 'instancia.create',
            'description' => 'Crear instancia']) -> syncRoles([$role1]);
        Permission::create(['name' => 'instancia.edit',
            'description' => 'Editar instancia']) -> syncRoles([$role1]);
        Permission::create(['name' => 'instancia.destroy',
            'description' => 'Eliminar instancia']) -> syncRoles([$role1]);


    }
}
