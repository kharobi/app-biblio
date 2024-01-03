<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:role-list|role-create|role-edit|role-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:role-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('pages.applications.ecommerce.roles.index', compact('roles'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('pages.applications.ecommerce.roles.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
        //dd($request->input('permission'));
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('ecommerce.roles.index')
            ->with('success', 'Role created successfully');
    }

    public function show(Request $request)
    {
        $role = Role::find($request->role);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $request->role)
            ->get();

        return view('pages.applications.ecommerce.roles.show', compact('role', 'rolePermissions'));
    }

    public function edit(Request $request)
    {
        $role = Role::find($request->role);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $request->role)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('pages.applications.ecommerce.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        dd($request);
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('ecommerce.roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function destroy(Request $request)
    {
        DB::table("roles")->where('id', $request->role)->delete();
        return redirect()->route('ecommerce.roles.index')
            ->with('success', 'Role deleted successfully');
    }
}