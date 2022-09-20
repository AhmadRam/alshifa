@extends('layouts.master')
<?php $locale = app()->getLocale(); ?>
@section('content')
    <section class="hero-wrap js-fullheight" style="background-image: url({{ asset('asset/images/bg_3.jpg') }});"
        data-section="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 pt-5 ftco-animate">
                    <div class="mt-5 text-{{ $locale == 'ar' ? 'end' : 'start' }}">
                        <span class="subheading">{{ trans('Welcome to Alshifa CLINIC') }}</span>
                        <h1 class="mb-4">{{ trans('We are here') }} <br>{{ trans('for your Healthcare') }}</h1>
                        <p class="mb-4">
                            {{ trans('Alshifa clinic has reached a high patient satisfaction, which is the reason behind the medical reputation of Alshifa Clinic in the medical sector') }}.
                        </p>
                        <p><a href="{{ route('customer.operation-plans.view') }}"
                                class="btn btn-primary py-3 px-4">{{ trans('Plan Your Journey') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
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
                            <div
                                class="col-md-12 head ing-section ftco-animate p-4 p-lg-5 text-{{ $locale == 'ar' ? 'end' : 'start' }}">
                                <h2 class="mb-4">{{ trans('We Are') }} <span>{{ trans('Alshifa') }}</span>
                                    {{ trans('Clinic') }}</h2>
                                <p>{{ trans('Alshifa Clinic project aims to provide a safe and reliable environment for people coming from all over the world to obtain health care for international patients in Istanbul, highly qualified medical staff, surgeons and professors in various medical fields, and by contracting with the best hospitals designed according to international standards and the best health care providers in Istanbul, we strive to provide high quality services, smooth post-operative care, and a clean and healthy recovery environment. We also offer you a comfortable travel environment through our agreements with the best tourist facilities, transportation services and hotel services') }}
                                </p>
                                <p><a href="/appointment"
                                        class="btn btn-primary py-3 px-4">{{ trans('FREE CONSULTATION') }}</a> <a
                                        href="/#about-section"
                                        class="btn btn-secondary py-3 px-4">{{ trans('Contact us') }}</a></p>
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
                                <h2 class="mb-3">{{ trans('Our Services') }}</h2>
                            </div>
                        </div>
                        <div class="row">

                            @foreach ($our_services as $our_service)
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex ">
                                            @if ($our_service->icon)
                                                <span class="{{ $our_service->icon }}"></span>
                                            @else
                                                <img class="w-50" src="{{ asset('asset/images/loc.png') }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">{{ $our_service->{'title_' . $locale} }}</h3>
                                            <p>{{ $our_service->{'description_' . $locale} }}</p>
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
                            @if ($number == 1 || $number == 4 || $number == 7 || $number == 10 || $number == 13)
                                <div class="col-md-3">
                            @endif
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center" style="height: 170px;">
                                    <div class="icon">
                                        <img src="{{ Voyager::image((json_decode($department->photo)[0] ?? null)) }}" height="80px">
                                    </div>
                                    <h3><a
                                            href="{{ route('departments.view', $department->id) }}">{{ $department->{'name_' . $locale} }}</a>
                                    </h3>
                                    <p>{{ $department->{'short_description_' . $locale} }}</p>
                                </div>
                            </div>
                            @if ($number == 3 || $number == 6 || $number == 9 || $number == 12 || $number == 15)
                    </div>
                    @endif
                    @endforeach
                    {{-- <div class="department-wrap p-4 ftco-animate">
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
                    </div> --}}
                </div>

                {{-- <div class="col-md-4">
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
        <div class="container px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">{{ trans('Our Hospitals') }}</h2>
                </div>
            </div>
            <div class="homeSwiper">
                <div class="swiper-wrapper d-flex">
                    @foreach ($hospitals as $key => $item)
                        <div class="swiper-slide ftco-animate">
                            <div class="staff hospitalsCard">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch ovarflow-hidden"
                                        style="background-image: url({{ Voyager::image(json_decode($item->photo)[0] ?? null) }}">
                                    </div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3 class="mb-2">{{ $item->{'name_' . $locale} }}</h3>
                                    <div class="faded">
                                        <p>{{ $item->{'short_description_' . $locale} }}</p>
                                        <ul class="ftco-social">
                                            <li class="ftco-animate">
                                                <a href="#"><span class="icon-twitter"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-google-plus"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span span class="icon-instagram"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="">
                                            <a href="{{ route('hospitals.view', $item->id) }}" class="btn btn-primary">
                                                View
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-facts img ftco-counter" style="background-image: url({{ asset('asset/images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <div class="row pt-4">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{ $departments->count() }}">0</strong>
                                    <span>{{ trans('Number of departments') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="2658">0</strong>
                                    <span>{{ trans('Satisfied Patients') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="34">0</strong>
                                    <span>{{ trans('Number of Doctors') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{ $hospitals->count() }}">0</strong>
                                    <span>{{ trans('Number of Hospitals') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="Hotels-section">
        <div class="container px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">{{ trans('Our Hotels') }}</h2>
                </div>
            </div>
            <div class="homeSwiper">
                <div class="swiper-wrapper d-flex">
                    @foreach ($hotels as $key => $item)
                        <div class="swiper-slide ftco-animate">
                            <div class="staff hospitalsCard">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch ovarflow-hidden"
                                        style="background-image: url({{ Voyager::image(json_decode($item->photo)[0] ?? null) }}">
                                    </div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3 class="mb-2">{{ $item->{'name_' . $locale} }}</h3>
                                    <div class="faded">
                                        <p>{{ $item->{'short_description_' . $locale} }}</p>
                                        <ul class="ftco-social">
                                            <li class="ftco-animate">
                                                <a href="#"><span class="icon-twitter"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-google-plus"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span span class="icon-instagram"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="">
                                            <a href="{{ route('hospitals.view', $item->id) }}" class="btn btn-primary">
                                                View
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4">{{ trans('Our doctors researches') }}</h2>
                    <p>{{ trans('Get the most accurate and up to date medical information through out our researchers') }}
                    </p>
                </div>
            </div>
            <div class="secondSwiper">
                <div class="swiper-wrapper d-flex">
                    @foreach ($researches as $key => $item)
                        <div class="swiper-slide ftco-animate">
                            <div class="staff hospitalsCard">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch ovarflow-hidden"
                                        style="background-image: url({{ Voyager::image(json_decode($item->photo)[0] ?? null) }}">
                                    </div>
                                </div>
                                <div class="text pt-3 text-start">
                                    <h3 class="mb-2">{{ $item->{'name_' . $locale} }}</h3>
                                    <div class="faded">
                                        <p>{{ $item->{'short_description_' . $locale} }}</p>
                                        <ul class="ftco-social">
                                            <li class="ftco-animate">
                                                <a href="#"><span class="icon-twitter"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span class="icon-google-plus"></span>
                                                </a>
                                            </li>
                                            <li class="ftco-animate">
                                                <a href="#">
                                                    <span span class="icon-instagram"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="">
                                            <a href="{{ route('hospitals.view', $item->id) }}" class="btn btn-primary">
                                                View
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img"
        style="background-image: url({{ asset('asset/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">{{ trans('Read testimonials') }}</span>
                    <h2 class="mb-4">{{ trans('Our Patient Says') }}</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach ($patientsComments as $patientsComment)
                            <div class="item" style="background-color: #7b59a466">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="text px-4">
                                        <h2 class="mb-4" style="color: black">{{ $patientsComment->comment }}</h2>
                                        @for ($i = 0; $i < $patientsComment->rating; $i++)
                                            <span class="fa fa-star" style="color: orange"></span>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $patientsComment->rating; $i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                        <h4 class="name">{{ $patientsComment->name }}</h4>
                                        <span class="position">{{ $patientsComment->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p style="text-align: center;margin-top: 40px;"><a
                            href="{{ route('customer.patients-comment.view') }}"
                            class="btn btn-primary py-2 px-3">{{ trans('Write your review') }}</a></p>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <p>{{ trans('CONTACT US') }}</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <p>Kuwait</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <p><a href="//api.whatsapp.com/send?phone=96566670028MOBILE_NUMBER&text=Hello">+96566670028</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <p><a href="mailto:info@alshifa-kw.com">info@alshifa-kw.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <p><a href="https://alshifa-kw.com">alshifa-kw.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const secondSwiper = new Swiper('.secondSwiper', {
            centeredSlides: true,
            loop: true,
            dir: rtl,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                }
            }
        });
        const homeSwiper = new Swiper('.homeSwiper', {
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                }
            }
        });
        $(document).ready(function() {

            var slidewidth = $('.hospitalsSwiper .swiper-slide').css('width');
            $('.hospitalsSwiper .hospitalsCard').css('width', slidewidth);
        });
    </script>
@endsection
