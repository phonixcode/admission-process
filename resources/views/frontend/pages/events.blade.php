@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Event</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Event</li>
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
				<div class="col-xl-12">
					<div class="main_blog_post_content">
                        @forelse ($events as $item)
                        <div class="row event_lists p0">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post event_lists mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="{{ asset('media/events/' . $item->photo) }}" alt="el1.jpg">
										<div class="post_date"><h2>{{ Carbon\Carbon::parse($item->date)->format('d') }}</h2> <span>{{ strtoupper(Carbon\Carbon::parse($item->date)->format('F')) }}</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 event_lists mb35">
									<div class="details">
										<h3><a href="{{ route('events.details', $item->slug) }}">{{ $item->title }}</h3>
										<p>{{ $item->summary }}</p>
										<ul class="mb0">
											<li><a href="#"><span class="flaticon-appointment"></span> Date: {{ $item->date }}</a></li>
											<li><a href="#"><span class="flaticon-clock"></span>Time: {{ $item->time_from }} - {{ $item->time_to }}</a></li>
											<li><a href="{{ $item->link }}"><span class="flaticon-placeholder"></span>Online: {{ $item->platform }}</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        @empty
                        <p>No Event</p>
                        @endforelse


						<div class="row">
							<div class="col-lg-12">
								<div class="mbp_pagination mt20">
									{{ $events->links('vendor.pagination.custom') }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    @include('frontend.partials._footer')
@endsection
