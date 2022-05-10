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
            'url'=>'http://127.0.0.1:8000/images/post/person_1.jpg',
            'principal'=>1,
            'sector_id'=>1, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/post/person_2.jpg',
            'principal'=>0,
            'sector_id'=>1, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/post/bg_3.jpg',
            'principal'=>1,
            'sector_id'=>1, 
        ]);
    }
}
