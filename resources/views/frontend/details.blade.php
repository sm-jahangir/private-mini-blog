@extends('layouts.app')
@section('frontend-maincontent')
<main class="site-main">
    <!-- Page Content -->
    <div class="container-fluid no-left-padding no-right-padding page-content blog-single">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Content Area -->
                <div class="col-xl-8 col-lg-8 col-md-6 col-12 content-area">
                    <article class="type-post">
                        <div class="entry-cover">
                            <img src="{{ asset('images/thumbnail').'/'.$post->image }}" alt="Post" />
                        </div>
                        <div class="entry-content">
                            <div class="entry-header">
                                @foreach ($post->categories as $category)
                                    
                                <span class="post-category"><a href="#" title="{{$category->name}}">{{$category->name}},</a></span>
                                @endforeach
                                <h3 class="entry-title">{{$post->title}}</h3>
                                <div class="post-meta">
                                    <span class="byline">by <a href="#" title="Indesign">inDesign</a></span>
                                    <span class="post-date">{{$post->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            {!! html_entity_decode($post->body) !!}

                                <div class="entry-footer">
                                <div class="tags">
                                    @foreach ($single_post_tags as $tag)
                                    <a href="#" title="Fashion"># {{$tag->name}}</a>
                                    @endforeach
                                </div>
                                <ul class="social">
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- About Author -->
                    <div class="about-author-box">
                        <div class="author">
                            <i><img src="http://via.placeholder.com/170x170" alt="Author" /></i>
                            <h4>{{$post->user->name}}</h4>
                            <p>Author bio To take a trivial example, which of us ever undertakes laborious physical
                                exercise, except to obtain some advantage from it? But who has any right to find
                                fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences.</p>
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- About Author /- -->
                    <!-- Related Post -->
                    <div class="related-post">
                        <h3>You May Also Like</h3>
                        <div class="related-post-block">
                            @foreach ($related as $post)
                                <div class="related-post-box">
                                    <a href="{{ route('index.show', $post->slug) }}"><img src="{{ asset('images/thumbnail').'/'.$post->image }}" alt="{{$post->title}}" /></a>
                                    @foreach ($post->categories as $category)
                                        <span><a href="{{ route('index.show', $post->slug) }}" title="{{$category->name}}">{{$category->name}}</a></span>
                                    @endforeach
                                    <h3><a href="{{ route('index.show', $post->slug) }}" title="{{$post->title}}">{{$post->title}}</a></h3>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- Related Post /- -->
                    <!-- Comment Area -->
                    <div class="comments-area">

                    @if ($post->comments->count() <= 1)
                        <h2 class="comments-title">{{ $post->comments->count() }} Comment</h2>
                    @else
                        <h2 class="comments-title">{{ $post->comments->count() }} Comments</h2>
                    @endif





                    @if ($post->comments->count() > 0)
                        <ol class="comment-list">
                            @foreach ($post->comments as $comment)
                                <li
                                    class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img alt="img" src="http://via.placeholder.com/80x80"
                                                    class="avatar avatar-72 photo" />
                                                <b class="fn">{{ $comment->user->name }}</b>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">{{ $comment->created_at->diffForHumans() }}</a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ol><!-- comment-list /- -->
                    @else
                        <p>No Comment Yet, Be the First :)</p>
                    @endif
                        <!-- Comment Form -->
                        <div class="comment-respond">
                            <h2 class="comment-reply-title">Leave a Reply</h2>

                            @guest
                                <form method="post" class="comment-form">
                                    <p class="comment-form-author">
                                        <input id="author" name="author" placeholder="Name" size="30" maxlength="245"
                                            required="required" type="text" />
                                    </p>
                                    <p class="comment-form-email">
                                        <input id="email" name="email" placeholder="Email" required="required"
                                            type="email" />
                                    </p>
                                    <p class="comment-form-url">
                                        <input id="url" name="url" placeholder="Website" required="required" type="url" />
                                    </p>
                                    <p class="comment-form-comment">
                                        <textarea id="comment" name="comment" placeholder="Enter your comment here..."
                                            rows="8" required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" class="submit" value="Post Comment" type="submit" />
                                    </p>
                                </form>
                            @else
                                <form method="post" action="{{ route('comment.store', $post->id) }}" class="comment-form">
                                    @csrf
                                    <p class="comment-form-comment">
                                        <textarea id="comment" name="comment" placeholder="Enter your comment here..."
                                            rows="8" required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" class="submit" value="Post Comment" type="submit" />
                                    </p>
                                </form>
                            @endguest
                        </div><!-- Comment Form /- -->
                    </div><!-- Comment Area /- -->
                </div><!-- Content Area /- -->
                <!-- Widget Area -->
                    <x-frontend.sidebar />
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Content /- -->

</main>
@endsection
