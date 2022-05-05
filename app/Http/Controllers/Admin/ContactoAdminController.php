<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Support\Facades\Hash;

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
    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
            'telefono' => 'required|integer',
            'email' => 'required|email',
            'tripadvisor' => 'required',
            'facebook' => 'required',
            'miNube' => 'required',
        ]);

        $contacto->telefono = $request->telefono;
        $contacto->email = $request->email;
        $contacto->tripadvisor = $request->tripadvisor;
        $contacto->facebook = $request->facebook;
        $contacto->miNube = $request->miNube;

        

        $contacto->update();

        

        //asignamos al usuario el rol seleccionado
        //$user->assignRole($request->input('roles'));

        return redirect()->route('contacto.index')
            ->with('status', '¡Se ha actualizado el contacto ' . $contacto->email . ' correctamente!');

    }

    public function edit(Contacto $contacto)
    {
        $titlePage = "Actualizar Contacto";
        $title = "Formulario Actualizar Contacto";

        $contactos = Contacto::pluck('email','id');

        return view('admin.contacto.edit', compact('titlePage', 'title', 'contacto', 'contactos'))
            ->with('contacto', $contacto);

    }
}
