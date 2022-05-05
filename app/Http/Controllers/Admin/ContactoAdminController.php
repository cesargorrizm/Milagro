<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


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

        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        return view('admin.contacto.index', compact('titlePage'));
    }

}
