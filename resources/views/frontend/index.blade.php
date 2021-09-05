@extends('layouts.app')
@section('frontend-maincontent')
        
    <main class="site-main">

        <!-- Slider Section -->
        <div class="container-fluid no-left-padding no-right-padding slider-section slider-section2">
            <!-- Container -->
            <div class="container">
                <div id="slider-section2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-8 col-sm-12 post-block post-big">
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Travel">Travel</a></span>
                                            <h3><a href="#" title="Best Surfing Spots for Beginners and Advanced">Best
                                                    Surfing Spots for Beginners and Advanced</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 post-block post-thumb">
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Sport">Sport</a></span>
                                            <h3><a href="#" title="High-Tech Prototype Bike Announced">High-Tech
                                                    Prototype Bike Announced</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Nature">Nature</a></span>
                                            <h3><a href="#" title="White Sand of The Desert Discovery">White Sand of
                                                    The Desert Discovery</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 post-block post-big">
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Travel">Travel</a></span>
                                            <h3><a href="#" title="Best Surfing Spots for Beginners and Advanced">Best
                                                    Surfing Spots for Beginners and Advanced</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 post-block post-thumb">
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Sport">Sport</a></span>
                                            <h3><a href="#" title="High-Tech Prototype Bike Announced">High-Tech
                                                    Prototype Bike Announced</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                    <div class="post-box">
                                        <img src="http://via.placeholder.com/770x500" alt="Slide" />
                                        <div class="entry-content">
                                            <span class="post-category"><a href="#" title="Nature">Nature</a></span>
                                            <h3><a href="#" title="White Sand of The Desert Discovery">White Sand of
                                                    The Desert Discovery</a></h3>
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container -->
        </div><!-- Slider Section /- -->

        <!-- Trending Section -->
        <div class="container-fluid no-left-padding no-right-padding trending-section">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Trending</h3>
                </div><!-- Section Header /- -->
                <div class="trending-carousel">
                    @foreach ($trendings as $trending)
                        <div class="type-post">
                            <div class="entry-cover"><a href="{{ route('index.show', $trending->slug) }}"><img src="{{ asset('images/thumbnail').'/'.$trending->image }}"
                                        alt="Trending" /></a></div>
                            <div class="entry-content">
                                <div class="entry-header">
                                    @foreach ($trending->categories as $category)
                                        <span><a href="#" title="{{$category->name}}">{{$category->name}}</a></span>
                                    @endforeach   
                                    <h3 class="entry-title"><a href="{{ route('index.show', $trending->slug) }}">{{ $trending->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- Container /- -->
        </div><!-- Trending Section /- -->
        <!-- Page Content -->
        <div class="container-fluid no-left-padding no-right-padding page-content">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Content Area -->
                    <div class="col-lg-8 col-md-6 content-area">
                        <!-- Row -->
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-6 col-md-12 col-sm-6">
                                    <div class="type-post">
                                        <div class="entry-cover">
                                            <div class="post-meta">
                                                <span class="byline">by <a href="#" title="Indesign">
                                                    @foreach ($post->tags as $tag)
                                                        {{$tag->name}}
                                                    @endforeach
                                                    </a></span>
                                                <span class="post-date"><a href="#">{{$post->created_at->diffForHumans()}}</a></span>
                                            </div>
                                            <a href="{{ route('index.show', $post->slug) }}"><img src="{{ asset('images/thumbnail').'/'.$post->image }}" alt="Post" /></a>
                                        </div>
                                        <div class="entry-content">
                                            <div class="entry-header">
                                                <span class="post-category"><a href="#" title="Technology">
                                                    @foreach ($post->categories as $category)
                                                        {{$category->name}}
                                                    @endforeach    
                                                </a></span>
                                                <h3 class="entry-title"><a href="{{ route('index.show', $post->slug) }}" title="Traffic Jams Solved">{{$post->title}} </a></h3>
                                            </div>
                                            <p>{{$post->excerpt}}</p>
                                            <a href="{{ route('index.show', $post->slug) }}" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- Row /- -->
                        <!-- Pagination -->
                        <nav class="navigation pagination">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">Previous</a>
                                <span class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>1
                                </span>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page
                                    </span>2</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page
                                    </span>3</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page
                                    </span>...</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page
                                    </span>6</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </div>
                        </nav><!-- Pagination /- -->
                    </div><!-- Content Area /- -->
                    <!-- Widget Area -->
                    @include('frontend.partials.sidebar')
                </div>
            </div><!-- Container /- -->
        </div><!-- Page Content /- -->

    </main>
@endsection