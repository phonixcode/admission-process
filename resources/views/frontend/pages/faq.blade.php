@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Faq</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faq</li>
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
                    <h4 class="fz20 mb30">Payments</h4>
                    <div class="faq_according">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyOne" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">What is My School Guide?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyOne" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">My School Guide is a chatbot-based platform designed to help
                                            students navigate the admissions process and access personalized support and
                                            guidance during their academic journey.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyTwo" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Is the chatbot available
                                            24/7?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">Yes, the chatbot is avaliable 24/7</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">How does the chatbot work?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">The chatbot uses natural language processing and machine learning
                                            algorithms to understand and respond to students' questions and concerns. It can
                                            provide guidance on a variety of topics related to the admissions process,
                                            including filling out applications, preparing for standardized tests, and
                                            researching colleges and universities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Is my personal information safe
                                            with My School Guide?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">The privacy and security of users' personal information is top
                                            priority for the My School Guide project. Ideally, the project is designed with
                                            appropriate measures in place to ensure that users' personal information is
                                            protected and kept confidential.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">How does the chatbot ensure
                                            fairness and equity in the admissions process?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">The My School Guide project could potentially incorporate features
                                            to promote fairness and equity in the admissions process, such as providing
                                            information on scholarship opportunities or resources for underrepresented
                                            student groups.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Can I access My School Guide on
                                            my mobile device?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">Yes in the future</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Can I provide feedback on the
                                            chatbot's performance or suggest improvements?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">Yes you can. This will help us the project team to continue to
                                            refine and improve the chatbot's performance over time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">How is My School Guide
                                            different from other college admissions resources or tools?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">My School Guide offers a unique combination of features and
                                            services tailored to students' individual needs and goals, such as personalized
                                            support and guidance from a chatbot.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyFour" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">What kind of support and
                                            guidance can I expect from the chatbot?</a>
                                    </h4>
                                </div>
                                <div id="panelBodyFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h4>Description</h4>
                                        <p class="mb25">You can expect to receive personalized support and guidance
                                            tailored to your specific needs and goals. The chatbot can provide information
                                            and advice on a wide range of topics related to the admissions process and
                                            higher education, including choosing the right school, writing a strong
                                            application essay, and preparing for interviews.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </section>

    @include('frontend.partials._footer')
@endsection
