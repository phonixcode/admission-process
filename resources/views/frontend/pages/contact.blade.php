@extends('layouts.front')

@section('content')
    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Contact Us</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It's Work -->
    <section class="our-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-placeholder-1"></span></div>
                        <h4>Our Location</h4>
                        <p>Block D Giorgio Mitrovich Street Pembroke, Triq Alamein, Pembroke PBK 1014, Malta.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <h4>Call us on</h4>
                        <p class="mb0">Mobile: (+356) 468 235 </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-email"></span></div>
                        <h4>Write Some Words</h4>
                        <p>Info@myschoolguide.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.8827559988185!2d14.474564514584623!3d35.92536972415243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e4561435a0f4b%3A0x3c0bed8e64806d6f!2sSTC%20Higher%20Education!5e0!3m2!1sen!2sng!4v1681139812522!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 form_grid">
                    <h4 class="mb5">Send a Message</h4>
                    <p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
                    @if (session()->has('success'))
                                    <strong class="text-success mt-3">{{ session()->get('success') }}!</strong><br><br>
                                @endif
                    <form class="contact_form" action="{{ route('contact.submit') }}" method="post"
                        novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputName">Full Name</label>
                                    <input id="form_name" name="name" class="form-control" required="required"
                                        type="text">

                                    @error('name')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Your Email</label>
                                    <input id="form_email" name="email" class="form-control required email"
                                        required="required" type="email">

                                    @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputSubject">Subject</label>
                                    <input id="form_subject" name="subject" class="form-control required"
                                        required="required" type="text">

                                    @error('subject')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Message</label>
                                    <textarea id="form_message" name="message" class="form-control required" rows="5" required="required"></textarea>
                                    @error('message')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group ui_kit_button mb0">
                                    <button type="submit" class="btn dbxshad btn-lg btn-thm circle white">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
