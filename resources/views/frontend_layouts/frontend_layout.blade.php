<!DOCTYPE html>
<html lang="en">

<head>

    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('assets/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/responsive.css') }}">

    <!-- link courses -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/courses_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/courses_responsive.css') }}">

    <!-- link About Us -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/news_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/news_responsive.css') }}">

    <!-- link Contact Us -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact_responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/elements_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/elements_responsive.css') }}">

</head>

<body>

    <div class="super_container">

        @include('frontend_layouts.header')

        {{-- @include('frontend_layouts.hero') --}}


        @yield('content')


        @include('frontend_layouts.footer')

    </div>

    <script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/news_custom.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/contact_custom.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/elements_custom.js') }}"></script>



    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('send_mail'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 6000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('send_mail') }}'
            })
        </script>
    @endif

    @if (session('status'))
        <script>
            Swal.fire(
                'successfully',
                '{{ session('status') }}',
                'success',
            );
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Delete',
                text: '{{ session('error') }}',
            })
        </script>
    @endif

</body>

</html>
