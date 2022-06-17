<!DOCTYPE html>
<html lang="en">

<head>
    <title>Magicist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="py-1 bg-black top">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text"><a href="tel:+90 555 041 35 55" style="color: white">+90 555 041 35 55</a> / <a href="tel:+90 555 024 35 55" style="color: white">+90 555 024 35 55</a></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                                    <a href = "mailto: info@magicist.co" style="color: white"><span class="text">info@magicist.co</span></a>
                        </div>
                        {{-- <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link">
                                @guest
                                    <a href="{{ route('register') }}" class="mr-3">Sign Up</a>
                                    <a href="{{ route('login') }}">Sign In</a>
                                @else
                                    <a href="{{ route('customer.profile') }}"
                                        class="mr-3">{{ Auth::user()->name }}</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                @endguest
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Magicist</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="/#" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About</span></a>
                    </li>
                    <li class="nav-item"><a href="/#department-section"
                            class="nav-link"><span>Department</span></a></li>
                    <li class="nav-item"><a href="/#doctor-section"
                            class="nav-link"><span>Doctors</span></a>
                    </li>
                    <li class="nav-item"><a href="/#blog-section" class="nav-link"><span>Blog</span></a>
                    </li>
                    <li class="nav-item"><a href="/#contact-section"
                            class="nav-link"><span>Contact</span></a></li>
                    <li class="nav-item cta mr-md-2"><a href="/appointment" class="nav-link">Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer class="ftco-footer ftco-section img"
        style="background-image: url({{ asset('asset/images/footer-bg.jpg') }});">
        <div class="overlay"></div>
        <div class="container-fluid px-md-5">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Magicist</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Departments</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nuclear Magnetic</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pricing</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Ataköy 7-8-9-10 kısım mh. Çobançeşme E-5 yanyol CD. No:12 Daire:A119 Nivo Ataköy rezidans Bakırköy/İSTANBUL</span></li>
                                <li><a href="tel:+90 555 024 35 55"><span class="icon icon-phone"></span><span class="text">+90 555 024 35 55</a></span></li>
                                <li><a href="tel:+90 555 041 35 55"><span class="icon icon-phone"></span><span class="text">+90 555 041 35 55</a></span></li>
                                <li><a href = "mailto: info@magicist.co"><span class="icon icon-envelope pr-4"></span><span
                                            class="text">info@magicist.co</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/js/aos.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('asset/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="{{ asset('asset/js/google-map.js') }}"></script> --}}

    <script src="{{ asset('asset/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @elseif(Session::has('warning'))
                toastr.success('{{ Session::get('warning') }}');
            @elseif(Session::has('info'))
                toastr.success('{{ Session::get('info') }}');
            @endif
        });

        function getFile() {
            document.getElementById("upfile").click();
        }

        function sub(obj) {
            var file = obj.value;
            var fileName = file.split("\\");
            document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
            document.myForm.submit();
            event.preventDefault();
        }
    </script>
</body>

</html>
