@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb csv3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_content">
                        <div class="cs_row_one csv3">
                            <div class="cs_ins_container">
                                <div class="cs_instructor">
                                    <ul class="cs_instrct_list float-left mb0">
                                        <li class="list-inline-item"><img class="thumb"
                                                src="{{ asset('front/images/resource/review1.png') }}" alt="4.png"></li>
                                        <li class="list-inline-item"><a class="color-white" href="#">Admin</a></li>
                                        <li class="list-inline-item"><a class="color-white" href="#">Last updated
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $school->updated_at)->format('d/m/Y') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="cs_title color-white">{{ ucfirst($school->title) }}</h3>
                                <ul class="cs_review_seller">
                                    <li class="list-inline-item">
                                        <a class="color-white" href="#">
                                            <span>{{ ucfirst($school->condition) }}</span>
                                        </a>
                                    </li>
                                    @php
                                        // $rate = ceil($school->school_reviews->avg('rate'));
                                        $rate = 0;
                                        if ($school->school_reviews) {
                                            // Check if $item->product_reviews is not null
                                            $rate = ceil($school->school_reviews->avg('rate'));
                                        }
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($rate >= $i)
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"
                                                        aria-hidden="true"></i></a></li>
                                        @else
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"
                                                        aria-hidden="true"></i></a></li>
                                        @endif
                                    @endfor

                                    <li class="list-inline-item">
                                        <a class="color-white" href="#">{{ count($school->school_reviews) }}
                                            ({{ $rate }} Ratings)</a>
                                    </li>
                                </ul>
                                <ul class="cs_review_enroll">
                                    <li class="list-inline-item"><a class="color-white" href="#"><span
                                                class="flaticon-profile"></span> {{ $school->number_click }} students
                                            checked this</a></li>
                                    <li class="list-inline-item"><a class="color-white" href="#"><span
                                                class="flaticon-comment"></span> {{ count($school->school_reviews) }}
                                            Review</a></li>
                                </ul>
                                <ul class="cs_watch_list float-right mb0">
                                    <li class="list-inline-item"><a class="color-white" href="#"><span
                                                class="flaticon-like"></span></a></li>
                                    <li class="list-inline-item"><a class="color-white" href="#">Add to Bookmark</a>
                                    </li>
                                    <li class="list-inline-item"><a class="color-white" href="#" id="share-btn"><span
                                                class="flaticon-share"> Share</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="courses_single_container">
                                <div class="cs_row_one">
                                    <div class="cs_ins_container">
                                        <div class="courses_big_thumb">
                                            <div class="thumb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs_row_two">
                                    <div class="cs_overview b0p0">
                                        <h4 class="title">Overview</h4>
                                        {!! $school->description !!}
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="cs_row_six">
                                    <div class="sfeedbacks b0p0">
                                        <h4 class="aii_title">Review</h4>
                                        <div class="mbp_pagination_comments">
                                            @forelse ($school->school_reviews as $item)
                                                <div class="mbp_first media csv1">
                                                    <img src="{{ asset('front/images/resource/review1.png') }}"
                                                        class="mr-3" alt="review1.png">
                                                    <div class="media-body">
                                                        <h4 class="sub_title mt-0">{{ $item->reason }}
                                                            <span class="sspd_review float-right">
                                                                <ul>
                                                                    @for ($i = 0; $i < 5; $i++)
                                                                        @if ($item->rate > $i)
                                                                            <li class="list-inline-item"><a
                                                                                    href="#"><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></a></li>
                                                                        @else
                                                                            <li class="list-inline-item"><a
                                                                                    href="#"><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></a></li>
                                                                        @endif
                                                                    @endfor
                                                                </ul>
                                                            </span>
                                                        </h4>
                                                        <a class="sspd_postdate fz14"
                                                            href="#">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a>
                                                        <p class="fz15 mt20">{{ $item->review }}</p>

                                                        <div class="mbp_sub media csv1">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom_hr"></div>
                                            @empty
                                                <p>No reviews</p>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                                <div class="cs_row_seven">
                                    <div class="sfeedbacks b0p0">
                                        <div class="mbp_comment_form style2 pb0">
                                            <h4>Add Reviews & Rate</h4>

                                            @if (session()->has('success'))
                                                <strong
                                                    class="text-success">{{ session()->get('success') }}!</strong><br><br>
                                            @endif

                                            <form action="{{ route('school.review', $school->slug) }}" method="post"
                                                class="comments_form">
                                                @csrf
                                                {{-- <input type="hidden" name="user_id" value="1"> --}}
                                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                                <ul>
                                                    <li class="list-inline-item pr15">
                                                        <p>What do you think about this school?</p>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="sspd_review">
                                                            <ul>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star fz18"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star fz18"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star fz18"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star fz18"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star fz18"></i></a></li>
                                                                <li class="list-inline-item"></li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="form-group">
                                                    <input name="rate" type="number" class="form-control"
                                                        id="exampleInputName1" aria-describedby="textHelp" min="0"
                                                        max="5" value="{{ old('rate') }}">

                                                    @error('rate')
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Name</label>
                                                    <input name="reason" type="text" class="form-control"
                                                        id="exampleInputName1" aria-describedby="textHelp"
                                                        value="{{ old('reason') }}">
                                                    @error('reason')
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Review Content</label>
                                                    <textarea name="review" class="form-control" id="exampleFormControlTextarea1" rows="6">{{ old('review') }}</textarea>

                                                    @error('review')
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-thm">Submit Review <span
                                                        class="flaticon-right-arrow-1"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="r_course_title">Other Schools</h3>
                        </div>
                        @foreach ($schools as $item)
                            <div class="col-lg-6 col-xl-4">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('media/courses/' . $item->photo) }}"
                                            alt="{{ $item->title }}">
                                        <div class="overlay">
                                            <div class="tag">{{ ucfirst($item->condition) }}</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course"
                                                href="{{ route('school.details', $item->slug) }}">Find Out More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>{{ ucfirst($item->tag->title) }}</p>
                                            <h5>{{ ucfirst($item->title) }} </h5>
                                            <ul class="tc_review">
                                                @php
                                                    $rate = 0;
                                                    if ($item->school_reviews) {
                                                        // Check if $item->product_reviews is not null
                                                        $rate = ceil($item->school_reviews->avg('rate'));
                                                    }
                                                @endphp
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($rate > $i)
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    @else
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    @endif
                                                @endfor

                                                <li class="list-inline-item"><a
                                                        href="#">({{ count($item->school_reviews) }})</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a
                                                        href="#">{{ $item->number_click }}</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">{{ count($item->school_reviews) }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="selected_filter_widget p30 bgc-thm">
                        <span class="float-left"><img class="mr20" src="{{ asset('front/images/cb.png') }}"
                                alt="3.png" style=" width: 50px;"></span>
                        <h4 class="mt15 fz20 fw500 color-white">Not sure?</h4>
                        <br>
                        <p class="color-white" style="color: white;"><a class="color-white" href="login.html">Navigate
                                the admissions process with ease. Click here!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
@push('js')
    <script>
        // Assuming you have a variable named "content" that contains the content you want to share
        var content = "Check out this awesome content!";
        var url = window.location.href; // URL of the current page

        // Handle the click event of the "Share" button
        document.getElementById("share-btn").addEventListener("click", function(e) {
            e.preventDefault();

            // Share on Facebook
            var fb_url = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
            window.open(fb_url, "_blank");

            // Share on Twitter
            var tw_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(content) + "&url=" +
                encodeURIComponent(url);
            window.open(tw_url, "_blank");

            // Share on LinkedIn
            var ln_url = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url) + "&title=" +
                encodeURIComponent(content);
            window.open(ln_url, "_blank");
        });
    </script>
@endpush
