@extends('layouts.app')
@section('frontend-maincontent')
        
    <main class="site-main">

        <h1>Test Blog Content</h1>
        name: {{$post->title}}
        categories: 
        @foreach ($post->categories as $category)
            {{$category->name}}
        @endforeach

    </main>
@endsection
