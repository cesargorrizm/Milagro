<?php

namespace App\Http\Controllers\Admin;
use App\Models\Instancia;

use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class InstanciaController extends Controller
{
    public function __construct() {

        $this->middleware('can:instancia.index')->only('index');


    }
    public function index()
    {
        $titlePage = "Listado Instancia";
        //$permissions = Permission::all();
        $instancias = Instancia::all();
        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        return view('admin.instancia.index', compact('titlePage'));
    }
}
