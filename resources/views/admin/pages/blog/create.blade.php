@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Add School</h1>
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
                        <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="brands">Blog Category</label>
                                <select class="form-control" name="cat_id">
                                    <option value="">--- Categories ---</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ old('cat_id') == $item->id ? 'selected' : '' }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
