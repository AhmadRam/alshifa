@extends('layouts.master')

@section('content')
    <section class="hero-wrap js-fullheight" style="background-image: url({{ asset('asset/images/bg_3.jpg') }});"
        data-section="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 pt-5 ftco-animate">
                    <div class="mt-5">
                        <span class="subheading">Welcome to MAGICIST CLINIC</span>
                        <h1 class="mb-4">We are here <br>for your Healthcare</h1>
                        <p class="mb-4">Magicist clinic has reached a high patient satisfaction, which is the reason
                            behind the medical reputation of Magicist Clinic in the medical sector.</p>
                        <p><a href="{{ route('customer.operation-plans.view') }}" class="btn btn-primary py-3 px-4">Plan
                                Your Journey</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url({{ asset('asset/images/about.jpg') }});">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                <h2 class="mb-4">We Are <span>Magicist</span> Clinic</h2>
                                <p>Magicist Clinic project aims to provide a safe and reliable environment for people coming
                                    from all over the world to obtain health care for international patients in Istanbul,
                                    highly qualified medical
                                    staff, surgeons and professors in various medical fields, and by contracting
                                    with the best hospitals designed according to international standards and the best
                                    health care providers in Istanbul, we strive to provide high quality services, smooth
                                    post-operative care, and a clean and healthy recovery environment. We also offer you a
                                    comfortable travel environment through our agreements with the best tourist facilities,
                                    transportation services and hotel services</p>
                                <p><a href="/appointment" class="btn btn-primary py-3 px-4">FREE CONSULTATION</a> <a
                                        href="/#about-section" class="btn btn-secondary py-3 px-4">Contact us</a></p>
                            </div>
                        </div>
                    </div>
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
                                <h2 class="mb-3">Our Services</h2>
                            </div>
                        </div>
                        <div class="row">

                            @foreach ($our_services as $our_service)
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex"><span
                                                class="{{ $our_service->icon }}"></span></div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">{{ $our_service->title }}</h3>
                                            <p>{{ $our_service->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                        @include('consultationForm')
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-intro img" style="background-image: url({{ asset('asset/images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2>Your Health is Our Priority</h2>
                    <p>We can manage your dream building A small river named Duden flows by their place</p>
                    <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="img img-dept align-self-stretch"
                        style="background-image: url({{ asset('asset/images/dept-1.jpg') }});"></div>
                </div>

                <div class="col-md-8">
                    <div class="row no-gutters">
                        <?php $number = 0; ?>
                        @foreach ($departments as $department)
                            <?php $number++; ?>
                            @if ($number == 1 || $number == 4 || $number == 7 || $number == 10)
                                <div class="col-md-4">
                            @endif
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a
                                            href="{{ route('departments.view', $department->id) }}">{{ $department->name }}</a>
                                    </h3>
                                    <p>{{ $department->short_description }}</p>
                                </div>
                            </div>
                            @if ($number == 3 || $number == 6 || $number == 9)
                    </div>
                    @endif
                    @endforeach


                    {{-- <div class="col-md-4">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Opthalmology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Cardiology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Traumatology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Nuclear Magnetic</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">X-ray</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">Cardiology</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section" id="Hospitals-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Hospitals</h2>
                    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p> --}}
                </div>
            </div>

            <div class="row mx-auto my-auto">
                <div id="hospitals" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $skip = 0;
                        $isLoop = true;
                        ?>
                        @while ($isLoop)
                            <div class="carousel-item py-8 {{ $skip == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <?php $hospitalsSliders = \App\Hospital::orderBy('sort_order', 'asc')
                                        ->skip($skip)
                                        ->take(4)
                                        ->get(); ?>
                                    @foreach ($hospitalsSliders as $key => $hospitalSlider)
                                        <div class="col col{{ $key + 1 }}">
                                            <div class="col-md-12 ftco-animate">
                                                <div class="staff" style="max-width: 336px">
                                                    <div class="img-wrap d-flex align-items-stretch">
                                                        <div class="img align-self-stretch"
                                                            style="background-image: url({{ Voyager::image(json_decode($hospitalSlider->photo)[0] ?? null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="text pt-3 text-center">
                                                        <h3 class="mb-2">{{ $hospitalSlider->name }}</h3>
                                                        {{-- <span class="position mb-2">Neurologist</span> --}}
                                                        <div class="faded">
                                                            <p>{{ $hospitalSlider->short_description }}</p>
                                                            <ul class="ftco-social text-center">
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-twitter"></span></a>
                                                                </li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-facebook"></span></a></li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-google-plus"></span></a></li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-instagram"></span></a></li>
                                                            </ul>
                                                            <p><a href="#" class="btn btn-primary">View</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($key == 3) {
                                            $skip = $skip + 4;
                                        }
                                        ?>
                                    @endforeach

                                </div>
                            </div>
                            <?php if ($hospitalsSliders->count() != 4) {
                                break;
                            }
                            ?>
                        @endwhile

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="carousel-control-prev text-dark" href="#hospitals" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-dark" href="#hospitals" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="ftco-facts img ftco-counter" style="background-image: url({{ asset('asset/images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 heading-section heading-section-white">
                    <span class="subheading">Fun facts</span>
                    <h2 class="mb-4">Over 5,468 patients trust us</h2>
                    <p class="mb-0"><a href="/appointment" class="btn btn-secondary px-4 py-3">Make an appointment</a>
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="row pt-4">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{ $departments->count() }}">0</strong>
                                    <span>Number of departments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="2658">0</strong>
                                    <span>Satisfied Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="34">0</strong>
                                    <span>Number of Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{ $hospitals->count() }}">0</strong>
                                    <span>Number of Hospitals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="Hotels-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Hotels</h2>
                    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p> --}}
                </div>
            </div>
            <div class="row mx-auto my-auto">
                <div id="hotels" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $skip = 0;
                        $isLoop = true;
                        ?>
                        @while ($isLoop)
                            <div class="carousel-item py-8 {{ $skip == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <?php $hotelsSliders = \App\Hotel::orderBy('sort_order', 'asc')
                                        ->skip($skip)
                                        ->take(4)
                                        ->get(); ?>
                                    @foreach ($hotelsSliders as $key => $hotelSlider)
                                        <div class="col col{{ $key + 1 }}">
                                            <div class="col-md-12 ftco-animate">
                                                <div class="staff" style="max-width: 336px">
                                                    <div class="img-wrap d-flex align-items-stretch">
                                                        <div class="img align-self-stretch"
                                                            style="background-image: url({{ Voyager::image(json_decode($hotelSlider->photo)[0] ?? null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="text pt-3 text-center">
                                                        <h3 class="mb-2">{{ $hotelSlider->name }}</h3>
                                                        {{-- <span class="position mb-2">Neurologist</span> --}}
                                                        <div class="faded">
                                                            <p>{{ $hotelSlider->short_description }}</p>
                                                            <ul class="ftco-social text-center">
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-twitter"></span></a>
                                                                </li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-facebook"></span></a></li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-google-plus"></span></a></li>
                                                                <li class="ftco-animate"><a href="#"><span
                                                                            class="icon-instagram"></span></a></li>
                                                            </ul>
                                                            <p><a href="#" class="btn btn-primary">View</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($key == 3) {
                                            $skip = $skip + 4;
                                        }
                                        ?>
                                    @endforeach

                                </div>
                            </div>
                            <?php if ($hotelsSliders->count() != 4) {
                                break;
                            }
                            ?>
                        @endwhile

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="carousel-control-prev text-dark" href="#hotels" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-dark" href="#hotels" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our doctors researches</h2>
                    <p>Get the most accurate and up to date medical information through out our researchers</p>
                </div>
            </div>
            <div class="row mx-auto my-auto">
                <div id="esearchs" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $skip = 0;
                        $isLoop = true;
                        ?>
                        @while ($isLoop)
                            <div class="carousel-item py-8 {{ $skip == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <?php $researches = \App\Research::skip($skip)
                                        ->take(4)
                                        ->get(); ?>
                                    @foreach ($researches as $key => $researche)
                                        <div class="col col{{ $key + 1 }}">
                                            <div class="col-md-4 ftco-animate">
                                                <div class="blog-entry">
                                                    <a href="#" class="block-20"
                                                        style="background-image: url({{ Voyager::image($researche->photo) }})">
                                                    </a>
                                                    <div class="text d-block">
                                                        <div class="meta mb-3">
                                                            <div><a
                                                                    href="#">{{ $researche->created_at->format('Y.m.d H:i:s') }}</a>
                                                            </div>
                                                            {{-- <div><a href="#">Admin</a></div> --}}
                                                            {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                                                        </div>
                                                        <h3 class="heading"><a
                                                                href="#">{{ $researche->short_description }}.</p>
                                                                <p><a href="#"
                                                                        class="btn btn-primary py-2 px-3">Read more</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($key == 3) {
                                                $skip = $skip + 4;
                                            }
                                            ?>
                                    @endforeach

                                </div>
                            </div>
                            <?php if ($researches->count() != 4) {
                                break;
                            }
                            ?>
                        @endwhile

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="carousel-control-prev text-dark" href="#esearchs" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-dark" href="#esearchs" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img"
        style="background-image: url({{ asset('asset/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Read testimonials</span>
                    <h2 class="mb-4">Our Patient Says</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach ($patientsComments as $patientsComment)
                            <div class="item" style="background-color: #7b59a466">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    {{-- <div class="user-img"
                                        style="background-image: url({{ Voyager::image($patientsComment->photo) }})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div> --}}
                                    <div class="text px-4">
                                        <h2 class="mb-4" style="color: black">{{ $patientsComment->comment }}</h2>
                                        @for ($i = 0; $i < $patientsComment->rating; $i++)
                                            <span class="fa fa-star" style="color: orange"></span>
                                        @endfor
                                        @for ($i = 0; $i < (5 - $patientsComment->rating); $i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                        <h4 class="name">{{ $patientsComment->name }}</h4>
                                        <span class="position">Patients</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <p>Ataköy 7-8-9-10 kısım mh. Çobançeşme E-5 yanyol CD. No:12 Daire:A119 Nivo Ataköy rezidans
                            Bakırköy/İSTANBUL</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <p><a href="tel://+90 555 024 35 55">+90 555 024 35 55</a></p>
                        <p><a href="tel://+90 555 041 35 55">+90 555 041 35 55</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <p><a href="mailto:info@magicist.co">info@magicist.co</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <p><a href="https://magicist.co">magicist.co</a></p>
                    </div>
                </div>
            </div>
            {{-- <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
