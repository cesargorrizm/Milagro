<?php

namespace App\Http\Controllers;

use App\Models\Capacidad;
use App\Models\Contacto;
use App\Models\Image;
use App\Models\Sector;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(int $detalle) {
        

        
        $det = Sector::where('id','=',$detalle)->get();
        
        $imagenes = Image::where('sector_id','=',$detalle)->get();
        //dd($espacios);
        // $sectores = Sector::all();
        $capacidad = Capacidad::where('id','=',$det[0]->capacidad_id)->get();
        
        // $tipos = Tipo
        //dd($contacto);


        return view('layouts.detalle',compact('capacidad','det','imagenes'));
    }
}
