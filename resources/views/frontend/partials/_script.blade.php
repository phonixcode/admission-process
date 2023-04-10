<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('front/js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/isotop.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/timepicker.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('front/js/script.js') }}"></script>
@stack('js')
{{-- <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
<script>
    var botmanWidget = {
        title: 'My School Guide',
        mainColor: '#3f51b5',
        bubbleBackground: '#3f51b5',
        aboutText: '',
        introMessage: "✋ Hi there! How can I assist you today?"
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
