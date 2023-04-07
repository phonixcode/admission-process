<!DOCTYPE html>
<html lang="en">


<head>
    <title>My School Guide - LMS Online Education Course & School</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="My School Guide - LMS Online Education Course & School" />
    <meta name="author" content="Imb" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{ asset('back/img/favicon.ico') }}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/style.css') }}" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('back/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!-- begin app-header -->
            @include('admin.partials._navbar')
            <!-- end app-header -->

            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                @include('admin.partials._sidebar')
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->

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
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright {{ Date('Y') }}. All rights reserved.</p>
                    </div>

                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="{{ asset('back/js/vendors.js') }}"></script>

    <!-- custom app -->
    <script src="{{ asset('back/js/app.js') }}"></script>
</body>


</html>
