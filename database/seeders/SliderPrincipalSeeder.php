<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\SliderPrincipal;
use Illuminate\Database\Seeder;


class SliderPrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SliderPrincipal::create([ 'url' => 'http://127.0.0.1:8000/images/hero/hero-1.jpg', 'orden' => 1, ]);
        SliderPrincipal::create([ 'url' => 'http://127.0.0.1:8000/images/hero/hero-2.jpg', 'orden' => 2, ]);
        SliderPrincipal::create([ 'url' => 'http://127.0.0.1:8000/images/hero/hero-3.jpg', 'orden' => 3, ]);

    }
}
