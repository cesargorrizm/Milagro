<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Seeder;


class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacto::create([
            'email' => 'prueba@gmail.com',
            'tripadvisor'=>'https://www.tripadvisor.es/Restaurant_Review-g580279-d2168558-Reviews-Restaurante_El_Milagro-Teruel_Province_of_Teruel_Aragon.html',
            'facebook'=>'https://www.facebook.com/RestauranteElMilagro/',
            'miNube'=>'https://www.minube.com/rincon/restaurante-el-milagro-a9250',
            'telefono'=>123456789,

           
        ]);

    }
}
