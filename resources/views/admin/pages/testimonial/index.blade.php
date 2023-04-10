@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Testimonials</h1>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.testimonials.create') }}" class="btn btn-outline-primary btn-icon-text">
                                    Add Testimonial
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="datatable-wrapper table-responsive">
                        <table id="datatable" class="display compact table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Quote</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('media/testimonial/' . $item->photo) }}" class="mb-3" alt=""
                                            width="70"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ mb_substr($item->quote, 0, 100, 'utf-8') }} ...</td>

                                        <td style="white-space: nowrap; width: 1%;">
                                            <div class="dropdown">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Options
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <a href="{{ route('admin.testimonials.edit', $item->id) }}"
                                                        class="dropdown-item"><i
                                                            class="ti ti-pencil pr-2 text-primary"></i>Edit</a>
                                                    <form action="{{ route('admin.testimonials.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="dltBtn dropdown-item"
                                                            href="{{ route('admin.testimonials.destroy', $item->id) }}"
                                                            data-id="{{ $item->id }}"><i
                                                                class="ti ti-trash pr-2 text-danger"></i>Delete</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Quote</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
