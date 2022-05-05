<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contacto;


use Illuminate\Http\Request;

class ContactoAdminController extends Controller
{
    public function __construct() {

        $this->middleware('can:contacto.index')->only('index');


    }
    public function index()
    {
        $titlePage = "Listado Contacto";
        //$permissions = Permission::all();
        $contactos = Contacto::all();
        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        return view('admin.contacto.index', compact('titlePage','contactos'));
    }

}
