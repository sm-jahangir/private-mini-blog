<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->

<!-- Header Section -->
<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s7">
    <!-- SidePanel -->
    <div id="slidepanel-4" class="slidepanel">
        <!-- Top Header -->
        <div class="container-fluid no-right-padding no-left-padding top-header">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <ul class="top-social">
                            @foreach ($socialslink as $item)
                                <li><a href="{{$item->fb_link}}" title="Facebook"> {!! html_entity_decode($item->fb_link_icon) !!}</a></li>
                                <li><a href="{{$item->twtter_link}}" title="Twitter">{!! html_entity_decode($item->twtter_link_icon) !!}</a></li>
                                <li><a href="{{$item->instagram_link}}" title="Instagram">{!! html_entity_decode($item->instagram_link_icon) !!}</a></li>
                            @endforeach 
                        </ul>
                    </div>
                    <div class="col-lg-4 logo-block">
                        @if ($logos)
                        <a href="{{url('/')}}" title="Logo">
                            @foreach ($logos as $logo)
                            <img style="max-width: 134px; max-height:58px;" src="{{asset('images/logo'.'/'.$logo->logo)}}" alt="">
                            @endforeach
                        </a>
                        @endif
                    </div>
                    <div class="col-lg-4 col-6">
                        <ul class="top-right user-info">
                            <li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i
                                        class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"><i class="pe-7s-user"></i></a>
                                <ul class="dropdown-menu">
                                    @guest
                                        <li><a class="dropdown-item" href="{{route('login')}}" title="Sign In">Sign In</a></li>
                                        <li><a class="dropdown-item" href="#" title="Subscribe">Subscribe </a></li>
                                        <li><a class="dropdown-item" href="{{route('register')}}" title="Registration">Registration</a></li>
                                    @else
                                        <li><a class="dropdown-item" href="{{route('home')}}" title="Sign In">Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Registration">Sign out</a></li>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endguest
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->
    </div><!-- SidePanel /- -->

    <!-- Container -->
    <div class="container">
        <!-- Menu Block -->
        <div class="container-fluid no-left-padding no-right-padding menu-block">
            <nav class="navbar ownavigation navbar-expand-lg">
                <a class="navbar-brand" href="index.html">Mini :: Blog</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbar7" aria-controls="navbar7" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar7">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" title="Home" href="{{url('/')}}">Home</a>
                        </li>
                        @foreach ($pages as $page)
                        <li>
                            <a class="nav-link" title="Posts" href="{{$page->id}}">{{$page->title}}</a>
                        </li>
                        @endforeach
                        <li>
                            <a class="nav-link" title="About Us" href="{{url('about-us')}}">About Us</a>
                        </li>
                        <li><a class="nav-link" title="Contact" href="{{url('contact-us')}}">Contact</a></li>
                    </ul>
                </div>
                <div id="loginpanel-4" class="desktop-hide">
                    <div class="right toggle" id="toggle-4">
                        <a id="slideit-4" class="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                        <a id="closeit-4" class="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                    </div>
                </div>
            </nav>
        </div><!-- Menu Block /- -->
    </div><!-- Container /- -->
    <!-- Search Box -->
    <div class="search-box collapse" id="search-box">
        <div class="container">
            <form action="{{ route('blog.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="query" placeholder="Search..." required>
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div><!-- Search Box /- -->
</header><!-- Header Section /- -->
