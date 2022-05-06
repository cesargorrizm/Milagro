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
    
        Sector::create([
            'titulo'=>'Esto es un titulo',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>1,
            'capacidad_id'=>1

        ]);
    }
}
