<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capacidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class CapacidadController extends Controller
{
    public function __construct() {

        $this->middleware('can:capacidad.index')->only('index');
        $this->middleware('can:capacidad.create')->only('create', 'store');
        $this->middleware('can:capacidad.edit')->only('edit', 'update');
        $this->middleware('can:capacidad.destroy')->only('destroy');

    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $titlePage = "Gestión de capacidad";
        $title = "Listado de capacidad";

        $capacidad = Capacidad::all();

        return view('admin.capacidad.index', compact('titlePage','title'))->with('capacidad', $capacidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $titlePage = "Crear Nuevo Capacidad";
        $title = "Formulario Crear Capacidad";


        return view('admin.capacidad.create', compact('titlePage','title'));
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
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     //'password' => 'required|same:confirm-password',
        //     'password' => 'required|min:6',
        //     'role' => 'required',
        // ]);

        $capacidad = new Capacidad();
        
        $capacidad->banqueteSinBaile = $request->banqueteSinBaile;
        $capacidad->banqueteConBaile = $request->banqueteConBaile;
        $capacidad->cocktail = $request->cocktail;
        $capacidad->actos = $request->actos;
        $capacidad->buffet = $request->buffet;
        $capacidad->save();

        return redirect()->route('capacidad.index')
            ->with('status', '¡Se ha creado al usuario ' . $capacidad->banqueteSinBaile . ' correctamente!');


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
     * @param Capacidad $Capacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Capacidad $Capacidad)
    {
        $titlePage = "Actualizar capacidad";
        $title = "Formulario Actualizar capacidad";

        return view('admin.capacidad.edit', compact('titlePage', 'title', 'Capacidad'))
            ->with('capacidad', $Capacidad);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Capacidad $capacidad
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, Capacidad $capacidad)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        //     'role' => 'required',
        // ]);

        $capacidad = new Capacidad();
        
        $capacidad->banqueteSinBaile = $request->banqueteSinBaile;
        $capacidad->banqueteConBaile = $request->banqueteConBaile;
        $capacidad->cocktail = $request->cocktail;
        $capacidad->actos = $request->actos;
        $capacidad->buffet = $request->buffet;
        $capacidad->update();

        return redirect()->route('capacidad.index')
            ->with('status', '¡Se ha actualizado el usuario ' . $capacidad->banqueteSinBaile . ' correctamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Capacidad $capacidad
     * @return Response
     * @throws \Exception
     */
    //public function destroy($id)
    public function destroy(Capacidad $capacidad)
    {

        $capacidad->delete();

        return redirect()->route('capacidad.index')
            ->with('status', '¡Se ha eliminado al usuario ' . $capacidad->banqueteSinBaile . ' correctamente!');
    }

}
