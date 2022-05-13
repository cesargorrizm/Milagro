<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Sector;
use App\Models\SliderPrincipal;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SliderPrincipalController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:sliderPrincipal.index')->only('index');
        $this->middleware('can:sliderPrincipal.create')->only('create', 'store');
        $this->middleware('can:sliderPrincipal.edit')->only('edit', 'update');
        $this->middleware('can:sliderPrincipal.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titlePage = "Gestión del slider Principal";
        $title = "Listado de slider Principal";

        $sliderPrincipal = SliderPrincipal::all();

        return view('admin.sliderPrincipal.index', compact('titlePage', 'title'))->with('sliderPrincipal', $sliderPrincipal);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param SliderPrincipal $sliderPrincipal
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderPrincipal $sliderPrincipal)
    {
        $titlePage = "Actualizar slider Principal";
        $title = "Formulario Actualizar slider Principal";

        return view('admin.sliderPrincipal.edit', compact('titlePage', 'title', 'sliderPrincipal'))
            ->with('sliderPrincipal', $sliderPrincipal);
        }
        
        /**
         * Update the specified resource in storage.
         *
     * @param Request $request
     * @param SliderPrincipal $sliderPrincipal
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, SliderPrincipal $sliderPrincipal)
    {
        $request->validate([
            'archivo' => 'required',
        ]);

        // $fotoPrincipal =  $request->url;
        
        // return $sliderPrincipal;
        // return $image->id;
            //Recogemos el archivo enviado por el formulario
            $archivo = $_FILES['archivo']['name'];
            //Si el archivo contiene algo y es diferente de vacio
            if (isset($archivo) && $archivo != "") {
                //Obtenemos algunos datos necesarios sobre el archivo
                $tipo = $_FILES['archivo']['type'];
                $tamano = $_FILES['archivo']['size'];
                $temp = $_FILES['archivo']['tmp_name'];

                // return $temp . $tamano . $tipo;
                //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                // && ($tamano < 2000000)
                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
                    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                } else {
                    //Si la imagen es correcta en tamaño y tipo
                    //Se intenta subir al servidor
                     //Se intenta subir al servidor
                     $estructura = "images/hero/";
                     // pasarle el nombre de la imagen
                    if($sliderPrincipal->orden==1){
                        $estructura = "images/hero/hero-1.jpg";
                        $sliderPrincipal->url = asset($estructura);
                    } elseif($sliderPrincipal->orden==2){
                        $estructura = "images/hero/hero-2.jpg";
                        $sliderPrincipal->url = asset($estructura);
                    } else{
                        $estructura = "images/hero/hero-3.jpg";
                        $sliderPrincipal->url = asset($estructura);
                    }
                    //  // crear la carpeta si no existe
                    //  if(!is_dir($estructura)){
                    //      mkdir($estructura, 0777, true);
                    //  }
                    //  return $estructura . $archivo;
                    //  return $temp;
                    //  return $sliderPrincipal->url;
                    if (move_uploaded_file($temp, $estructura)) {
                        //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                        chmod($estructura, 0777);
                        //Mostramos el mensaje de que se ha subido co éxito
                        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                    } else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                    }
                }
                
            }
        $sliderPrincipal->update();

        return redirect()->route('sliderPrincipal.index')
            ->with('status', '¡Se ha actualizado el slider Principal ' . $sliderPrincipal->url . ' correctamente!');
    }
}
