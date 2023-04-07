@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')


    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Blog</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Blog Post Content -->
    <section class="blog_post_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="main_blog_post_content">
                        <div class="row">
                            <div class="col-xl-5 pr15-xl pr0">
                                <div class="blog_grid_post mb35">
                                    <div class="thumb">
                                        <img class="img-fluid w100" src="front/images/blog/7.jpg" alt="7.jpg"><a
                                            href="blog-single.html">
                                            <div class="tag">Tips</div>
                                            <div class="post_date">
                                                <h2>28</h2> <span>DECEMBER</span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 pl15-xl pl0">
                                <div class="blog_grid_post style2 mb35">
                                    <div class="details">
                                        <h3>Learning, Friendship and Fun</h3>
                                        <ul class="post_meta">
                                            <li><a href="#"><span class="flaticon-clock"></span></a></li>
                                            <li><a href="#"><span>Admin</span></a></li>
                                            <li><a href="#"><span class="flaticon-chat"></span></a></li>
                                            <li><a href="#"><span>7 comments</span></a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 pr15-xl pr0">
                                <div class="blog_grid_post mb35">
                                    <div class="thumb">
                                        <img class="img-fluid w100" src="front/images/blog/8.jpg" alt="8.jpg">
                                        <div class="tag">Tips</div>
                                        <div class="post_date">
                                            <h2>28</h2> <span>DECEMBER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 pl15-xl pl0">
                                <div class="blog_grid_post style2 mb35">
                                    <div class="details">
                                        <h3>Why Study In Malta</h3>
                                        <ul class="post_meta">
                                            <li><a href="#"><span class="flaticon-clock"></span></a></li>
                                            <li><a href="#"><span>Admin</span></a></li>
                                            <li><a href="#"><span class="flaticon-chat"></span></a></li>
                                            <li><a href="#"><span>7 comments</span></a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 pr15-xl pr0">
                                <div class="blog_grid_post mb35">
                                    <div class="thumb">
                                        <img class="img-fluid w100" src="front/images/blog/9.jpg" alt="9.jpg">
                                        <div class="tag">News</div>
                                        <div class="post_date">
                                            <h2>28</h2> <span>DECEMBER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 pl15-xl pl0">
                                <div class="blog_grid_post style2 mb35">
                                    <div class="details">
                                        <h3>Storm in Malta</h3>
                                        <ul class="post_meta">
                                            <li><a href="#"><span class="flaticon-clock"></span></a></li>
                                            <li><a href="#"><span>Admin</span></a></li>
                                            <li><a href="#"><span class="flaticon-chat"></span></a></li>
                                            <li><a href="#"><span>7 comments</span></a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mbp_pagination mt20">
                                    <ul class="page_navigation">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                                    class="flaticon-left-arrow"></span> Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next <span
                                                    class="flaticon-right-arrow-1"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 pl10 pr10">
                    <div class="main_blog_post_widget_list">
                        <div class="blog_search_widget">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Here"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                                            class="flaticon-magnifying-glass"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="blog_category_widget">
                            <ul class="list-group">
                                <h4 class="title">Category</h4>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tips <span class="float-right">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    News <span class="float-right">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Event <span class="float-right">6</span>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_recent_post_widget media_widget">
                            <h4 class="title">Recent Posts</h4>
                            <div class="media">
                                <img class="align-self-start mr-3" src="front/images/blog/s1.jpg" alt="s1.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">What you need to know before going to malta</h5>
                                    <a href="#">December 25, 2023.</a>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="front/images/blog/s2.jpg" alt="s2.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Did you know?</h5>
                                    <a href="#">January 25, 2023.</a>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="front/images/blog/s3.jpg" alt="s3.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">The Top 10 Schools in malta</h5>
                                    <a href="#">Febuary 25, 2019.</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_tag_widget">
                            <h4 class="title">Tags</h4>
                            <ul class="tag_list">
                                <li class="list-inline-item"><a href="#">Scholarship</a></li>
                                <li class="list-inline-item"><a href="#">Tuition</a></li>
                                <li class="list-inline-item"><a href="#">Visa</a></li>
                                <li class="list-inline-item"><a href="#">Accomodation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
