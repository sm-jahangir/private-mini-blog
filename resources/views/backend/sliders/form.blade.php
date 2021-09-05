@extends('layouts.backend.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Slider Page</li>
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
                    <h3 class="card-title">{{ __((isset($slider) ? 'Edit' : 'Slider Create') . ' Page') }}</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ isset($slider) ? route('admin.slider.update',$slider->id) : route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @isset($slider)
                    @method('PUT')
                    @endisset
                    <div style="margin: 20px 60px 10px 60px" class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h3 class="card-title">{{ __((isset($slider) ? 'Edit' : 'Frame One') . ' Page') }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="SliderINput">Slider Title</label>
                                    <input type="text" name="title1"
                                        value="{{ isset($slider) ? $slider->title1 : old('title1') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Category</label>
                                    <input type="text" name="slider_category1"
                                        value="{{ isset($slider) ? $slider->category_name1 : old('slider_category1') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Link</label>
                                    <input type="text" name="slider_link1"
                                        value="{{ isset($slider) ? $slider->post_link1 : old('slider_link1') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Image</label>
                                    <input type="file" name="image1" class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                    @if (isset($slider) ? $slider : '')
                                        <img style="width: 100px" src="{{ asset('images/slider').'/' .$slider->image1 }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div style="margin: 20px 60px 10px 60px" class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __((isset($slider) ? 'Edit' : 'Frame Two') . ' Page') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="SliderINput">Slider Title</label>
                                    <input type="text" name="title2"
                                        value="{{ isset($slider) ? $slider->title2 : old('title2') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Category</label>
                                    <input type="text" name="slider_category2"
                                        value="{{ isset($slider) ? $slider->category_name2 : old('slider_category2') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Link</label>
                                    <input type="text" name="slider_link2"
                                        value="{{ isset($slider) ? $slider->post_link2 : old('slider_link2') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Image</label>
                                    <input type="file" name="image2" class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                    @if (isset($slider) ? $slider : '')
                                        <img style="width: 100px" src="{{ asset('images/slider').'/' .$slider->image2 }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div style="margin: 20px 60px 10px 60px" class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __((isset($slider) ? 'Edit' : 'Frame Three') . ' Page') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="SliderINput">Slider Title</label>
                                    <input type="text" name="title3"
                                        value="{{ isset($slider) ? $slider->title3 : old('title3') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Category</label>
                                    <input type="text" name="slider_category3"
                                        value="{{ isset($slider) ? $slider->category_name3 : old('slider_category3') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Link</label>
                                    <input type="text" name="slider_link3"
                                        value="{{ isset($slider) ? $slider->post_link3 : old('slider_link3') }}" required
                                        class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                </div>
                                <div class="form-group">
                                    <label for="SliderINput">Slider Image</label>
                                    <input type="file" name="image3" class="form-control" id="SliderINput" placeholder="Enter your slider Name">
                                    @if (isset($slider) ? $slider : '')
                                        <img style="width: 100px" src="{{ asset('images/slider').'/' .$slider->image3 }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{-- <a name="" id="" class="btn btn-primary" href="#" type="submit" role="button">Submit</a> --}}
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>


                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
