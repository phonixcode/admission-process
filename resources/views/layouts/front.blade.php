<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('frontend.partials._head')
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        @yield('content')
    </div>
    @include('frontend.partials._script')
</body>

</html>
