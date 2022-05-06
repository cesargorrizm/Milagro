<?php

namespace Database\Seeders;
use App\Models\Instancia;

use Illuminate\Database\Seeder;

class InstanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Instancia::create([
            'titulo'=>'Esto es un titulo',
            'descripcion'=>'Esto es una descripcion', 
            'tipo_id'=>1,
            'capacidad_id'=>1

        ]);
    }
}
