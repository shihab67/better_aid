<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Better Aid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
    <meta name="author" content="" />
    <meta name="email" content="" />
    <meta name="website" content="" />
    <meta name="Version" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- SLIDER -->
    <link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css') }}" />
    <!-- Icons -->
    <link href="{{ asset('frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/line.css') }}">
    <!-- Css -->
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/simplebar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/sidebar.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        @media only screen and (min-width:767px) {
            .display-none {
                display: none;
            }
        }
       
    </style>
    @stack('css')

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    @include('patient.partials.header')

    <!-- Start Hero -->
    <section class="bg-dashboard">
        <div class="container-fluid">
            <div class="row">
                @include('patient.partials.sidebar')
                <!--end col-->

                <div class="col-xl-10 col-lg-8 col-md-7 mt-sm-0">
                    @yield('content')
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    @include('patient.partials.footer')
    <!-- End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i
            data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simplebar.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/tiny-slider-init.js') }}"></script>
    <!-- Chart -->
    <script src="{{ asset('frontend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('frontend/js/areachart.init.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('frontend/js/feather.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/sidebar.js') }}"></script>
    @stack('js')
</body>

</html>