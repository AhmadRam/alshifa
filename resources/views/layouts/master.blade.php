<!DOCTYPE html>
<html lang="en">

<head>
    <title>Magicist clinic</title>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <link rel="icon" sizes="8x8" href="{{ asset('asset/images/Logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    {{-- <div class="py-1 bg-black top">
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
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light site-navbar-target"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('asset/images/Logo.png') }}" height="70px" width="110px"/></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="/#" class="nav-link"><span>Home</span></a></li>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                        <a class="">Departments</a>
                            <div class="dropdown-content">
                              @foreach (App\Department::where('status',1)->get() as $department)
                              <a href="{{route('departments.view',$department->id)}}">{{$department->name}}</a>
                              @endforeach
                            </div>
                          </div>
                        </li>

                    <li class="nav-item"><a href="/#Hospitals-section"
                            class="nav-link"><span>Hospitals</span></a>
                    </li>
                    <li class="nav-item"><a href="/#Hotels-section"
                            class="nav-link"><span>Hotels</span></a>
                    </li>
                    <li class="nav-item"><a href="/#contact-section" class="nav-link"><span>Contact Us</span></a></li>
                    <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About Us</span></a>
                    <li class="nav-item cta mr-md-2"><a href="/appointment" class="nav-link">FREE CONSULTATION</a>
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
            <div class="row mb-8">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <a class="navbar-brand" href="/"><img src="{{ asset('asset/images/Logo.png') }}" height="70px" width="110px"/></a>
                        {{-- <h2 class="ftco-heading-2">Magicist clinic</h2> --}}
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    {{-- <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Departments</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nuclear Magnetic</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
                        </ul>
                    </div> --}}
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
            {{-- <div class="row">
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
            </div> --}}
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


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

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

    //     $(document).ready(function(){

    // var current_fs, next_fs, previous_fs; //fieldsets
    // var opacity;
    // var current = 1;
    // var steps = $("fieldset").length;

    // setProgressBar(current);

    // $(".next").click(function(){

    //     current_fs = $(this).parent();
    //     next_fs = $(this).parent().next();

    //     //Add Class Active
    //     $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //     //show the next fieldset
    //     next_fs.show();
    //     //hide the current fieldset with style
    //     current_fs.animate({opacity: 0}, {
    //         step: function(now) {
    //             // for making fielset appear animation
    //             opacity = 1 - now;

    //             current_fs.css({
    //                 'display': 'none',
    //                 'position': 'relative'
    //             });
    //             next_fs.css({'opacity': opacity});
    //         },
    //         duration: 500
    //     });
    //     setProgressBar(++current);
    // });

    // $(".previous").click(function(){

    //     current_fs = $(this).parent();
    //     previous_fs = $(this).parent().prev();

    //     //Remove class active
    //     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //     //show the previous fieldset
    //     previous_fs.show();

    //     //hide the current fieldset with style
    //     current_fs.animate({opacity: 0}, {
    //         step: function(now) {
    //             // for making fielset appear animation
    //             opacity = 1 - now;

    //             current_fs.css({
    //                 'display': 'none',
    //                 'position': 'relative'
    //             });
    //             previous_fs.css({'opacity': opacity});
    //         },
    //         duration: 500
    //     });
    //     setProgressBar(--current);
    // });

    // function setProgressBar(curStep){
    //     var percent = parseFloat(100 / steps) * curStep;
    //     percent = percent.toFixed();
    //     $(".progress-bar")
    //       .css("width",percent+"%")
    // }

    // });
    </script>

</body>

</html>
