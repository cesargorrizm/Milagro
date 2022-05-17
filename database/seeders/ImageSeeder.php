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
        //finca santa ana
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Finca Santa Ana/finca.jpg',
            'principal'=>1,
            'sector_id'=>1, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Finca Santa Ana/BODA EL POBO 025.jpg',
            'principal'=>0,
            'sector_id'=>1, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Finca Santa Ana/BODA EL POBO 034.jpg',
            'principal'=>0,
            'sector_id'=>1, 
        ]);
        
        //navarrete del rio
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/navarrete2.JPG',
            'principal'=>1,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/20160702_194325.jpg',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/20160702_194410.jpg',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/20160702_194413.jpg',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/20160702_194434.jpg',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/IMG_0063.JPG',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Navarrete del río/navarrete1.jpg',
            'principal'=>0,
            'sector_id'=>2, 
        ]);
        //lago Azul
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul.jpg',
            'principal'=>1,
            'sector_id'=>4, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul (1).JPG',
            'principal'=>0,
            'sector_id'=>4, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul (2).JPG',
            'principal'=>0,
            'sector_id'=>4, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul (3).JPG',
            'principal'=>0,
            'sector_id'=>4, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Lago Azul/lagoAzul (5).JPG',
            'principal'=>0,
            'sector_id'=>4, 
        ]);

        //Escaleruela
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/mesa-central.jpg',
            'principal'=>1,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/_DOS6426.JPG',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/agua.jpg',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/carrico.jpg',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/chill-out.jpg',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/mesa-cuadrada.jpg',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Escaleruela/zona-piscina.jpg',
            'principal'=>0,
            'sector_id'=>3, 
        ]);
        //Mercado Central
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/El Mercao/mercaocentral.jpg',
            'principal'=>1,
            'sector_id'=>5, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/El Mercao/bodegadelmercao.jpg',
            'principal'=>0,
            'sector_id'=>5, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/El Mercao/pantalla-bodegadelmercao.jpg',
            'principal'=>0,
            'sector_id'=>5, 
        ]);
        //Bonet
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Bonet/bonet6.jpg',
            'principal'=>1,
            'sector_id'=>6, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Bonet/bonet5.jpg',
            'principal'=>0,
            'sector_id'=>6, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Bonet/bonet7.jpg',
            'principal'=>0,
            'sector_id'=>6, 
        ]);

        // imagen salones
        //San pedro
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala San Pedro/35-san-pedro.jpg',
            'principal'=>1,
            'sector_id'=>7, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala San Pedro/29sanpedro.jpg',
            'principal'=>0,
            'sector_id'=>7, 
        ]);
        //virgen del pilar
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón Virgen del Pilar/39-virgen-del-pilar.jpg',
            'principal'=>1,
            'sector_id'=>8, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón Virgen del Pilar/43virgendelpilar.JPG',
            'principal'=>0,
            'sector_id'=>8, 
        ]);
        //Garden
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala Garden/garden2.jpg',
            'principal'=>1,
            'sector_id'=>10, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Sala Garden/garden_1.JPG',
            'principal'=>0,
            'sector_id'=>10, 
        ]);
        //san Fernando
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/San-Fernando.jpg',
            'principal'=>1,
            'sector_id'=>9, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/21sanfernando.jpg',
            'principal'=>0,
            'sector_id'=>9, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/sanfernando.jpg',
            'principal'=>0,
            'sector_id'=>9, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/sanfernando2.jpg',
            'principal'=>0,
            'sector_id'=>9, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Salón San Fernando/12sanfernando.jpg',
            'principal'=>0,
            'sector_id'=>9, 
        ]);
        //Terraza Jardin
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin2.jpg',
            'principal'=>1,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin1.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin6.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin7.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardin8.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardines1.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardines2.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardines3.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Terraza Jardin/jardines5.jpg',
            'principal'=>0,
            'sector_id'=>11, 
        ]);
        
        //Boda civil
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/1- BODA CIVIL JARDINFRENTE.JPG',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/2- BODA CIVIL CATERING  FUNDAS NEGRAS.jpg',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/3 - BODA CIVL DETALLE FLOR  RECORTADA.jpg',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/4- BODA CIVL CATERING  FUNDAS BLANCAS .jpg',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/5- BODA CIVIL JARDIN  DESDE ARRIBA.JPG',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Boda Civil/BODA CIVL DETALLE FLOR.jpg',
            'principal'=>0,
            'sector_id'=>12,
        ]);
        //Barra Premium
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/1- BARRA PREMIUM.JPG',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/2- BARRA PREMIUM.JPG',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/bodamadrid1301_1_30525.jpg',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/Gin tonic bodas net.jpg',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/Gin Tonic Coto Real 005.JPG',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Barra Premium/premium-vs-ultimate-drinks-hero.jpg',
            'principal'=>0,
            'sector_id'=>13,
        ]);
        //Candy
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Candy/2- CANDY.JPG',
            'principal'=>0,
            'sector_id'=>14,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Candy/4- CANDY .jpg',
            'principal'=>0,
            'sector_id'=>14,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Candy/7 CANDY .JPG',
            'principal'=>0,
            'sector_id'=>14,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Candy/chuches1.jpg',
            'principal'=>0,
            'sector_id'=>14,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Candy/IMG_6147.JPG',
            'principal'=>0,
            'sector_id'=>14,
        ]);
        //Fuente de chocolate
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/4ca9072047e86e0e1f05edaaf3f9320c.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/alquiler-de-fuentes-de-chocolate-para-eventos-1002.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/BARRA-CHOCOLATE-5362.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/Fotos-de-fuentes-de-chocolate.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/fuentedechocolate.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/IMG-20160605-WA0000.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Fuente de chocolate/IMG-20160605-WA0039.jpg',
            'principal'=>0,
            'sector_id'=>15,
        ]);
        //Decoración floral especial
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/1 - FLORES.JPG',
            'principal'=>0,
            'sector_id'=>16,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/2 CENTRO FLORES.JPG',
            'principal'=>0,
            'sector_id'=>16,
        ]);
      
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/3- CENTRO FLORAL.JPG',
            'principal'=>0,
            'sector_id'=>16,
        ]);
       
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/12- CENTRO MESA .JPG',
            'principal'=>0,
            'sector_id'=>16,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/20140705_140927.jpg',
            'principal'=>0,
            'sector_id'=>16,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/centro presidencia ovalada.JPG',
            'principal'=>0,
            'sector_id'=>16,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Decoración floral especial/Centro.jpg',
            'principal'=>0,
            'sector_id'=>16,
        ]);
        //Meseros
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/1 - MESERO.jpg',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/2 -MESEROS.JPG',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/3- MESEROS .JPG',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/4- MESERO .jpg',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/5- MESERO .JPG',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/DSC_0641.JPG',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Meseros/MESEROS .JPG',
            'principal'=>0,
            'sector_id'=>17,
        ]);
        //Seating
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/_DOS6426.JPG',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/_DSC0394.JPG',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/_DSC0735.JPG',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/20160423_121932.jpg',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/20160702_105745.jpg',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/DSC00235.JPG',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/seatting botellas.jpg',
            'principal'=>0,
            'sector_id'=>18,
        ]);
        Image::create([
            'url'=>'http://127.0.0.1:8000/images/Seating/seatting pale blanco.jpg',
            'principal'=>0,
            'sector_id'=>18,
        ]);

       
    }
}
