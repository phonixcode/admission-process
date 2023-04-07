   <!-- Main Header Nav -->
   <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{ asset('front/images/header-logo.png') }}" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ route('home') }}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{ asset('front/images/header-logo.png') }}" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{ asset('front/images/header-logo2.png') }}" alt="header-logo2.png">
                <span>My School Guide</span>
            </a>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="{{ route('home') }}"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="{{ route('school') }}"><span class="title">Schools</span></a>
                </li>
                <li>
                    <a href="{{ route('events') }}"><span class="title">Events</span></a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}"><span class="title">About Us</span></a>
                </li>
                <li>
                <li>
                    <a href="{{ route('blog') }}"><span class="title">Blog</span></a>
                </li>
                <li class="last">
                    <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                <li class="list-inline-item list_s"><a href="{{ route('login') }}" class="btn flaticon-user"> <span class="dn-lg">Login/Register</span></a></li>
                <li class="list-inline-item list_s">

                </li>
                <li class="list-inline-item list_s">
                    <div class="search_overlay">
                        <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                        </a>
                    </div>
                </li>
            </ul><!-- Button trigger modal -->
        </nav>
    </div>
</header>

<!-- Modal Search Button Bacground Overlay -->
<div class="search_overlay dn-992">
    <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
        <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
        <div id="mk-fullscreen-search-wrapper">
            <form method="get" id="mk-fullscreen-searchform">
                <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
            </form>
        </div>
    </div>
</div>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="front/images/header-logo.png" alt="header-logo.png">
                <span>MSG<span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                        <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                        </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                    class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                                <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Search courses..."
                                        id="mk-fullscreen-search-input2">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                            type="submit"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li>
                <a href="{{ route('home') }}"><span class="title">Home</span></a>
            </li>

            <li>
                <a href="{{ route('school') }}"><span class="title">Schools</span></a>
            </li>

            <li>
                <a href="{{ route('events') }}"><span class="title">Events</span></a>
            </li>

            <li>
                <a href="{{ route('blog') }}"><span class="title">Blog</span></a>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="{{ route('register') }}"><span class="flaticon-edit"></span> Register</a></li>
        </ul>
    </nav>
</div>
