@extends('layouts.backend.app')
@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/select2/css/select2.min.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.css">
<style>
    .note-editable {
        height: 300px;
    }
</style>
@endpush
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Page Page</li>
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
            <form action="{{ isset($page) ? route('admin.page.update',$page->id) : route('admin.page.store')}}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @isset($page)
                @method('PUT')
                @endisset
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __((isset($page) ? 'Edit' : 'Page Create') . ' Page') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="PageINput">Page Title</label>
                                    <input type="text" name="title"
                                        value="{{ isset($page) ? $page->title : old('title') }}" required
                                        class="form-control" id="PageINput" placeholder="Enter your page Name">
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Page Excerpt</label>
                                    <textarea class="form-control" name="excerpt" id="excerpt" rows="3">{{ isset($page) ? $page->excerpt : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Page Content</label>
                                    <textarea name="body" id="summernote">
                                        @isset($page)
                                        {{$page->body ? $page->body : '' }}
                                        @endisset
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Featured Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @isset($page)
                                        <img style="width: 100px; height:100px" src="{{asset('storage/page/').'/'.$page->image}}" alt="Image">
                                    @endisset
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning ml-2">Reset</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-default">
                            <div class="card-header">
                                <h6 class="card-title">Publish</h6>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a type="submit" class="btn btn-info" href="#" role="button">Save</a>
                                <a type="submit" class="btn btn-success" href="#" role="button">Save Edit</a>
                                <!-- /.row -->
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h6 class="card-title">Status</h6>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <select name="status" class="custom-select">
                                        <option 
                                        @isset($page)
                                            {{$page->status == true ? 'selected' : ''}}
                                        @endisset
                                        value="1">Active</option>
                                        <option 
                                        @isset($page)
                                            {{$page->status == false ? 'selected' : ''}}
                                        @endisset
                                        value="0">Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Meta Keywords</h6>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                  <textarea class="form-control" name="meta_keywords" id="" rows="3">@isset($page){{$page->meta_keywords ? $page->meta_keywords : '' }}@endisset</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Meta Description</h6>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                  <textarea class="form-control" name="meta_description" id="" rows="3">@isset($page){{$page->meta_description ? $page->meta_description : '' }}@endisset</textarea>
                                  {{-- @isset($page)
                                  {{$page->meta_description ? $page->meta_description : '' }}
                                  @endisset --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
@push('js')
<!-- Select2 -->
<script src="{{asset('backend')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>



<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })

    $(function () {
        // Summernote
        $('#summernote').summernote()
    })
</script>
@endpush
