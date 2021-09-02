<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('admin-view')) {
            $users = User::all();
            return view('backend.user.index', compact('users'));
        }else {
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
        if (auth()->user()->can('admin-create')) {
            $roles = Role::all();
            return view('backend.user.form', compact('roles'));
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
        if (auth()->user()->can('admin-create')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:50',
                'email' => 'required|max:100|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);

            // Create New User
            $user = new User();
            if($request->has('image')){
                $image = $request->file('image');
                $ext = $image->extension();
                $file = time(). '.'.$ext;
                $image->storeAs('public/user',$file);//above 4 line process the image code
                $user->image =  $file;//ai code ta image ke insert kore
            }
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            if ($request->roles) {
                $user->assignRole($request->roles);
            }

            Toastr::success('User Added Successfully', 'Success');
            return redirect()->route('admin.user.index');
        }else {
            abort(403, 'Unathorizid to Access');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (auth()->user()->can('admin-edit')) {
            $roles  = Role::all();
            return view('backend.user.form', compact('user', 'roles'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (auth()->user()->can('admin-edit')) {
                
            // Create New User

            // Validation Data
            $request->validate([
                'name' => 'required|max:50',
            ]);


            if($request->has('image')){
                $image = $request->file('image');
                $ext = $image->extension();
                $file = time(). '.'.$ext;
                $image->storeAs('public/user',$file);//above 4 line process the image code
                $user->image =  $file;//ai code ta image ke insert kore
            }
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->save();

            $user->roles()->detach();
            if ($request->roles) {
                $user->assignRole($request->roles);
            }

            Toastr::info('User Updated Successfully', 'Info');
            return redirect()->route('admin.user.index');

        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (auth()->user()->can('admin-delete')) {
                
            if (!is_null($user)) {
                $user->delete();
            }

            Toastr::warning('User has been deleted !!', 'Warning');
            return back();
        } else {
            return redirect()->route('admin.401');
        }
    }
}
