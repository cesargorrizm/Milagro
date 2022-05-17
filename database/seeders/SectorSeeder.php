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
            'descripcion' => '<h2><strong>Un lugar &uacute;nico y exclusivo</strong></h2> <p>&nbsp;</p> <p>Esta espectacular finca, situada en la localidad turolense de El Pobo a 25 minutos de Teruel, destaca por su incre&iacute;ble entorno natural y su impresionante extensi&oacute;n total de 179.000 metros cuadrados rodeada de un campo de Pitch &amp; Putt de 9 hoyos.<br /> <br /> El verde de las siete hect&aacute;reas dedicadas al golf, contrasta con el blanco de las instalaciones de la mas&iacute;a y el morado de los campos de lavanda, que rodean todo el complejo en plena Sierra, todo ello acompa&ntilde;ado de un paseo de plantas arom&aacute;ticas convierten a Santa Ana en un lugar &uacute;nico y exclusivo.<br /> <br /> Destaca su encantadora plaza con una preciosa fuente, en la que podr&aacute;s celebrar tu c&oacute;ctel de recepci&oacute;n al aire libre as&iacute; como la fiesta posterior en un entorno natural privilegiado.<br /> <br /> Para el banquete cuenta con un precioso sal&oacute;n acristalado con capacidad para 200 personas, que destaca por su luminosidad y sus magn&iacute;ficas vistas. En este sal&oacute;n predomina la luz y el blanco, por lo que ofrece una gran versatilidad para una decoraci&oacute;n personalizada. Destacan sus estilosas sillas Tiffany, una prueba del buen gusto en el dise&ntilde;o.<br /> <br /> Adem&aacute;s cuenta con zona de cafeter&iacute;a, salas privadas y una amplia zona de parking.<br /> <br /> La ubicaci&oacute;n de esta finca en una atm&oacute;sfera r&uacute;stica rodeada de naturaleza hacen de este lugar el id&oacute;neo para realizar todo tipo de celebraciones .Si has pensado en una boda diferente, La Finca Santa Ana &ldquo;est&aacute; hecha para ti&rdquo;.</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Navarrete del río',
            'descripcion' => '<h2><strong>RINCON DE NAVARRETE</strong></h2> <h3>Uno de los rincones con m&aacute;s encanto de Arag&oacute;n</h3> <p>&nbsp;</p> <p>Esta magn&iacute;fica edificaci&oacute;n restaurada est&aacute; situada en la localidad de Navarrete del R&iacute;o (Teruel). Una preciosa casa solariega aragonesa del siglo XVII que conserva todos los elementos constructivos y decorativos de la &eacute;poca , a destacar las balconadas de forja del hotel vistas desde el jard&iacute;n que formaban parte de la fachada del museo Thissen hasta ser retiradas para la remodelaci&oacute;n del edificio<br /> <br /> Si quieres una celebraci&oacute;n con encanto este es el marco ideal, sus rincones est&aacute;n llenos de historias a las que sumar vuestra propia boda .<br /> <br /> Su precioso patio r&uacute;stico con amplias zonas ajardinadas es el entorno perfecto para recibir a tus invitados o disfrutar al aire libre despu&eacute;s del banquete .<br /> <br /> Su amplio y luminoso sal&oacute;n con capacidad para 300 personas posee un aire rom&aacute;ntico que podr&aacute;s personalizar con una decoraci&oacute;n a tu gusto<br /> <br /> El hotel consta de 13 habitaciones , todas ellas tienen una decoraci&oacute;n individualizada de estilo cl&aacute;sico, d&oacute;nde podr&aacute;s alojar a tus invitados. Se contempla el cierre del Hotel para cada evento.</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Escaleruela',
            'descripcion' => '<h2><strong>Plena Naturaleza</strong></h2> <p>&nbsp;</p> <p>Situada en un paraje espectacular de la comarca G&uacute;dar &ndash; Javalambre,en Sarri&oacute;n a 20 minutos de Teruel, en este complejo disfrutar&eacute;is en plena naturaleza de un sorprendente paisaje verde cargado de rincones llenos de vida .Un enclave natural, en el que el agua es protagonista dotando a este lugar de una belleza exuberante<br /> <br /> Este espacio est&aacute; hecho para ti si est&aacute;s pensando en una boda al aire libre, sumerge a tus invitados en un ambiente de ensue&ntilde;o donde la naturaleza es el marco ideal para hacer tu sue&ntilde;o realidad.<br /> <br /> La Escaleruela est&aacute; pensada para que no falte ning&uacute;n detalle en tu celebraci&oacute;n: aperitivo, zona de baile en la piscina, posibilidades para zona chill-out, espacio para tu ceremonia civil, instalaci&oacute;n de carpa para el banquete, amplia zona de aparcamiento.<br /> <br /> Ofrece incre&iacute;bles paisajes para tus sesiones fotogr&aacute;ficas en sus singulares cascadas naturales de agua de manantial</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Lago Azul',
            'descripcion' => '<h2><strong>Un lugar de Ensue&ntilde;o</strong></h2> <p>&nbsp;</p> <p>Situada en la cola del Pantano del Arquillo en el t&eacute;rmino turolense de San Blas, goza de una privacidad y unas vistas incomparables<br /> <br /> El contraste del agua con las elevaciones que lo rodean convierten a este lugar en un remanso de paz que os acerca al para&iacute;so perdido que est&aacute;is buscando.<br /> <br /> Imagina una boda en un espacio &uacute;nico, suspendido entre el cielo y el agua, en un singular paraje de gran belleza est&eacute;tica que proporciona la atm&oacute;sfera id&oacute;nea para una celebraci&oacute;n de boda inolvidable.</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'El Mercao',
            'descripcion' => ' 	<h2><strong>En pleno centro de Teruel</strong></h2> <p>&nbsp;</p> <p>Situado en la Plaza Amantes, en pleno centro de la ciudad de Teruel, goza de una privacidad y unas vistas incomparables a los pies de la Torre de San Pedro</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Bonet',
            'descripcion' => '<h2><strong>HUERTO DE BONET</strong></h2> <h3>Un lugar m&aacute;gico</h3> <p>&nbsp;</p> <p>El Huerto de Bonet en Alginet (Valencia) es una finca rodeada de naranjos que data del siglo XVIII.<br /> <br /> El edificio principal de la mas&iacute;a tiene m&aacute;s de cien a&ntilde;os de antig&uuml;edad, fue restaurado conservando cuidadosamente la arquitectura original y el sabor tradicional.<br /> <br /> La finca tambi&eacute;n cuenta con un pozo de la &eacute;poca &aacute;rabe que se utiliza para regar los campos de naranjos.<br /> <br /> La mas&iacute;a est&aacute; rodeada de unos jardines de ensue&ntilde;o creados hace m&aacute;s de setenta a&ntilde;os por los propietarios, quienes plantaron un amplio y frondoso jard&iacute;n con una gran variedad de especies de &aacute;rboles y con un lago central rodeado de ca&ntilde;as de bamb&uacute;.<br /> <br /> Dentro del propio jard&iacute;n hay distintas zonas muy espaciosas rodeadas de naturaleza que generan un ambiente inolvidable y privilegiado. Adem&aacute;s, cuenta con una zona cubierta rodeada de naranjos y con acceso directo desde el jard&iacute;n.<br /> <br /> Huerto de Bonet se convierte en un espacio ideal para celebraciones de hasta 400 personas en zona exterior y de 250 en la zona cubierta.</p>',
            'tipo_id' => 2,
            'capacidad_id' => 1

        ]);

        // Salas 

        Sector::create([
            'titulo' => 'Sala San Pedro',
            'descripcion' => '<h2><strong>La sencillez con clase</strong></h2> <h3>Un ambiente c&aacute;lido y acogedor</h3> <p>Un sal&oacute;n con un estilo marcadamente contempor&aacute;neo e innovador donde la elegancia y la est&eacute;tica se funden</p> <p><em>&quot;Me gust&oacute; lo di&aacute;fano del sal&oacute;n y su decoraci&oacute;n. Respira alegr&iacute;a.&quot;</em></p>',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Salón Virgen del Pilar',
            'descripcion' => '<h2><strong>El sabor de la tradici&oacute;n</strong></h2> <h3>Evocador del arte mud&eacute;jar</h3> <p>Grandes momentos en un ambiente c&aacute;lido y distinguido.</p> <p><em>&quot;Respira glamour. Dise&ntilde;o exclusivo.&quot;&nbsp; </em></p>',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Salón San Fernando',
            'descripcion' => '<h2><strong>Un caracter muy nuestro</strong></h2> <h3>Espacio selecto y luminoso que te har&aacute; tocar el cielo</h3> <p>Un ambiente donde la nobleza de la madera armoniza con el car&aacute;cter eminentemente mediterr&aacute;neo que la rodea.</p> <p><em>&ldquo;Te entran ganas de tocar el techo... los colores... No s&eacute; c&oacute;mo explicarlo... Hay que verlo.&quot;</em></p>',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Sala Garden',
            'descripcion' => '<h2><strong>Sala multiuso</strong></h2> <h3>Un ambiente moderno y acogedor</h3> <p>Un sal&oacute;n con un estilo marcadamente contempor&aacute;neo e innovador donde la elegancia y la est&eacute;tica se funden.</p> <p><em>&quot;Me gust&oacute; lo di&aacute;fano del sal&oacute;n y su decoraci&oacute;n. Respira modernidad.&quot;&nbsp; </em></p>',
            'tipo_id' => 1,
            'capacidad_id' => 1

        ]);
        Sector::create([
            'titulo' => 'Terraza Jardin',
            'descripcion' => '<h2><strong>Perfecto para celebraciones al aire libre</strong></h2> <p><strong>El Jard&iacute;n de El Restaurante El Milagro</strong> es un marco incomparable y excepcional, a tan solo 5 minutos de Teruel. Un espacio de ensue&ntilde;o que hace de cada visita al Milagro una experiencia diferente.<br /> <br /> Un lugar id&oacute;neo para celebrar cualquier evento, por su tranquilidad, su exclusividad y su amplitud. La decoraci&oacute;n personalizada har&aacute; que cada rinc&oacute;n sea tal y como lo hab&iacute;as so&ntilde;ado.</p>',
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

        // Servicios incluidos
        Sector::create([
            'titulo' => 'Degustación del Menú para 6 personas previamente elegido (para contrataciones superiores a 120 plazas) ',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Decoración floral para la presidencia así como para el resto de las mesas',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Tarjetones de minuta para todos los comensales',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Seating plan invitados',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Habitación para los novios la noche de la boda en HOTEL TORICO PLAZA en régimen de alojamiento y desayuno. Check out 16.00 horas ',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Zona infantil de juegos e hinchables con monitores',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Impuestos SGAE',
            'tipo_id' => 4,
        ]);
        Sector::create([
            'titulo' => 'Descuento en celebraciones especiales: San Valentín , Nochevieja , Reyes, etc',
            'tipo_id' => 4,
        ]);

        // Para vuestros invitados

        Sector::create([
            'titulo' => 'Aparcamiento amplio, vigilado y de fácil accesibilidad',
            'tipo_id' => 5,
        ]);
        Sector::create([
            'titulo' => 'Tarifas especiales para el alojamiento de vuestros invitados en el Hotel Torico Plaza (Yagüe de Salas,5)',
            'tipo_id' => 5,
        ]);

    }
}
