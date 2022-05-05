<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function __construct() {

        $this->middleware('can:tipo.index')->only('index');
        $this->middleware('can:tipo.create')->only('create', 'store');
        $this->middleware('can:tipo.edit')->only('edit', 'update');
        $this->middleware('can:tipo.destroy')->only('destroy');


    }
    public function index()
    {
        $titlePage = "Listado tipo";

        $title = "Listado de tipo";

        $tipo = Tipo::all();
        return view('admin.tipo.index', compact('titlePage','title'))->with('tipo', $tipo);
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $titlePage = "Crear Nuevo Tipo";
        $title = "Formulario Crear Tipo";
        return view('admin.tipo.create', compact('titlePage','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $tipo = new Tipo();
        $tipo->nombre = $request->nombre;
        $tipo->save();

        return redirect()->route('tipo.index')
            ->with('status', '¡Se ha creado el tipo ' . $tipo->nombre . ' correctamente!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Tipo $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        $titlePage = "Actualizar Tipo";
        $title = "Formulario Actualizar Tipo";

        return view('admin.tipo.edit', compact('titlePage', 'title', 'tipo'))
            ->with('tipo', $tipo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, Tipo $tipo)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $tipo->nombre = $request->nombre;
        $tipo->update();

        return redirect()->route('tipo.index')
            ->with('status', '¡Se ha actualizado el editar ' . $tipo->nombre . ' correctamente!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    //public function destroy($id)
    public function destroy(Tipo $tipo)
    {
        //$user = User::query()->findOrFail($id);

        $tipo->delete();

        return redirect()->route('tipo.index')
            ->with('status', '¡Se ha eliminado al usuario ' . $tipo->nombre . ' correctamente!');
    }

}
