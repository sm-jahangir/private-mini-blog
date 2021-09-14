<div class="col-lg-4 col-md-6 widget-area">
    <!-- Widget : Latest Post -->
    <aside class="widget widget_latestposts">
        <h3 class="widget-title">Popular Posts</h3>
        @foreach ($populars as $popular)
            <div class="latest-content">
                <a href="{{ route('index.show', $popular->slug) }}" title="Recent Posts"><i><img style="width: 100px;height:80px" src="{{ asset('images/thumbnail').'/'.$popular->image }}" class="wp-post-image"
                            alt="blog-1" /></i></a>
                <h5><a title="Beautiful Landscape View of Rio de Janeiro" href="{{ route('index.show', $popular->slug) }}">{{ $popular->title }}</a></h5>
                <span><a href="#">{{ $popular->created_at->diffForHumans() }}</a></span>
            </div>
        @endforeach
    </aside><!-- Widget : Latest Post /- -->
    <!-- Widget : Categories -->
    <aside class="widget widget_categories text-center">
        <h3 class="widget-title">Categories</h3>
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ route('index.categorybypost', $category->slug) }}" title="Nature">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </aside><!-- Widget : Categories /- -->
    <!-- Widget : Instagram -->
    <aside class="widget widget_instagram">
        <h3 class="widget-title">Instagram</h3>
        <ul>
            @foreach ($instagramimage as $item)
                <li><a href="{{$item->slider_link}}"><img style="width: 111px;height:111px;" src="{{asset('images/instagram').'/'.$item->image}}" alt="Instagram" /></a></li>
            @endforeach
        </ul>
    </aside><!-- Widget : Instagram /- -->
    <!-- Widget : Follow Us -->
    <aside class="widget widget_social">
        <h3 class="widget-title">FOLLOW US</h3>
        <ul>
            @foreach ($socialslink as $item)
                <li><a href="{{$item->fb_link}}" title="Facebook"> {!! html_entity_decode($item->fb_link_icon) !!}</a></li>
                <li><a href="{{$item->twtter_link}}" title="Twitter">{!! html_entity_decode($item->twtter_link_icon) !!}</a></li>
                <li><a href="{{$item->instagram_link}}" title="Instagram">{!! html_entity_decode($item->instagram_link_icon) !!}</a></li>
                <li><a href="{{$item->googleplus_link}}" title="Google Plus">{!! html_entity_decode($item->googleplus_link_icon) !!}</a></li>
                <li><a href="{{$item->pinterest_link}}" title="Pinterest">{!! html_entity_decode($item->pinterest_link_icon) !!}</a></li>
                <li><a href="{{$item->vimeo_link}}" title="Vimeo">{!! html_entity_decode($item->vimeo_link_icon) !!}</a></li>
            @endforeach 
        </ul>
    </aside><!-- Widget : Follow Us /- -->
    <!-- Widget : Newsletter -->
    <aside class="widget widget_newsletter">
        <h3 class="widget-title">Newsletter</h3>
        <div class="newsletter-box">
            <i class="ion-ios-email-outline"></i>
            <h4>Sign Up for Newsletter</h4>
            <p>Sign up to receive latest posts and news </p>
            <form action="{{route('newsletter.store')}}" method="POST">
                @csrf
                <input type="text" name="email" class="form-control" placeholder="Your email address" />
                <input type="submit" value="Subscribe Now" />
            </form>
        </div>
    </aside><!-- Widget : Newsletter /- -->
    <!-- Widget : Tags -->
    <aside class="widget widget_tags_cloud">
        <h3 class="widget-title">Tags</h3>
        <div class="tagcloud">
            @foreach ($tags as $tag)
                <a href="{{ route('index.tagbypost', $tag->slug) }}" title="{{$tag->name}}">{{$tag->name}}</a>
            @endforeach
        </div>
    </aside><!-- Widget : Tags /- -->
</div><!-- Widget Area /- -->
