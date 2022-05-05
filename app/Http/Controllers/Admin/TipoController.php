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
    public function destroy(Tipo $tipo)
    {
        //$user = User::query()->findOrFail($id);

        $tipo->delete();

        return redirect()->route('tipo.index')
            ->with('status', '¡Se ha eliminado al usuario ' . $tipo->nombre . ' correctamente!');
    }

}
