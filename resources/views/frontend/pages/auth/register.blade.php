@extends('layouts.auth')

@section('title', 'Login')

@section('content-auth')
    <section class="our-log-reg bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="sign_up_form inner_page">
                        <div class="heading">
                            <h3 class="text-center">Register Here</h3>
                            <p class="text-center">Have an account? <a class="text-thm" href="{{ route('login') }}">Login</a></p>
                        </div>
                        <div class="details">
                            <form action="{{ route('register.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        placeholder="Full Name" name="name" value="{{ old('name') }}">

                                    @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                        placeholder="Email Address" name="email" value="{{ old('email') }}">

                                        @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword4"
                                        placeholder="Password" name="password">

                                        @error('password')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword5"
                                        placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                    <label class="custom-control-label" for="exampleCheck3">Want to join the team?</label>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                <div class="divide">
                                    <span class="lf_divider">Or</span>
                                    <hr>
                                </div>
                                <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i
                                                class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i
                                                class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
