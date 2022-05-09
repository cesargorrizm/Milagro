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
            'descripcion' => 'required',
            'tipo_id' => 'required',
        ]);

        // $sector-> Sector::find($id);

        $sector->titulo = $request->titulo;
        $sector->descripcion = $request->descripcion;
        $sector->tipo_id = $request->tipo_id;
    
        if ( $request->checkbox=='on') {
    
            $sector->capacidad_id = $request->mapaCapacidades;
        }else{
            $sector->capacidad_id =null;
        }



        $sector->update();



        //asignamos al usuario el rol seleccionado
        //$user->assignRole($request->input('roles'));

        return redirect()->route('contacto.index')
            ->with('status', '¡Se ha actualizado el contacto ' . $sector->titulo . ' correctamente!');
    }
}
