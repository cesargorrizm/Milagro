<?php

namespace Database\Seeders;

use App\Models\Capacidad;

use Illuminate\Database\Seeder;


class CapacidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capacidad::create([
            'banqueteSinBaile' => 200,
            'banqueteConBaile'=>300,
            'cocktail'=>400,
            'actos'=>345,
            'buffet'=>350,
        ]);
        Capacidad::create([
            'banqueteSinBaile' => 500,
            'banqueteConBaile'=>600,
            'cocktail'=>500,
            'actos'=>50,
            'buffet'=>350,
        ]);
        Capacidad::create([
            'banqueteSinBaile' => 600,
            'banqueteConBaile'=>700,
            'cocktail'=>600,
            'actos'=>745,
            'buffet'=>800,
        ]);

    }
}
