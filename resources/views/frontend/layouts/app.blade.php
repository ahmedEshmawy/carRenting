<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KwitaraCars - Bootstrap Cars Dealer Template </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" type="text/css" /><!-- Bootstrap -->
       
    <link rel="stylesheet" href="{{ url('frontend/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ url('frontend/fonts/themify-icons/themify-icons.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{ url('frontend/css/price-range.css') }}" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="{{ url('frontend/css/colors.css') }}" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/js/rs-plugin/css/settings.css') }}">
    


</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">



        @include('frontend.layouts.header')      
        
        @yield('content')    

        @include('frontend.layouts.footer')

    </div>

    <!-- Script -->
    <script type="text/javascript" src="{{ url('frontend/js/modernizr.js') }}"></script><!-- Modernizer -->
    <script type="text/javascript" src="{{ url('frontend/js/jquery-1.10.2.min.js') }}"></script><!-- Jquery -->
    <script type="text/javascript" src="{{ url('frontend/js/bootstrap.min.js') }}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{{ url('frontend/js/owl.carousel.min.js') }}"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="{{ url('frontend/js/html5lightbox.js') }}"></script><!-- HTML -->
    <script type="text/javascript" src="{{ url('frontend/js/scrolly.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ url('frontend/js/price-range.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ url('frontend/js/script.js') }}"></script><!-- Script -->

    <script src="{{ url('frontend/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>   
    <script src="{{ url('frontend/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

 
    @yield('jsCode')
</body>
</html>