@extends('layouts.app')
@section('frontend-maincontent')

<main class="site-main">

     <h2 class="text-center">Search For: {{ $query }}</h2>
    <!-- Page Content -->
    <div class="container-fluid no-left-padding no-right-padding page-content">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Content Area -->
                <div class="col-lg-8 col-md-6 content-area">

                    @if ($posts->count() > 0)
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
                                        <span class="post-date"><a
                                                href="#">{{$post->created_at->diffForHumans()}}</a></span>
                                    </div>
                                    <a href="{{ route('index.show', $post->slug) }}"><img
                                            src="{{ asset('images/thumbnail').'/'.$post->image }}" alt="Post" /></a>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <span class="post-category"><a href="#" title="Technology">
                                                @foreach ($post->categories as $category)
                                                {{$category->name}}
                                                @endforeach
                                            </a></span>
                                        <h3 class="entry-title"><a href="{{ route('index.show', $post->slug) }}"
                                                title="Traffic Jams Solved">{{$post->title}} </a></h3>
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
                                {{ $posts->links('frontend.paginator') }}
                            </div>
                        </nav><!-- Pagination /- -->

                    @else
                    <h1>No More Content:)</h1>
                    @endif
                </div><!-- Content Area /- -->
                <!-- Widget Area -->
                    <x-frontend.sidebar />
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Content /- -->

</main>
@endsection
