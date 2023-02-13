<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>  @yield('title')  </title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dashboard/images/favicon.png') }}">
    <link href="{{ asset('assets/dashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/nouislider/nouislider.min.css') }}">

    <!-- Style css -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">


    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/pickadate/themes/default.date.css') }}">
    <link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/dashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        @include('admin_layouts.navbar')

        @include('admin_layouts.sidebar')

        @yield('content')

        @include('admin_layouts.footer')

    </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/dashboard/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/dashboard/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/dashboard/vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/dashboard/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/dashboard/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/demo.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/styleSwitcher.js') }}"></script>
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>


    <!-- pickdate -->
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.date.js') }}"></script>

     <!-- Pickdate -->
     <script src="{{ asset('assets/dashboard/js/plugins-init/pickadate-init.js') }}"></script>

     <script src="{{ asset('assets/dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

     <script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/dlabnav-init.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/demo.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/styleSwitcher.js') }}"></script>


</body>

</html>
