@extends('layouts.backend.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">User Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __((isset($user) ? 'User Updated' : 'User Registrations')) }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ isset($user) ? route('admin.user.update',$user->id) : route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                    @isset($user)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ isset($user) ? $user->username : old('username') }}" required id="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @isset($user)
                                <img style="width: 100px; height:100px" src="{{asset('storage/user/').'/'.$user->image}}" alt="Image">
                            @endisset
                        </div>
                        <div class="form-group">
                            <label>Select Any Role</label>
                            <select name="roles[]" class="form-control">
                                @foreach ($roles as $role)
                                    <option
                                        @isset($user)
                                                
                                        @foreach ($user->roles as $userrole)
                                        {{ $userrole->id == $role->id ? 'selected' : '' }}
                                        @endforeach

                                        @endisset
                                    value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                          </div>
                          @isset($user)
                            @else
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="confirm_password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            @endisset
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
