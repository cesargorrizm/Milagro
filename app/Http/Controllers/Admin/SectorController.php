<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Models\Tipo;
use App\Models\Capacidad;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectorController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:sector.index')->only('index');
        $this->middleware('can:sector.create')->only('create', 'store');
        $this->middleware('can:sector.edit')->only('edit', 'update');
        $this->middleware('can:sector.destroy')->only('destroy');
    }


    public function index()
    {
        $titlePage = "Listado Sector";
        //$permissions = Permission::all();
        $sectores = Sector::all();
        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        $tipos = Tipo::all();

        return view('admin.sector.index', compact('titlePage', 'sectores', 'tipos'));
    }
    public function edit(Sector $sector)
    {
        $titlePage = "Actualizar Sector";
        $title = "Formulario Actualizar Sector";
        $capacidades = Capacidad::all();

        // $mapaCapacidades = $capacidades2->map(function ($capacidad) {
        //     return [

        //         'frase' => "Banquete Sin Baile: {$capacidad->banqueteSinBaile} Banquete Con Baile: {$capacidad->banqueteConBaile} "
        //     ];
        // });


        
        
        $tipos = Tipo::pluck('nombre', 'id');


        //$sector = Sector::pluck('titulo','id');

        return view('admin.sector.edit', compact('titlePage', 'title', 'sector', 'tipos', 'capacidades'));
    }


    public function update(Request $request, Sector $sector)
    {
        $request->validate([
            'titulo' => 'required',
            'tipo_id' => 'required',
        ]);

        // $sector-> Sector::find($id);
        // return $request;
        $sector->titulo = $request->titulo;
        $sector->descripcion = $request['summary-ckeditor'];
        $sector->tipo_id = $request->tipo_id;
        $sector->capacidad_id = $request->mapaCapacidades;
        $sector->subtitulo = $request->subtitulo;
        if($sector->tipo_id=='4' || $sector->tipo_id=='5'){
            $sector->subtitulo = null;
            $sector->descripcion = null;
            $sector->capacidad_id = null;
        }else if($sector->tipo_id=='3'){
            $sector->capacidad_id = null;
        } 
    
        // if ( $request->checkbox=='on') {
    
        //     $sector->capacidad_id = $request->mapaCapacidades;
        // }else{
        //     $sector->capacidad_id =null;
        // }

        $sector->update();



        //asignamos al usuario el rol seleccionado
        //$user->assignRole($request->input('roles'));

        return redirect()->route('sector.index')
            ->with('status', '¡Se ha actualizado el contacto ' . $sector->titulo . ' correctamente!');
    }
    public function create()
    {

        $titlePage = "Crear Nuevo sector";
        $title = "Formulario Crear imagen";
        $capacidades = Capacidad::all();

        
        $tipos = Tipo::pluck('nombre', 'id');

        return view('admin.sector.create', compact('titlePage', 'title','capacidades','tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'tipo_id' => 'required',
        ]);

        // $sector-> Sector::find($id);
        $sector = new Sector();
        $sector->titulo = $request->titulo;
        $sector->descripcion = $request['summary-ckeditor'];
        $sector->tipo_id = $request->tipo_id;
        $sector->capacidad_id = $request->mapaCapacidades;
        $sector->subtitulo = $request->subtitulo;
        if($sector->tipo_id=='4' || $sector->tipo_id=='5'){
            $sector->subtitulo = null;
            $sector->descripcion = null;
            $sector->capacidad_id = null;
        }else if($sector->tipo_id=='3'){
            $sector->capacidad_id = null;
        } 
        $sector->save();



        //asignamos al usuario el rol seleccionado
        //$user->assignRole($request->input('roles'));

        return redirect()->route('sector.index')
            ->with('status', '¡Se ha actualizado el contacto ' . $sector->titulo . ' correctamente!');
    }
    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('sector.index')
            ->with('status', '¡Se ha eliminado el sector ' . $sector->id . ' correctamente!');
    }

}
