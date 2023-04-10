@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Add Testimonial</h1>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert border-0 alert-danger m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <!-- end row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Name </label>
                                <input type="text" class="form-control" id="name" placeholder=""
                                    name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">School </label>
                                <input type="text" class="form-control" id="school" placeholder=""
                                    name="school" value="{{ old('school') }}">
                            </div>

                            <div class="form-group">
                                <label for="summary">Quote</label>
                                <textarea class="form-control" id="quote" placeholder="Write some text..."
                                    name="quote">{{ old('quote') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Image</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
