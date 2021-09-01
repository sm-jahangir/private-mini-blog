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
                    <h1 class="m-0">Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Post Page</li>
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
            <form action="{{ isset($post) ? route('admin.post.update',$post->id) : route('admin.post.store')}}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @isset($post)
                @method('PUT')
                @endisset
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __((isset($post) ? 'Edit' : 'Post Create') . ' Page') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="PostINput">Post Title</label>
                                    <input type="text" name="title"
                                        value="{{ isset($post) ? $post->title : old('title') }}" required
                                        class="form-control" id="PostINput" placeholder="Enter your post Name">
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Post Excerpt</label>
                                    <textarea class="form-control" name="excerpt" id="excerpt" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="featured"
                                            id="featured" checked>
                                        <label class="custom-control-label" for="featured"> Is featured? </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Post Content</label>
                                    <textarea name="body" id="summernote"></textarea>
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
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="trending" class="custom-control-input"
                                                    id="trendingpost">
                                                <label class="custom-control-label" for="trendingpost">Trending
                                                    Post</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="popular" class="custom-control-input"
                                                    id="popularpost">
                                                <label class="custom-control-label" for="popularpost">Popular
                                                    Post</label>
                                            </div>
                                        </div>
                                    </div>
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
                                        <option value="1">Active</option>
                                        <option value="0">Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Format</h6>

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
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="default" name="format"
                                            checked="">
                                        <label class="form-check-label">Default</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="gallery" type="radio" name="format">
                                        <label class="form-check-label">Gallery</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="video" type="radio" name="format">
                                        <label class="form-check-label">Video</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Category</h6>

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
                                <div class="form-group" data-select2-id="29">
                                    <select name="category_id" class="select2 select2-hidden-accessible" multiple=""
                                        data-placeholder="Select Category" style="width: 100%;" data-select2-id="7"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="35">Alabama</option>
                                        <option data-select2-id="36">Alaska</option>
                                        <option data-select2-id="37">California</option>
                                        <option data-select2-id="38">Delaware</option>
                                        <option data-select2-id="39">Tennessee</option>
                                        <option data-select2-id="40">Texas</option>
                                        <option data-select2-id="41">Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Tags</h6>

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
                                <div class="form-group" data-select2-id="76">
                                    <div class="select2-purple" data-select2-id="75">
                                        <select name="tag_id" class="select2 select2-hidden-accessible" multiple=""
                                            data-placeholder="Select a Tags" data-dropdown-css-class="select2-purple"
                                            style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="78">Alabama</option>
                                            <option data-select2-id="79">Alaska</option>
                                            <option data-select2-id="80">California</option>
                                            <option data-select2-id="81">Delaware</option>
                                            <option data-select2-id="82">Tennessee</option>
                                            <option data-select2-id="83">Texas</option>
                                            <option data-select2-id="84">Washington</option>
                                    </div>
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
