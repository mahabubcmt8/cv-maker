<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::with('permissions')->latest()->paginate();
        $pageTitle = 'Role & Permission Management';
        return view('admin.roles.index', compact('roles','pageTitle'));
    }

    public function create()
    {
        $permissions = Permission::all();
        $pageTitle = 'Create new Role';
        return view('admin.roles.create', compact('permissions','pageTitle'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);
        $role = Role::create([
            'name'=> $request->name,
            'guard_name'=> 'web',
        ]);
        $role->syncPermissions($request->permission);
        Alert::toast('New role with permission created successfully!', 'success');
        return redirect()->route('admin.roles.index');
    }


    public function show(string $id)
    {
        $role = Role::with('permissions')->find($id);
        $pageTitle = 'Show Role & Permissions';
        return view('admin.roles.show', compact('pageTitle','role'));
    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Role & permissions';
        $role = Role::with('permissions')->find($id);
        $permissions = Permission::all();
        $data = $role->permissions()->pluck('id')->toArray();
        return view('admin.roles.edit', compact('role','permissions','pageTitle','data'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => "required|unique:roles,name, $role->id"
        ]);
        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permission);
        Alert::toast('Role & Permission updated successfully!', 'success');
        return redirect()->route('admin.roles.index');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        Alert::toast('Role Deleted!', 'error');
        return redirect()->back();
    }
}
