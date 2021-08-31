@extends('layouts.backend.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category Page</li>
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
                    <h3 class="card-title">{{ __((isset($category) ? 'Edit' : 'Category Create') . ' Page') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ isset($category) ? route('admin.category.update',$category->id) : route('admin.category.store')}}" method="POST">
                    @csrf
                    @isset($category)
                        @method('PUT')
                    @endisset
                    <div class="card-body">
                        <div class="form-group">
                            <label for="CategoryINput">Category Name</label>
                            <input type="text" name="name" value="{{ isset($category) ? $category->name : old('name') }}" required class="form-control" id="CategoryINput" placeholder="Enter your category Name">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" checked name="status" value="1" class="form-check-input" id="StatusCheck">
                            <label class="form-check-label" for="StatusCheck">Status</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning ml-2">Reset</button>
                    </div>
                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
