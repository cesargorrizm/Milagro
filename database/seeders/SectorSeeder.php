<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Espacios
        Sector::create([
            'titulo'=>'Finca Santa Ana',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
        Sector::create([
            'titulo'=>'Navarrete del río',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
        Sector::create([
            'titulo'=>'Escaleruela',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
        Sector::create([
            'titulo'=>'Lago Azul',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
        Sector::create([
            'titulo'=>'El Mercao',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
        Sector::create([
            'titulo'=>'Bonet',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>2,
            'capacidad_id'=>1

        ]);
    }
}
