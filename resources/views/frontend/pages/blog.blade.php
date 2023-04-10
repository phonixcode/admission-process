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
                        <div class="row">
                            @foreach ($blogs as $item)
                                <div class="col-xl-5 pr15-xl pr0">
                                    <div class="blog_grid_post mb35">
                                        <div class="thumb">
                                            <img class="img-fluid w100" src="{{ asset('media/blogs/' . $item->photo) }}"
                                                alt="7.jpg"><a href="{{ route('blog.details', $item->slug) }}">
                                                <div class="tag">{{ $item->category->title }}</div>
                                                <div class="post_date">
                                                    <h2>{{ Carbon\Carbon::parse($item->update_at)->format('d') }}</h2>
                                                    <span>{{ strtoupper(Carbon\Carbon::parse($item->update_at)->format('F')) }}</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 pl15-xl pl0">
                                    <div class="blog_grid_post style2 mb35">
                                        <div class="details">
                                            <h3>{{ $item->title }}</h3>
                                            <ul class="post_meta">
                                                <li><a href="#"><span class="flaticon-clock"></span></a></li>
                                                <li><a href="#"><span>Admin</span></a></li>
                                                <li><a href="#"><span class="flaticon-chat"></span></a></li>
                                                <li><a href="#"><span>{{ count($item->blog_reviews) }}  comments</span></a></li>
                                            </ul>
                                            <p>{{ mb_substr($item->summary, 0, 100, 'utf-8') }}...</p></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mbp_pagination mt20">
                                    {{ $blogs->links('vendor.pagination.custom') }}
                                </div>
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
