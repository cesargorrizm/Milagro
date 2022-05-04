<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct() {

        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.create')->only('create', 'store');
        $this->middleware('can:roles.edit')->only('edit', 'update');
        $this->middleware('can:roles.destroy')->only('destroy');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titlePage = "Gestión de Roles";
        $title = "Listado de roles";

        $roles = Role::all();
        //$permissions = Permission::all();

        //return view('admin.roles.index',compact('roles', 'title', 'titlePage', 'permissions'));
        return view('admin.roles.index',compact('roles', 'title', 'titlePage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titlePage = "Crear Nuevo Rol";
        $title = "Formulario Crear Rol";

        $permissions = Permission::all();

        return view('admin.roles.create',compact('titlePage', 'title', 'permissions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);

        //se crea el nuevo rol
        $role = Role::create($request->all());
        //$role->syncPermissions($request->permissions);
        // asignamos al rol los permisos seleccionados
        $role->permissions()->sync($request->permissions);

        return redirect()->route('roles.index')->with('status', '¡Se ha creado el rol '
            . $role->name . ' correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {

        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id", $role->id)
            ->get();

        return view('admin.roles.show',compact('role','rolePermissions'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titlePage = "Actualizar Rol";
        $title = "Formulario Actualizar Rol";

        $role = Role::find($id);
        $permissions = Permission::all();

        return view('admin.roles.edit',compact('titlePage', 'title', 'role', 'permissions'));
        //return view('roles.edit',compact('titlePage', 'title', 'permissions'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    //public function update(Request $request, Role $role)
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permissions' => 'required',
        ]);

        $role = Role::find($id);
        //$role->name = $request->input('name');
        //$role->save();
        $role->update($request->all());

        //$role->syncPermissions($request->input('permission'));
        $role->permissions()->sync($request->permissions);

        //return redirect()->route('roles.index')
        //    ->with('success','Rol actualizado correctamente');

        return redirect()->route('roles.index')->with('status', '¡Se ha actualizado el rol '
            . $role->name . ' correctamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    //public function destroy(Role $role)
    public function destroy($id)
    {
        //DB::table("roles")->where('id', $id)->delete();
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('roles.index')->with('status', '¡Se ha eliminado el rol '
            . $role->name . ' correctamente!');

    }
}
