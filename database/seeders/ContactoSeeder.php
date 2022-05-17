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
            'email' => 'pruebajesusatado@gmail.com',
            'telefono'=>978603095,
            'tripadvisor'=>'https://www.tripadvisor.es/Restaurant_Review-g580279-d2168558-Reviews-Restaurante_El_Milagro-Teruel_Province_of_Teruel_Aragon.html',
            'facebook'=>'https://www.facebook.com/RestauranteElMilagro/',
            'miNube'=>'https://www.minube.com/rincon/restaurante-el-milagro-a9250',
            'direccion'=>'Carretera Sagunto Burgos km 123 Teruel',
            'horarioEntreSemana'=>'08:00 - 17:00',
            'horarioFinSemana'=>'08:00 - CIERRE',
  
        ]);

    }
}
