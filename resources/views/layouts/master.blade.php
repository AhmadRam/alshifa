<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alshifa clinic</title>
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

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">


    <link rel="icon" sizes="8x8" href="{{ asset('asset/images/Logo.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                            <span class="text"><a href="tel:+96566670028" style="color: white">+96566670028</a> / <a href="tel:+90 555 024 35 55" style="color: white">+90 555 024 35 55</a></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                                    <a href = "mailto: info@alshifa-kw.com" style="color: white"><span class="text">info@alshifa-kw.com</span></a>
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
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle text-center p-2" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="/#" class="nav-link"><span>Home</span></a></li>
                    </li>
                    <li class="nav-item position-relative">
                        <a class=" dropdown-toggle text-black nav-link d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Departments</span> 
                        </a>
                          <ul class="dropdown-menu position-absolute" aria-labelledby="dropdownMenuLink">
                            @foreach (App\Department::where('status',1)->orderBy('sort_order', 'asc')->get() as $department)
                            <li><a class="dropdown-item" href="{{route('departments.view',$department->id)}}">{{$department->name}}</a></li>
                            @endforeach
                          </ul>
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
                        {{-- <h2 class="ftco-heading-2">Alshifa clinic</h2> --}}
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            {{-- <li class="ftco-animate"><a href="#"><span class="fab fa-tiktok fa-2x"></span></a></li> --}}
                            <li class="ftco-animate"><a href="https://www.facebook.com/alshifa.kw" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/alshifa.kw/" target="_blank"><span class="icon-instagram"></span></a></li>
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
                                <li><span class="icon icon-map-marker"></span><span class="text">Kuwait</span></li>
                                {{-- <li><a target="_blank" href="//api.whatsapp.com/send?phone=905550243555MOBILE_NUMBER&text=Hello"><span class="icon icon-phone"></span><span class="text">+90 555 024 35 55</a></span></li> --}}
                                <li><a target="_blank" href="//api.whatsapp.com/send?phone=96566670028MOBILE_NUMBER&text=Hello"><span class="icon icon-phone"></span><span class="text">+96566670028</a></span></li>
                                <li><a href = "mailto: info@alshifa-kw.com"><span class="icon icon-envelope pr-4"></span><span
                                            class="text">info@alshifa-kw.com</span></a></li>
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

    {{-- <div class="floating-container">
        <div class="floating-button">+</div>
        <div class="element-container">

          <a target="_blank" href="//api.whatsapp.com/send?phone=905550243555MOBILE_NUMBER&text=Hello"> <span style="background: #7541b5" class="float-element tooltip-left">
            <i class="material-icons">phone
            </i></a>
          </span>
          <a target="_blank" href="//api.whatsapp.com/send?phone=96566670028MOBILE_NUMBER&text=Hello"><span style="background: #FE4979" class="float-element">
            <i class="material-icons">phone</i></a>
          </span>
          <a href="mailto: info@alshifa-kw.com"> <span style="background: #e26687" class="float-element">
            <i class="material-icons">email
      </i></a>
          </span>

        </div>
      </div> --}}

      <a href="https:////api.whatsapp.com/send?phone=96566670028MOBILE_NUMBER&text=Hello" class="whatsapp" target="_blank">
        <i class="fa fa-whatsapp my-whatsapp"></i>
        </a>

        {{-- <a href="https:////api.whatsapp.com/send?phone=905550243555MOBILE_NUMBER&text=Hello" class="whatsapp my-whatsapp2" target="_blank">
        <i class="fa fa-whatsapp my-whatsapp"></i>
        </a> --}}

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
    var base_color = "rgb(230,230,230)";
    var active_color = "rgb(113 52 189)";

    var child = 1;
    var length = $(".section").length - 1;
    $("#prev").addClass("disabled");
    $("#submit").addClass("disabled");

    $(".section").not(".section:nth-of-type(1)").hide();
    $(".section").not(".section:nth-of-type(1)").css('transform','translateX(100px)');

    var svgWidth = length * 200 + 24;
    $("#svg_wrap").html(
    '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
        svgWidth +
        ' 24" xml:space="preserve"></svg>'
    );

    function makeSVG(tag, attrs) {
    var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
    for (var k in attrs) el.setAttribute(k, attrs[k]);
    return el;
    }

    for (i = 0; i < length; i++) {
    var positionX = 12 + i * 200;
    var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
    document.getElementById("svg_form_time").appendChild(rect);
    // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
    var circle = makeSVG("circle", {
        cx: positionX,
        cy: 12,
        r: 12,
        width: positionX,
        height: 6
    });
    document.getElementById("svg_form_time").appendChild(circle);
    }

    var circle = makeSVG("circle", {
    cx: positionX + 200,
    cy: 12,
    r: 12,
    width: positionX,
    height: 6
    });
    document.getElementById("svg_form_time").appendChild(circle);

    $('#svg_form_time rect').css('fill',base_color);
    $('#svg_form_time circle').css('fill',base_color);
    $("circle:nth-of-type(1)").css("fill", active_color);


    $(".button").click(function () {
    $("#svg_form_time rect").css("fill", active_color);
    $("#svg_form_time circle").css("fill", active_color);
    var id = $(this).attr("id");
    if (id == "next") {
        // if(!document.getElementById('department').checked){
        // alert('please choose a department');
        // return false;
        // }
        // if(!document.getElementById('hotel').checked){
        //     alert('please choose a hotel');
        // return false;
        // }
        // if(!document.getElementById('transfer').checked){
        //     alert('please choose a transfer');
        // return false;
        // }
        // if(!document.getElementById('hospital').checked){
        //     alert('please choose a hospital');
        // return false;
        // }

        $("#prev").removeClass("disabled");
        if (child >= length) {
        $(this).addClass("disabled");
        $('#submit').removeClass("disabled");
        }
        if (child <= length) {
        child++;
        }
    } else if (id == "prev") {
        $("#next").removeClass("disabled");
        $('#submit').addClass("disabled");
        if (child <= 2) {
        $(this).addClass("disabled");
        }
        if (child > 1) {
        child--;
        }
    }
    var circle_child = child + 1;
    $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
        "fill",
        base_color
    );
    $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
        "fill",
        base_color
    );
    var currentSection = $(".section:nth-of-type(" + child + ")");
    currentSection.fadeIn();
    currentSection.css('transform','translateX(0)');
    currentSection.prevAll('.section').css('transform','translateX(-100px)');
    currentSection.nextAll('.section').css('transform','translateX(100px)');
    $('.section').not(currentSection).hide();
    });

    });
</script>
</body>

</html>
