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
						<div class="row event_lists p0">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post event_lists mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="front/images/blog/el1.jpg" alt="el1.jpg">
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 event_lists mb35">
									<div class="details">
										<h3><a href="event-single.html">Scholarship Seminar</h3>
										<p>Lorem gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsutis sem nibh id elit.</p>
										<ul class="mb0">
											<li><a href="#"><span class="flaticon-appointment"></span> Date: 06.09.2023</a></li>
											<li><a href="#"><span class="flaticon-clock"></span>Time: 8:00 am - 5:00 pm</a></li>
											<li><a href="#"><span class="flaticon-placeholder"></span>Online: Microsoft Teams</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row event_lists p0">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post event_lists mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="front/images/blog/el2.jpg" alt="el2.jpg">
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 event_lists mb35">
									<div class="details">
										<h3>Scholarship Seminar</h3>
										<p>Lorem gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsutis sem nibh id elit.</p>
										<ul class="mb0">
											<li><a href="#"><span class="flaticon-appointment"></span> Date: 06.09.2023</a></li>
											<li><a href="#"><span class="flaticon-clock"></span>Time: 8:00 am - 5:00 pm</a></li>
											<li><a href="#"><span class="flaticon-placeholder"></span>Online: Microsoft Teams</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row event_lists p0">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post event_lists mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="front/images/blog/el3.jpg" alt="el3.jpg">
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 event_lists mb35">
									<div class="details">
										<h3>Scholarship Seminar</h3>
										<p>Lorem gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsutis sem nibh id elit.</p>
										<ul class="mb0">
											<li><a href="#"><span class="flaticon-appointment"></span> Date: 06.09.2023</a></li>
											<li><a href="#"><span class="flaticon-clock"></span>Time: 8:00 am - 5:00 pm</a></li>
											<li><a href="#"><span class="flaticon-placeholder"></span>Online: Microsoft Teams</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row event_lists p0">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post event_lists mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="front/images/blog/el4.jpg" alt="el4.jpg">
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 event_lists mb35">
									<div class="details">
										<h3>Scholarship Seminar</h3>
										<p>Lorem gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsutis sem nibh id elit.</p>
										<ul class="mb0">
											<li><a href="#"><span class="flaticon-appointment"></span> Date: 06.09.2023</a></li>
											<li><a href="#"><span class="flaticon-clock"></span>Time: 8:00 am - 5:00 pm</a></li>
											<li><a href="#"><span class="flaticon-placeholder"></span>Online: Microsoft Teams</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="mbp_pagination mt20">
									<ul class="page_navigation">
									    <li class="page-item disabled">
									    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">1</a></li>
									    <li class="page-item active" aria-current="page">
									    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">...</a></li>
									    <li class="page-item"><a class="page-link" href="#">14</a></li>
									    <li class="page-item">
									    	<a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
									    </li>
									</ul>
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
