<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Finca Santa Ana/finca.jpg',
            'principal'=>1,
            'sector_id'=>1, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/navarrete2.JPG',
            'principal'=>1,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul.jpg',
            'principal'=>1,
            'sector_id'=>4, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/mesa-central.jpg',
            'principal'=>1,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/El Mercao/mercaocentral.jpg',
            'principal'=>1,
            'sector_id'=>5, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Bonet/bonet6.jpg',
            'principal'=>1,
            'sector_id'=>6, 
        ]);
        // imagen salones
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala San Pedro/35-san-pedro.jpg',
            'principal'=>1,
            'sector_id'=>7, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón Virgen del Pilar/39-virgen-del-pilar.jpg',
            'principal'=>1,
            'sector_id'=>8, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala Garden/garden2.jpg',
            'principal'=>1,
            'sector_id'=>10, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/San-Fernando.jpg',
            'principal'=>1,
            'sector_id'=>9, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin2.jpg',
            'principal'=>1,
            'sector_id'=>11, 
        ]);
    }
}
