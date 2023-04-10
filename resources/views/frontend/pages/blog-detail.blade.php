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
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                        <div class="mbp_thumb_post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('media/blogs/' . $blog->photo) }}" alt="12.jpg">
                                <div class="tag">{{ $blog->category->title }}</div>
                                <div class="post_date">
                                    <h2>{{ Carbon\Carbon::parse($blog->update_at)->format('d') }}</h2>
                                    <span>{{ strtoupper(Carbon\Carbon::parse($blog->update_at)->format('F')) }}</span>
                                </div>
                            </div>
                            <div class="details">
                                <h3>{{ ucfirst($blog->title) }}</h3>
                                <ul class="post_meta">
                                    <li><a href="#"><span class="flaticon-profile"></span></a></li>
                                    <li><a href="#"><span>Admin</span></a></li>
                                    <li><a href="#"><span class="flaticon-comment"></span></a></li>
                                    <li><a href="#"><span>{{ count($blog->blog_reviews) }} comments</span></a></li>
                                </ul>
                                {!! $blog->description !!}
                            </div>
                            <ul class="blog_post_share">
                                <li>
                                    <p>Share</p>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                        <div class="mbp_pagination_tab">

                            <ul>
                                <li class="list-inline-item float-left"></li>
                                <li class="list-inline-item float-right"></li>
                            </ul>
                        </div>
                        <div class="product_single_content style2 mb30">
                            <h4 class="aii_title">Comments</h4>
                            <div class="mbp_pagination_comments">
                                @foreach ($blog->blog_reviews as $item)
                                <div class="mbp_first media">
                                    <img src="{{ asset('front/images/resource/review1.png') }}" class="mr-3"
                                        alt="review1.png">
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0">{{ $item->reason }}

                                        </h4>
                                        <a class="sspd_postdate fz14" href="#">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a>
                                        <p class="fz15 mt20">{{ $item->review }}</p>

                                        <div class="mbp_sub media">
                                            <div class="media-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom_hr"></div>
                                @endforeach


                                {{-- <div class="text-center mt50 mb30">
                                    <button type="button" class="more-review-btn btn">See more reviews</button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="product_single_content style2">
                            <div class="mbp_comment_form style2">
                                <h4>Comment</h4>
                                @if (session()->has('success'))
                                    <strong class="text-success">{{ session()->get('success') }}!</strong><br><br>
                                @endif
                                <form action="{{ route('blog.review', $blog->slug) }}" method="post" class="comments_form">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            aria-describedby="textHelp" name="reason" required>

                                        @error('reason')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea name="review" class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea>

                                        @error('review')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-thm">Submit<span
                                            class="flaticon-right-arrow-1"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 pl10 pr10">
                    <div class="main_blog_post_widget_list">

                        <div class="blog_category_widget">
                            <ul class="list-group">
                                <h4 class="title">Category</h4>
                                @foreach ($categories as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $item->title }} <span class="float-right">{{ count($item->blogs) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog_recent_post_widget media_widget">
                            <h4 class="title">Recent Posts</h4>
                            @foreach ($latest_blogs as $item)
                                <div class="media">
                                    <img class="align-self-start mr-3" src="{{ asset('media/blogs/' . $item->photo) }}"
                                        alt="s1.jpg">
                                    <div class="media-body">
                                        <h5 class="mt-0 post_title">{{ $item->title }}</h5>
                                        <a
                                            href="#">{{ Carbon\Carbon::parse($item->updated_at)->format('F d, Y') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.partials._footer')
@endsection
