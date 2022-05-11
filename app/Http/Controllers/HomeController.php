<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Image;
use App\Models\Sector;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __invoke(){
    //     return view('layouts.public');
    // }
    public function index() {


        $espacios = Sector::where('tipo_id','=','2')->get();
        $eventos = Sector::where('tipo_id','=','3')->get();

        $imagenes = Image::where('principal','=','1')->get();
        //dd($espacios);
       // $sectores = Sector::all();
        $contacto = Contacto::first();
        // $tipos = Tipo
        //dd($contacto);


        return view('layouts.public',compact('contacto','espacios','imagenes','eventos'));
    }
}
