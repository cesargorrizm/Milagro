<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ImageController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:image.index')->only('index');
        $this->middleware('can:image.create')->only('create', 'store');
        $this->middleware('can:image.edit')->only('edit', 'update');
        $this->middleware('can:image.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titlePage = "Gestión de imagenes";
        $title = "Listado de imagen";

        $image = Image::all();
        $sectors = Sector::all();

        return view('admin.image.index', compact('titlePage', 'title','sectors'))->with('image', $image);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $titlePage = "Crear Nuevo imagen";
        $title = "Formulario Crear imagen";
        $sector = Sector::pluck('titulo','id');
        


        return view('admin.image.create', compact('titlePage', 'title','sector'));
    }

    /**
     * Store a newly created resource in storage.P
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'archivo' => 'required',
        ]);
        $fotoPrincipal =  $request->principal;

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
                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                } else {
                    //Si la imagen es correcta en tamaño y tipo
                    //Se intenta subir al servidor
                    if (move_uploaded_file($temp, 'images/post/' . $archivo)) {
                        //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                        chmod('images/post/' . $archivo, 0777);
                        //Mostramos el mensaje de que se ha subido co éxito
                        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                        //Mostramos la imagen subida
                        echo '<p><img src="images/post/' . $archivo . '"></p>';
                    } else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                    }
                }
            }

        $image = new Image();
        $image->sector_id = $request->sector;
        $image->url = asset("images/post/" . $_FILES['archivo']['name']);
        if ($fotoPrincipal == 'on') {
            $image->principal = 1;
        } else {
             $image->principal = 0;
        }
        $image->save();


        return redirect()->route('image.index')
            ->with('status', '¡Se ha creado la imagen ' . $image->url . ' correctamente!');
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
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $titlePage = "Actualizar imagen";
        $title = "Formulario Actualizar imagen";

        $sector = Sector::pluck('titulo','id');

        return view('admin.image.edit', compact('titlePage', 'title', 'image','sector'))
            ->with('image', $image);
        }
        
        /**
         * Update the specified resource in storage.
         *
     * @param Request $request
     * @param Image $image
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, Image $image)
    {
        // $request->validate([
        //     'archivo' => 'required',
        // ]);
        $fotoPrincipal =  $request->principal;
        

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
                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                } else {
                    //Si la imagen es correcta en tamaño y tipo
                    //Se intenta subir al servidor
                    if (move_uploaded_file($temp, 'images/post/' . $archivo)) {
                        //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                        chmod('images/post/' . $archivo, 0777);
                        //Mostramos el mensaje de que se ha subido co éxito
                        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                    } else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                    }
                }
                // pasarle la url a la imagen
                $image->url = asset('images/post/' . $_FILES['archivo']['name']);
            }
            
            $image->sector_id = $request->sector;

            // return $_FILES['archivo']['name'];
        if ($fotoPrincipal == 'on') {
            $image->principal = 1;
        } else {
             $image->principal = 0;
        }
        $image->update();

        return redirect()->route('image.index')
            ->with('status', '¡Se ha actualizado la imagen ' . $image->url . ' correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return Response
     * @throws \Exception
     */
    //public function destroy($id)
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('image.index')
            ->with('status', '¡Se ha eliminado la imagen ' . $image->url . ' correctamente!');
    }
}
