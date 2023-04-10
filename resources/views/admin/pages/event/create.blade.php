@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Add Event</h1>
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
                        <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Enter Title</label>
                                <input type="text" class="form-control" id="title" placeholder=""
                                    name="title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" placeholder="Write some text..."
                                    name="summary">{{ old('summary') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control summernote" id="description" placeholder="Write some text..."
                                    name="description">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Image</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Time Start From</label>
                                <input type="text" class="form-control" id="time_from" placeholder="e.g 8:00 am"
                                    name="time_from" value="{{ old('time_from') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Time Start To</label>
                                <input type="text" class="form-control" id="time_to" placeholder="e.g 5:00 pm"
                                    name="time_to" value="{{ old('time_to') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Platform</label>
                                <input type="text" class="form-control" id="platform" placeholder="e.g zoom"
                                    name="platform" value="{{ old('platform') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Date</label>
                                <input type="date" class="form-control" id="date" placeholder=""
                                    name="date" value="{{ old('date') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Link</label>
                                <input type="url" class="form-control" id="link" placeholder=""
                                    name="link" value="{{ old('link') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Location Map</label>
                                <textarea class="form-control" id="map" placeholder=""
                                    name="map">{{ old('map') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Event Email</label>
                                <input type="email" class="form-control" id="email_address" placeholder="e.g mdx.example.com"
                                    name="email_address" value="{{ old('email_address') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" placeholder=""
                                    name="phone_number" value="{{ old('phone_number') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Event Website</label>
                                <input type="url" class="form-control" id="website" placeholder=""
                                    name="website" value="{{ old('website') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
