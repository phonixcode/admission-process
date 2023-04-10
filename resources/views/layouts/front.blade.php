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

    {{-- <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
    

    @include('frontend.partials._script')
</body>

</html>
