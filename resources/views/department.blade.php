@extends('layouts.master')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ Voyager::image(json_decode($department->banner_photo)[0]) }});height:400px"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-4">
                    <h1 class="mb-3 bread" style="padding-bottom: 285px;text-align: center">{{ $department->name }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 py-5">
                    <div class="py-lg-5">
                        <div class="row justify-content-center pb-5">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-3">{{ $department->title }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="media-body pl-md-4">
                                        <p>{{ $department->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="appointment-wrap bg-white p-5 d-flex align-items-center">

                        <div class="slideshow-container">
                            @foreach (json_decode($department->photo) as $key => $photo)
                                <div class="mySlides fade">
                                    <div class="numbertext">{{ $key + 1 }} /
                                        {{ count(json_decode($department->photo)) }}</div>
                                    <img src="{{ Voyager::image($photo) }}" style="width:100%">
                                    <div class="text"></div>
                                </div>
                            @endforeach
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>


                        <div style="text-align:center">
                            @foreach (json_decode($department->photo) as $photo)
                                <span class="dot" hidden></span>
                            @endforeach
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endsection
