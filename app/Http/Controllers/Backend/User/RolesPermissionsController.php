<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all()->except(1);
        return view('backend.user.rolePermission.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('backend.user.rolePermission.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        $name = Str::slug($request->name);
        $rp = Role::create([
            'name' => $name
        ]);
        $rp->syncPermissions($request->permissions);
        return redirect()->route('rps.index')->with('success', 'Role and permissions are created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $rp)
    {
        $permissions = Permission::all();
        return view('backend.user.rolePermission.edit', ['rp' => $rp, 'permissions' => $permissions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $rp)
    {
        $request->validate(['name' => 'required']);
        $name = Str::slug($request->name);
        $rp->name = $name;
        $rp->save();
        $rp->syncPermissions($request->permissions);
        return redirect()->route('rps.index')->with('success', 'Permissions has been attached to the role.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
