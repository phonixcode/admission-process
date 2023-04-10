@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Schools</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Schools</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Courses List -->
    <section class="features-course pb20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mb0 mt0">Featured Schools</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop_product_slider">
                        @foreach ($featured_schools as $item)
                            <div class="item">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('media/courses/' . $item->photo) }}"
                                            alt="{{ $item->title }}">
                                        <div class="overlay">
                                            <div class="tag">{{ ucfirst($item->condition) }}</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="{{ route('school.details', $item->slug) }}">Find Out More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>{{ ucfirst($item->tag->title) }}</p>
                                            <h5>{{ ucfirst($item->title) }}</h5>
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
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
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
                                                <li class="list-inline-item"><a href="#">{{ $item->number_click }}</a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a
                                                        href="#">{{ count($item->school_reviews) }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Courses List -->
    <section class="courses-list pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9 shadow_box">
                    <div class="row courses_list_heading">
                        <div class="col-xl-4 p0">
                            <div class="instructor_search_result style2">
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-xl-8 p0">
                            <div class="candidate_revew_select style2 text-right">
                                <ul class="mb0">
                                    <li class="list-inline-item">
                                        <form action="{{ route('school.filter') }}" method="post">
                                            @csrf
                                            <select class="selectpicker show-tick" id="sortBy" name="sortBy"
                                                onchange="this.form.submit();">
                                                <option value="">Default</option>
                                                <option value="new"
                                                    {{ !empty($_GET['sortBy']) && $_GET['sortBy'] == 'new' ? ' selected' : '' }}>
                                                    Newly published</option>
                                                <option value="top school"
                                                    {{ !empty($_GET['sortBy']) && $_GET['sortBy'] == 'top school' ? ' selected' : '' }}>
                                                    Top School</option>
                                                <option value="top choice"
                                                    {{ !empty($_GET['sortBy']) && $_GET['sortBy'] == 'top choice' ? ' selected' : '' }}>
                                                    Top Choice</option>
                                                <option value="best school"
                                                    {{ !empty($_GET['sortBy']) && $_GET['sortBy'] == 'best school' ? ' selected' : '' }}>
                                                    Best School</option>
                                            </select>
                                        </form>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form method="get" class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" type="search"
                                                    placeholder="Search Schools" aria-label="Search" name="search">
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row courses_container">
                        @forelse ($schools as $item)
                            <div class="col-lg-12 p0">
                                <div class="courses_list_content">
                                    <div class="top_courses list">
                                        <div class="thumb">
                                            <img class="img-whp" src="{{ asset('media/courses/' . $item->photo) }}"
                                                alt="{{ $item->title }}">
                                            <div class="overlay">
                                                <div class="icon"><span class="flaticon-like"></span></div>
                                                <a class="tc_preview_course"
                                                    href="{{ route('school.details', $item->slug) }}">Read More</a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p>{{ ucfirst($item->tag->title) }}</p>
                                                <h5>{{ ucfirst($item->title) }} <span
                                                        class="tag">{{ ucfirst($item->condition) }}</span>
                                                </h5>
                                                <p>{{ mb_substr($item->summary, 0, 150, 'utf-8') }}</p>
                                            </div>
                                            <div class="tc_footer">
                                                <ul class="tc_meta float-left fn-414">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="flaticon-profile"></i></a></li>
                                                    <li class="list-inline-item"><a
                                                            href="#">{{ $item->number_click }}</a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="flaticon-comment"></i></a></li>
                                                    <li class="list-inline-item"><a
                                                            href="#">{{ count($item->school_reviews) }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 p0">
                                <div class="courses_list_content">
                                    <p class="align-content-center">No Result found.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt30 mb30">
                            <div class="mbp_pagination">
                                {{ $schools->appends($_GET)->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="selected_filter_widget style3 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Locations</a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <form action="{{ route('school.filter') }}" method="post">
                                            @csrf
                                            <div class="ui_kit_checkbox">
                                                @if (!empty($_GET['location']))
                                                    @php
                                                        $filter_locations = explode(',', $_GET['location']);
                                                    @endphp
                                                @endif

                                                @foreach ($locations as $item)
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="{{ $item->slug }}"
                                                            @if (!empty($filter_locations) && in_array($item->slug, $filter_locations)) checked @endif
                                                            class="custom-control-input" name="location[]"
                                                            onchange="this.form.submit()" value="{{ $item->slug }}">
                                                        <label class="custom-control-label"
                                                            for="{{ $item->slug }}">{{ $item->title }} <span
                                                                class="float-right">({{ count($item->schools) }})</span></label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="selected_filter_widget p30 bgc-thm">
                        <span class="float-left"><img class="mr20" src="front/images/cb.png" alt="3.png"
                                style=" width: 50px;"></span>
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
