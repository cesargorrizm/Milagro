<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gabriel Fuertes',
            'email' => 'gfuertes@starglob.com',
            'password' => bcrypt('$tarG10B'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Franks González',
            'email' => 'gonzalezfranks@starglob.com',
            'password' => bcrypt('Teruel7+'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Eva Hervás',
            'email' => 'ehervasp@starglob.com',
            'password' => bcrypt('pass1234'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jefferson Yunda',
            'email' => 'jyunda@starglob.com',
            'password' => bcrypt('pass1234'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Daniel Martin',
            'email' => 'dmartinm@starglob.com',
            'password' => bcrypt('pass1234'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Cesar Gorriz',
            'email' => 'cgorrizm@starglob.com',
            'password' => bcrypt('pass1234'),
        ])->assignRole('Admin');

//        User::create([
//            'name' => '',
//            'email' => '',
//            'password' => bcrypt(''),
//        ])->assignRole('Admin');


//        User::create([
//            'name' => '',
//            'email' => '',
//            'password' => bcrypt(''),
//        ])->assignRole('Admin');


        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@starglob.com',
            'password' => bcrypt('cliente_2022'),
        ])->assignRole('Editor');

    }
}
