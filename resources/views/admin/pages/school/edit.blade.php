@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Edit School</h1>
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
                        <form action="{{ route('admin.schools.update', $school->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Enter Title</label>
                                <input type="text" class="form-control" id="title" placeholder="" name="title"
                                    value="{{ $school->title }}">
                            </div>

                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" placeholder="Write some text..."
                                    name="summary">{{ $school->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control summernote" id="description" placeholder="Write some text..." name="description">{{ $school->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Image</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            @if ($school->photo != '' || $school->photo != null)
                                <img src="{{ asset('media/courses/' . $school->photo) }}" class="mb-3" alt=""
                                    width="200"><br>
                            @endif

                            <div class="form-group">
                                <label for="brands">Select Tag (Country)</label>
                                <select class="form-control" name="tag_id">
                                    <option value="">--- Tag (Country) ---</option>
                                    @foreach ($school_tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ $school->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Conditions</label>
                                <select class="form-control" name="condition">
                                    <option value="">--- Conditions ---</option>
                                    <option value="new" {{ $school->condition == 'new' ? ' selected' : '' }}>
                                        New
                                    </option>
                                    <option value="top school" {{ $school->condition == 'top school' ? ' selected' : '' }}>
                                        Top School
                                    </option>
                                    <option value="top choice" {{ $school->condition == 'top choice' ? ' selected' : '' }}>
                                        Top Choice
                                    </option>
                                    <option value="best school"
                                        {{ $school->condition == 'best school' ? ' selected' : '' }}>
                                        Best School
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_featured">Feature Shool</label>
                                <select class="form-control" name="is_featured">
                                    <option value="0" {{ $school->is_featured == 'false' ? ' selected' : '' }}>
                                        False
                                    </option>
                                    <option value="1" {{ $school->is_featured == 'true' ? ' selected' : '' }}>
                                        True
                                    </option>
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
