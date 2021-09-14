@extends('layouts.backend.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Social Link</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Social Link Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($socials as $social)
                                <form action="{{route('admin.social.store')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="FacebookLink"><i class="fas fa-check"></i>
                                                    Facebook
                                                    Link</label>
                                                <input type="text" name="fb_link" value="{{$social->fb_link}}" class="form-control is-valid"
                                                    id="FacebookLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="FacebookLink"><i class="fas fa-check"></i>
                                                    Facebook Icon</label>
                                                <input type="text" name="fb_link_icon" value="{{$social->fb_link_icon}}" class="form-control is-valid"
                                                    id="FacebookLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="TwitterLink"><i class="fas fa-check"></i> Twitter
                                                    Link</label>
                                                <input type="text" name="twtter_link" value="{{$social->twtter_link}}" class="form-control is-valid" id="TwitterLink"
                                                    placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="TwitterLink"><i class="fas fa-check"></i> Twitter Icon</label>
                                                <input type="text" name="twtter_link_icon" value="{{$social->twtter_link_icon}}" class="form-control is-valid" id="TwitterLink"
                                                    placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="LinkedinLink"><i class="fas fa-check"></i>
                                                    Linkedin
                                                    Link</label>
                                                <input type="text" name="linkedin_link" value="{{$social->linkedin_link}}" class="form-control is-valid"
                                                    id="LinkedinLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="LinkedinLink"><i class="fas fa-check"></i>
                                                    Linkedin Icon</label>
                                                <input type="text" name="linkedin_link_icon" value="{{$social->linkedin_link_icon}}" class="form-control is-valid"
                                                    id="LinkedinLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="YouTubeLink"><i class="fas fa-check"></i> YouTube
                                                    Link</label>
                                                <input type="text" name="youtube_link" value="{{$social->youtube_link}}" class="form-control is-valid"
                                                    id="YouTubeLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="YouTubeLink"><i class="fas fa-check"></i> YouTube Icon</label>
                                                <input type="text" name="youtube_link_icon" value="{{$social->youtube_link_icon}}" class="form-control is-valid"
                                                    id="YouTubeLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="InstagramLink"><i class="fas fa-check"></i>
                                                    Instagram Link</label>
                                                <input type="text" name="instagram_link" value="{{$social->instagram_link}}" class="form-control is-valid"
                                                    id="InstagramLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="InstagramLink"><i class="fas fa-check"></i>
                                                    Instagram Icon</label>
                                                <input type="text" name="instagram_link_icon" value="{{$social->instagram_link_icon}}" class="form-control is-valid"
                                                    id="InstagramLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="GooglePlus"><i class="fas fa-check"></i> Google
                                                    Plus</label>
                                                <input type="text" name="googleplus_link" value="{{$social->googleplus_link}}" class="form-control is-valid"
                                                    id="GooglePlus" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="GooglePlus"><i class="fas fa-check"></i> Google Icon</label>
                                                <input type="text" name="googleplus_link_icon" value="{{$social->googleplus_link_icon}}" class="form-control is-valid"
                                                    id="GooglePlus" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="PinterestLink"><i class="fas fa-check"></i>
                                                    Pinterest Link</label>
                                                <input type="text" name="pinterest_link" value="{{$social->pinterest_link}}" class="form-control is-valid"
                                                    id="PinterestLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="PinterestLink"><i class="fas fa-check"></i>
                                                    Pinterest Icon</label>
                                                <input type="text" name="pinterest_link_icon" value="{{$social->pinterest_link_icon}}" class="form-control is-valid"
                                                    id="PinterestLink" placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="VimeoLink"><i class="fas fa-check"></i> Vimeo
                                                    Link</label>
                                                <input type="text" name="vimeo_link" value="{{$social->vimeo_link}}" class="form-control is-valid" id="VimeoLink"
                                                    placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="col-form-label" for="VimeoLink"><i class="fas fa-check"></i> Vimeo Icon</label>
                                                <input type="text" name="vimeo_link_icon" value="{{$social->vimeo_link_icon}}" class="form-control is-valid" id="VimeoLink"
                                                    placeholder="Enter ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-muted">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
