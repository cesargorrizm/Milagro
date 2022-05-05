<?php

namespace App\Http\Controllers;
use App\Models\Instancia;

use Illuminate\Http\Request;

class InstanciaController extends Controller
{
    public function __construct() {

        $this->middleware('can:contacto.index')->only('index');


    }
    public function index()
    {
        $titlePage = "Listado Contacto";
        //$permissions = Permission::all();
        $instancias = Instancia::all();
        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        return view('admin.contacto.index', compact('titlePage','contactos'));
    }
}
