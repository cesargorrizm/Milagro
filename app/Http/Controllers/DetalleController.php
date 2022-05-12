<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Image;
use App\Models\Sector;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index( $detalle) {
        


        $salas = Sector::where('tipo_id','=','1')->get();
        $espacios = Sector::where('tipo_id','=','2')->get();
        $eventos = Sector::where('tipo_id','=','3')->get();

        $imagenes = Image::where('principal','=','1')->get();
        //dd($espacios);
       // $sectores = Sector::all();
        $contacto = Contacto::first();
        // $tipos = Tipo
        //dd($contacto);


        return view('layouts.detalle',compact('contacto','espacios','imagenes','eventos','salas','e'));
    }
}
