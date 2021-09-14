<!-- Footer Main -->
<footer class="container-fluid no-left-padding no-right-padding footer-main footer-section1">
    <div class="container-fluid no-left-padding no-right-padding subscribe-block">
        <!-- Container -->
        <div class="container">
            <h3>Subscribe</h3>
            <p>Subscribe to a newsletter to receive latest post and updates</p>
            <form class="newsletter" action="{{route('newsletter.store')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="enter your email address here">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">subscribe</button>
                    </span>
                </div>
            </form>
        </div><!-- Container /- -->
    </div>
    <!-- Instagram -->
    <div class="container-fluid no-left-padding no-right-padding instagram-block">
        <ul class="instagram-carousel">
            @foreach ($instagramsliders as $slider)
                <li><a href="{{$slider->slider_link}}"><img src="{{ asset('images/instagram').'/'.$slider->image }}" alt="Instagram" /></a></li>
            @endforeach
        </ul>
    </div><!-- Instagram /- -->
    <!-- Container -->
    <div class="container">
        <ul class="ftr-social">
            @foreach ($socialslink as $item)
                <li><a href="{{$item->fb_link}}" title="Facebook"> {!! html_entity_decode($item->fb_link_icon) !!} Facebook</a></li>
                <li><a href="{{$item->twtter_link}}" title="Twitter">{!! html_entity_decode($item->twtter_link_icon) !!}twitter</a></li>
                <li><a href="{{$item->instagram_link}}" title="Instagram">{!! html_entity_decode($item->instagram_link_icon) !!}Instagram</a></li>
                <li><a href="{{$item->googleplus_link}}" title="Google Plus">{!! html_entity_decode($item->googleplus_link_icon) !!}Google plus</a></li>
                <li><a href="{{$item->pinterest_link}}" title="Pinterest">{!! html_entity_decode($item->pinterest_link_icon) !!}pinterest</a></li>
                <li><a href="{{$item->youtube_link}}" title="Youtube">{!! html_entity_decode($item->youtube_link_icon) !!}youtube</a></li>
            @endforeach 
        </ul>
        <div class="copyright">
            <p>Copyright @ 2017 MINIBLOG</p>
        </div>
    </div><!-- Container /- -->
</footer><!-- Footer Main /- -->
