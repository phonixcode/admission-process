@extends('layouts.front')

@section('content')
    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="{{ asset('front/images/header-logo.png') }}"
                        alt="header-logo.png">
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
            </nav>
        </div>
    </header>


    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2">
                    <img class="nav_logo_img img-fluid float-left mt20" src="{{ asset('front/images/header-logo.png') }}"
                        alt="header-logo.png">
                    <span>MSG</span>
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
        </div>

        <!-- Inner Page Breadcrumb -->
        <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">@yield('title')</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @yield('content-auth')

        <!-- Our Footer Bottom Area -->
        <section class="footer_bottom_area pt25 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright My School Guide © {{ Date('Y') }}. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
