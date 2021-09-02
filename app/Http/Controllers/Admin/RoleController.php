<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('role-view')) {
            $roles = Role::all();
            return view('backend.role.index', compact('roles'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('role-create')) {
            $all_permissions  = Permission::all();
            return view('backend.role.create', compact('all_permissions'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->can('role-create')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:100|unique:roles'
            ], [
                'name.requried' => 'Please give a role name'
            ]);
    
            // Process Data
            $role = Role::create(['name' => $request->name]);
            $permissions = $request->input('permissions');
    
            if (!empty($permissions)) {
                $role->syncPermissions($permissions);
            }
    
            Toastr::success('Role Added Successfully', 'Success');
            return redirect()->route('admin.role.index');
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('role-edit')) {
            $role = Role::findById($id);
            $all_permissions  = Permission::all();
            return view('backend.role.create', compact('role','all_permissions'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->can('role-update')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:100|unique:roles,name,' . $id
            ], [
                'name.requried' => 'Please give a role name'
            ]);
    
            $role = Role::findById($id);
            $permissions = $request->input('permissions');
    
            if (!empty($permissions)) {
                $role->name = $request->name;
                $role->save();
                $role->syncPermissions($permissions);
            }
            Toastr::info('Role Updated Successfully', 'Info');
            return redirect()->route('admin.role.index');
        }else{
            return redirect()->route('admin.401');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->can('role-delete')) {
            $role = Role::findById($id);
            if (!is_null($role)) {
                $role->delete();
            }
            Toastr::warning('Role Deleted Successfully', 'Warning');
            return back();
        }else{
            return redirect()->route('admin.401');
        }
    }
}
