<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class ImageController extends Controller
{
    public function __construct() {

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

        return view('admin.image.index', compact('titlePage','title'))->with('image', $image);
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


        return view('admin.image.create', compact('titlePage','title'));
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


        // $imagen = $request->file($request->url);
        // $nombreimagen = $imagen->getClientOriginalName();
        // $ruta = public_path("images/post/" . $nombreimagen);
        // $img = Image::make($request->file('ruta')->getRealPath());
        // $img->save($ruta);

        // if($request->hasFile("url")){

        //     $image = new Image();
        //     $image = $request->file("url");
        //     $nombreimagen = Str::slug($request->url).".".$image->guessExtension();
        //     $ruta = public_path("images/post/");

        //     //$imagen->move($ruta,$nombreimagen);
        //     copy($imagen->getRealPath(),$ruta.$nombreimagen);

        //     $post->imagen = $nombreimagen;            
            
        // }


        // return $request->all();
        $image = new Image();
            // $file = $request->file($request->url);
            // $filename = time() . '-' . $file->getClientOriginalName();
        $image->url = ("images/post/" . $request->url);
        if($request->principal==1){
            $image->principal = $request->principal;
            
        } else {
            $image->principal = 0;

        }
        $image->save();


        


        
        // if($request->hasFile('url')){
        //     $file = $request->file('url');
        //     $destinationPath = 'images/featureds/';
        //     $filename = time() . '-' .$file->getClientOriginalName();
        //     $uploadSuccess = $request->file('url')->move($destinationPath,$filename);
        //     $image->url = $request->$destinationPath . $filename;
        // }

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

        return view('admin.image.edit', compact('titlePage', 'title', 'image'))
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
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        //     'role' => 'required',
        // ]);
        $file = $request->file($request->url);
        $nombreimagen = $file->getClientOriginalName();
        $ruta = public_path("images/post/" . $nombreimagen);
        $img = Image::make($request->file('url')->getRealPath());
        $img->save($ruta);
        $image->ruta = asset('images/post/' . $request->url);
        $image->principal = $request->principal;
        $image->save();






        // $image = new Image();
        // if($request->hasFile('url')){
        //     $file = $request->file('url');
        //     $destinationPath = 'images/post/';
        //     $filename = time() . '-' .$file->getClientOriginalName();
        //     $uploadSuccess = $request->file('url')->move($destinationPath,$filename);
        //     $image->url = $request->$destinationPath . $filename;
        //     $image->principal = $request->principal;
        // }else{
        //     $image->url = 'nada';
        //     $image->principal = $request->principal;

        // }

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
            ->with('status', '¡Se ha eliminado al image ' . $image->url . ' correctamente!');
    }

}
