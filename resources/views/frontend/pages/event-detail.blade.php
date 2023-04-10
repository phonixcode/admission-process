@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">{{ ucfirst($event->title) }}</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="/">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($event->title) }}</li>
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
							<div class="details pt0">
								<h3 class="mb25">{{ $event->title }}</h3>
							</div>
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('media/events/' . $event->photo) }}" alt="12.jpg">
								<div class="post_date"><h2>{{ Carbon\Carbon::parse($event->date)->format('d') }}</h2> <span>{{ strtoupper(Carbon\Carbon::parse($event->date)->format('F')) }}</span></div>
							</div>

							<div class="details">
								{!! $event->description !!}
							</div>
							<ul class="blog_post_share mb0">
								<li><p>Share</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
						</div>
						<div class="mbp_pagination_tab">
							<div class="row">
								<div class="col-lg-12">
									<h4 class="event_participator_tile">Event Participants</h4>
								</div>
								<div class="col-sm-6 col-lg-6 col-xl-3">
									<div class="participator_team text-center">
										<div class="thumb">
											<img class="img-fluid" src="{{ asset('front/images/team/6.png') }}" alt="6.png">
										</div>
										<div class="details">
											<h4>Adel Mizzi</h4>
											<p>Marketing Manager</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6 col-xl-3">
									<div class="participator_team text-center">
										<div class="thumb">
											<img class="img-fluid" src="{{ asset('front/images/team/7.png') }}" alt="7.png">
										</div>
										<div class="details">
											<h4>Steven Camileri</h4>
											<p>Student Councelor</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6 col-xl-3">
									<div class="participator_team text-center">
										<div class="thumb">
											<img class="img-fluid" src="{{ asset('front/images/team/8.png') }}" alt="8.png">
										</div>
										<div class="details">
											<h4>Helen Ibe</h4>
											<p>Admission Counselor</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6 col-xl-3">
									<div class="participator_team text-center">
										<div class="thumb">
											<img class="img-fluid" src="{{ asset('front/images/team/9.png') }}" alt="9.png">
										</div>
										<div class="details">
											<h4>Kristen Pala</h4>
											<p>Admissions Counselor</p>
										</div>
									</div>
								</div>
							</div>
							<ul>
								<li class="list-inline-item float-left"></li>
								<li class="list-inline-item float-right"></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-xl-3 pl10 pr10">
					<div class="main_blog_post_widget_list">
						<div class="event_details_widget">
							<h4 class="title">Event Details</h4>
							<ul>
								<li><span class="flaticon-appointment"></span> Date: {{ $event->date }}</li>
								<li><span class="flaticon-clock"></span> Time: {{ $event->time_from }} - {{ $event->time_to }}</li>
								<li><span class="flaticon-placeholder"></span>Online: {{ $event->platform }}. <a href="{{ $event->link }}">Click Here To Join</a></li>
							</ul>
						</div>
						<div class="event_details_widget">
							<h4 class="title">Event Details</h4>
							{{-- <div class="h200 mb30 bdrs5" id="map-canvas"></div> --}}
							<ul>
								<li><span class="flaticon-phone-call"></span> {{ $event->phone_number }}</li>
								<li><span class="flaticon-email"></span> {{ $event->email_address }}</li>
								<li><span class="flaticon-www"></span> {{ $event->website }}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @include('frontend.partials._footer')
@endsection
