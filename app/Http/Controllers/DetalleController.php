<?php

namespace App\Http\Controllers;

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
        $contacto = Contacto::first();
        // $tipos = Tipo
        //dd($contacto);


        return view('layouts.detalle',compact('contacto','det','imagenes'));
    }
}
