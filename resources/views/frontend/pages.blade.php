@extends('layouts.app')
@section('frontend-maincontent')
<main class="site-main">
    <!-- Page Content -->
    <div class="container-fluid no-left-padding no-right-padding page-content blog-single">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Content Area -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 content-area">
                    <article class="type-post">
                        <div class="entry-cover">
                            <img src="{{ asset('storage/page').'/'.$page->image }}" alt="Post" />
                        </div>
                        <div class="entry-content">
                            <div class="entry-header">
                                <h3 class="entry-title">{{$page->title}}</h3>
                            </div>
                            {!! html_entity_decode($page->body) !!}
                        </div>
                    </article>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Content /- -->

</main>
@endsection
