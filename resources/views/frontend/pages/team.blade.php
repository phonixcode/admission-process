@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Join The Team</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Join The Team</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="become_instructor_container">
                        <h4 class="titles">IT engineers</h4>
                        <p class="mb20">We’re looking for senior level developers who are expert at systems like
                            WordPress, WooCommerce, or Shopify and have a passion for teaching.</p>
                        <p class="mb20">You should also be knowledgeable with languages or scripting with PHP, JavaScript,
                            HTML, CSS, MySQL, and Git or Bitbucket. If you have expertise with other skills for a course we
                            don’t already offer, we can work with you to develop a course you deliver within our system.
                            Just because it’s not already listed, please don’t hesitate to reach out.</p>
                        <p class="mb20">Send us your information and we’ll be in touch shortly.</p>
                        <h4 class="titles">Researcher</h4>
                        <p class="mb0">Amet est placerat in egestas erat imperdiet sed. Ornare arcu dui vivamus arcu
                            felis bibendum. In cursus turpis massa tincidunt dui ut ornare lectus sit. Odio facilisis mauris
                            sit amet massa vitae. Arcu odio ut sem nulla pharetra diam.</p>
                        <p class="mb20">Amet est placerat in egestas erat imperdiet sed. Ornare arcu dui vivamus arcu
                            felis bibendum. In cursus turpis massa tincidunt dui ut ornare lectus sit. Odio facilisis mauris
                            sit amet massa vitae. Arcu odio ut sem nulla pharetra diam. Consequat id porta nibh venenatis
                            cras sed felis eget. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Diam
                            quam nulla porttitor massa id neque aliquam vestibulum morbi. Pellentesque elit eget gravida
                            cum.</p>
                        <h4 class="titles">Engage in Student counselling</h4>
                        <p class="mb20">Curabitur gravida arcu ac tortor dignissim. Nisi quis eleifend quam adipiscing
                            vitae proin sagittis nisl. Consequat id porta nibh venenatis cras sed felis eget. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis volutpat.</p>
                        <p class="mb20">Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque
                            eleifend. Pellentesque dignissim enim sit amet. Quam elementum pulvinar etiam non quam. Sodales
                            ut eu sem integer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
