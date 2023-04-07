@extends('layouts.front')

@section('content')
<div class="header_top home4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-5">

            </div>
            <div class="col-lg-7 col-xl-7">
                <ul class="sign_up_btn home4 dn-smd text-right">
                    <li class="list-inline-item">
                        <a href="{{ route('login') }}" class="btn btn-md">
                            <i class="flaticon-user"></i>
                            <span class="dn-md">Login/Register</span>
                        </a>
                    </li>
                </ul>
                <!-- Button trigger modal -->
            </div>
        </div>
    </div>
</div>
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_four navbar-scrolltofixed stricky main-menu">
    <div class="container">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="front/images/header-logo.png" alt="header-logo.png">
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
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="last">
                    <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
                </li>

                <li class="last">
                    <a href="{{ route('about-us') }}"><span class="title">About Is</span></a>
                </li>

                <li class="list_four">
                    <a href="{{ route('blog') }}"><span class="title">Blog</span></a>
                </li>
                <li class="list_three">
                    <a href="{{ route('events') }}"><span class="title">Events</span></a>
                </li>
                <li class="list_two">
                    <a href="{{ route('school') }}"><span class="title">Schools</span></a>
                </li>
                <li class="list_one">
                    <a href="{{ route('home') }}"><span class="title">Home</span></a>
                </li>
        </nav>
        <!-- End of Responsive Menu -->
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
                        <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger"
                            href="#">
                            <div id="search-button"><i class="flaticon-magnifying-glass"></i></div>
                        </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i
                                    class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper">
                                <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Search courses..."
                                        id="mk-fullscreen-search-input">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input
                                            value="" type="submit"></i>
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

<!--Video Section-->
<section id="maximage1" class="maximage-home home-four p0">
    <div class="container-fluid p0">
        <!-- Basic HTML -->
        <div id="maximage">
            <div class="first-item">
                <img src="{{ asset('front/images/home/5.jpg') }}" alt="5.jpg" />
            </div>
            <div class="second-item">
                <img src="{{ asset('front/images/home/4.jpg') }}" alt="4.jpg" />
            </div>
            <div class="fourth-item">
                <img src="{{ asset('front/images/home/5.jpg') }}" alt="5.jpg" />
            </div>
        </div>
        <div class="maxslider-content">
            <div class="lbox-caption">
                <div class="lbox-details">
                    <div class="maxtext">
                        <h1>MORE THAN 100+ Schools</h1>
                        <p>Own your future learning by making the right CHOICE!!!</p>
                        <div class="search_box_home4">
                            <div class="ht_search_widget">
                                <div class="header_search_widget">
                                    <form class="form-inline mailchimp_form">
                                        <input type="email" class="form-control mb-2 mr-sm-2"
                                            name="emailaddress"
                                            placeholder="Search for the School you wish to enroll in">
                                        <button type="submit" class="btn btn-primary mb-2"><span
                                                class="flaticon-magnifying-glass"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video Section Ends Here-->
<div class="top_courses_iconbox">
    <div class="container">
        <div class="row row_home4">
            <div class="col-sm-6 col-lg-3">
                <div class="home_icon_box home4">
                    <div class="icon"><span class="flaticon-pencil"></span></div>
                    <p>School <br> Over 100 School</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="home_icon_box home4">
                    <div class="icon"><span class="flaticon-student-1"></span></div>
                    <p>Countries <br> Over 50 Countries</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="home_icon_box home4">
                    <div class="icon"><span class="flaticon-photo-camera"></span></div>
                    <p>Users <br> Over 800 Users</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="home_icon_box home4">
                    <div class="icon"><span class="flaticon-medal"></span></div>
                    <p>Success Stories <br> Over 200</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top Courses -->
<section id="top-courses" class="top_cours">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Browse Our Top Schools</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="options" class="alpha-pag full">
                    <div class="option-isotop">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <li class="list-inline-item"><a href="schools.html" data-option-value="*"
                                    class="selected">Featured Schools</a></li>
                        </ul>
                    </div>
                </div><!-- FILTER BUTTONS -->
                <div class="emply-text-sec">
                    <div class="row" id="masonry_abc">
                        <div class="col-md-6 col-lg-4 col-xl-3 business design">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('front/images/courses/t1.jpg') }}" alt="t1.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="schools-single.html">Find Out
                                            More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>STC Higher Education</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t2.jpg" alt="t2.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>University Of Malta (UOM)</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 web design">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t3.jpg" alt="t3.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>London</p>
                                        <h5>Middlesex University</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 business Web">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t4.jpg" alt="t4.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Choice</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>London</p>
                                        <h5>University Of Wolverhampton</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t5.jpg" alt="t5.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Choice</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>SMC Business School</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t6.jpg" alt="t6.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Choice</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>London School of Commerce</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 design Web">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t7.jpg" alt="t7.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>College of Arts, Science and Technology</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 business">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t8.jpg" alt="t8.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>Gateway School Of English</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_home3_shape_container">
                    <div class="about_home4_shape4"><img src="front/images/about/shape4.png" alt="shape4.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about4 home4 -->
<section class="home4_about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="about_home3">
                    <h3>What We Do</h3>
                    <h5>Simplifying the admissions process for students.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    <a href="about.html" class="btn about_btn_home3">View More</a>

                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box five">
                            <div class="icon"><span class="flaticon-account"></span></div>
                            <div class="details">
                                <h4>Search School</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box two">
                            <div class="icon"><span class="flaticon-online"></span></div>
                            <div class="details">
                                <h4>Get Information</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box six">
                            <div class="icon"><span class="flaticon-student-1"></span></div>
                            <div class="details">
                                <h4>Interact</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box seven">
                            <div class="icon"><span class="flaticon-employee"></span></div>
                            <div class="details">
                                <h4>Achieve Your Goals</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_home3_shape_container">
                    <div class="about_home3_shape"><img src="front/images/about/shape1.png" alt="shape1.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog -->
<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0"><a href="blog.html">Blog</a></h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_post_slider_home4">
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="front/images/blog/h41.jpg" alt="h41.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2023</p>
                                    <p class="date">January 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4><a href="blog-single.html">Why Study in Malta?</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                    molestiae quas vel commodi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="front/images/blog/h42.jpg" alt="h42.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2023</p>
                                    <p class="date">January 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Marketing</h5>
                                <h4>11 Tips to Help You Make the Right Choice</h4>
                                <p>Think back over your life. Think about the people that had a positive
                                    influence on Far much that one rank beheld.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="front/images/blog/h43.jpg" alt="h43.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2023</p>
                                    <p class="date">January 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4>What students need to know!</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                    molestiae quas vel commodi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="front/images/blog/h42.jpg" alt="h42.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2023</p>
                                    <p class="date">January 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4>Achiving your Goals</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                    molestiae quas vel commodi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="our-testimonials bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">What People Say</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial_slider_home3">
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="front/images/testimonial/1.jpg" alt="1.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Student - STC</p>
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                        mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                        voluptatum…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="front/images/testimonial/2.jpg" alt="2.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Student - UOM</p>
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                        mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                        voluptatum…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="front/images/testimonial/3.jpg" alt="3.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Student STC</p>
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                        mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                        voluptatum…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="front/images/testimonial/4.jpg" alt="4.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Student - UOM</p>
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                        mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                        voluptatum…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="front/images/testimonial/5.jpg" alt="5.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Student - STC</p>
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                        mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                        voluptatum…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Footer Bottom Area -->
@include('frontend.partials._footer')

{{-- <a class="scrollToHome home4" href="#"><i class="flaticon-up-arrow-1"></i></a> --}}
@endsection
