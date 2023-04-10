@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- end row -->

    <!-- start dashboard contant -->
    <div class="row">
        <div class="col-lg-12 col-xxl-3">
            <div class="row">
                <div class="col-6">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <i class="fa fa-group font-60 mr-4"></i>
                                        <div class="media-body pb-0">
                                            <h4 class="mb-1">0</h4>
                                            <p>New Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-3">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <i class="fa fa-sitemap font-60 mr-4"></i>
                                        <div class="media-body pb-0">
                                            <h4 class="mb-1">0</h4>
                                            <p>Total Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <i class="ti ti-tag font-60 mr-4"></i>
                                        <div class="media-body pb-0">
                                            <h4 class="mb-1">0</h4>
                                            <p>Total Posts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-6">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <i class="fa fa-group font-60 mr-4"></i>
                                        <div class="media-body pb-0">
                                            <h4 class="mb-1">0</h4>
                                            <p>Total Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end dashboard contant -->
</div>
@endsection
