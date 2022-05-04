<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function __construct() {

        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.create')->only('create', 'store');
        $this->middleware('can:users.edit')->only('edit', 'update');
        $this->middleware('can:users.destroy')->only('destroy');

    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titlePage = "Gestión de Usuarios";
        $title = "Listado de usuarios";

        $users = User::all();

        return view('admin.users.index', compact('titlePage','title'))->with('usuarios', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $titlePage = "Crear Nuevo Usuario";
        $title = "Formulario Crear Usuario";

        //$roles = Role::pluck('name','name')->all();
        $roles = Role::pluck('name', 'id');

        return view('admin.users.create', compact('titlePage','title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            //'password' => 'required|same:confirm-password',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;

        //Ciframos la contraseña
        $user->password = Hash::make($request->password);

        // asignamos al usuario el rol seleccionado
        $user->assignRole($request->role);

        $user->save();

        return redirect()->route('users.index')
            ->with('status', '¡Se ha creado al usuario ' . $user->name . ' correctamente!');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
//    public function show($id)
//    {
//        $user = User::find($id);
//        return view('usuarios.show',compact('user'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $titlePage = "Actualizar Usuario";
        $title = "Formulario Actualizar Usuario";

        $roles = Role::pluck('name','id');

        return view('admin.users.edit', compact('titlePage', 'title', 'user', 'roles'))
            ->with('usuario', $user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        //Ciframos la contraseña
        $user->password = Hash::make($request->password);

        $user->update();

        DB::table('model_has_roles')->where('model_id',$user->id)->delete();

        //asignamos al usuario el rol seleccionado
        //$user->assignRole($request->input('roles'));
        $user->assignRole($request->get('role'));

        return redirect()->route('users.index')
            ->with('status', '¡Se ha actualizado el usuario ' . $user->name . ' correctamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    //public function destroy($id)
    public function destroy(User $user)
    {
        //$user = User::query()->findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')
            ->with('status', '¡Se ha eliminado al usuario ' . $user->name . ' correctamente!');
    }

}
