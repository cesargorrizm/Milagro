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
            'titulo' => 'Finca Santa Ana',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Navarrete del río',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Escaleruela',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Lago Azul',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'El Mercao',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Bonet',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);

        // Salas 

        Sector::create([
            'titulo' => 'Sala San Pedro',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Salón Virgen del Pilar',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Salón San Fernando',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Sala Garden',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Terraza Jardin',
            'descripcion' => 'Esto es una descripcion',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);

        // Eventos
        Sector::create([
            'titulo' => 'Boda Civil',
            'descripcion' => 'Es la ocasión perfecta para compartir con los familiares y amigos un día tan señalado, en un ambiente íntimo y especial. 
            
            Las bodas con un ritual civil son las más personalizables ya que sois vosotros los que decidís en todo momento cómo será vuestra ceremonia. Con nuestra experiencia os guiaremos, adaptándonos a vuestras ideas y gustos.

            Contamos con varias posibilidades de ambientación y ubicación de la misma, te ayudaremos a definir tu estilo de ceremonia.
            
            Ponemos a vuestra disposición nuestros jardines, con la posibilidad de tener todo el equipamiento necesario: sillas enfundadas, sombrillas, mesa para el oficiante, atril, megafonía……. Si queréis que además te ayudemos a decorarlo, podemos ponerte en contacto con profesionales que pondrán a tu disposición un amplio abanico de opciones. ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Barra Premium',
            'descripcion' => 'Tenéis la posibilidad de ofrecer a vuestros invitados un servicio de copas más elaboradas de la mano de un profesional cocktelero.

            Barra Gin y Tónica Premium
            Barra Mojito, Mojito Golden
            Barra Caipirinhas, Daikiri
        ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Candy',
            'descripcion' => 'Disfruta de un bonito y cuidado rincón de chucherías y dulces -presente en casi todos los eventos sociales de hoy en día- como perfecto complemento a tu evento y gánate a tus invitados a base de gominolas, cupcakes, cookies…

            Para que se lleven un dulcísimo sabor de boca. Contenido y cantidad adaptado a tus gustos y número de asistentes. 
        ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Fuente de chocolate',
            'descripcion' => 'Otra propuesta muy dulce. Las fuentes de chocolate (blanco o negro) son un plus en cualquier boda.

            Este postre va acompañado por bandejas cargadas con dulces (nubes, gofres, barquillos…) o fruta fresca de temporada (fresa, plátano, kiwi, piña, melón…). 
        ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Decoración floral especial',
            'descripcion' => 'Avanzan los tiempos, cambian las tendencias. En el Restaurante El Milagro innovamos constantemente en decoración floral y te ofrecemos la posibilidad de que seáis vosotros quien decida como decorar vuestra boda.
        ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Meseros',
            'descripcion' => 'Llamamos meseros a la manera de numerar o nombrar las mesas en vuestra boda. Un tema que cada vez adquiere más importancia y que junto con el seating plan y las minutas de menú, es vuestra carta de presentación ante los invitados en el momento banquete. Las propuestas son infinitas y por lo general, la temática responde a vuestro gusto y personalidad. 
        ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
        Sector::create([
            'titulo' => 'Seating',
            'descripcion' => 'El seating plan de una boda es un esquema hecho por los novios que informa a cada invitado dónde estará sentado.

            Los seatings se convierten en parte esencial de la decoración, se juega con los detalles y se crean las formas más originales que puedas imaginarte, y en las que vosotros podéis aportar vuestras ideas. ',
            'tipo_id' => 3,
            'capacidad_id' => null

        ]);
    }
}
