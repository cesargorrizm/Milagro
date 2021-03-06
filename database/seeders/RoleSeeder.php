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
        //$role1 = Role::create(['name' => 'Admin']);
        //$role2 = Role::create(['name' => 'Editor']);

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



    }
}
