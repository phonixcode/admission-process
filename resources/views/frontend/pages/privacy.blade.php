@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Terms and Condıtıons</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Terms and Condıtıons</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our FAQ -->
    <section class="our-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="faq_question_widget">
                        <h4 class="title">Faq</h4>
                        <div class="widget_list">
                            <ul class="list_details">
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Company Policies</a></li>
                                <li><a href="#">Terms&conditons</a></li>
                                <li><a href="#">Payment Options</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="faq_according">
                        <div class="terms_condition_grid">
                            <div class="grids mb30">
                                <h4 class="fz20 mb10">1. Terms</h4>
                                <p class="mb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.</p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="grids mb30">
                                <h4 class="fz20 mb10">2. Limitations</h4>
                                <p class="mb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.</p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="grids mb30">
                                <h4 class="fz20 mb10">3. Revisions and Errata</h4>
                                <p class="mb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.</p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="grids">
                                <h4 class="fz20 mb10">4. Site Terms of Use Modifications</h4>
                                <p class="mb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.</p>
                                <p class="mb0">It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
