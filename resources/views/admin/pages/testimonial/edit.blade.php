@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Edit Testimonial</h1>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert border-0 alert-danger m-b-30 alert-dismissible fade show border-radius-none"
                        role="alert">
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
                        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Name </label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name"
                                    value="{{ $testimonial->name }}">
                            </div>

                            <div class="form-group">
                                <label for="title">School </label>
                                <input type="text" class="form-control" id="school" placeholder=""
                                    name="school" value="{{ $testimonial->school }}">
                            </div>

                            <div class="form-group">
                                <label for="summary">Quote</label>
                                <textarea class="form-control" id="quote" placeholder="Write some text..."
                                    name="quote">{{ $testimonial->quote }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Image</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            @if ($testimonial->photo != '' || $testimonial->photo != null)
                                <img src="{{ asset('media/testimonial/' . $testimonial->photo) }}" class="mb-3" alt=""
                                    width="100"><br>
                            @endif

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
