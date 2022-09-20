@extends('layouts.master')
<?php $locale = app()->getLocale(); ?>
@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ Voyager::image(json_decode($research->banner_photo)[0] ?? null) }});height:400px"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-4">
                    <h1 class="mb-3 bread" style="padding-bottom: 285px;text-align: center">{{ $research->{'name_' . $locale} }}
                    </h1>
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
                {{-- <div class="col-md-7 py-5">
                    <div class="py-lg-5">
                        <div class="row justify-content-center pb-5">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-3">{{ $research->{'title_' . $locale} }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="media-body pl-md-4">
                                        <p>{{ $research->{'description_' . $locale} }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12 d-flex m-4">
                    <div class="appointment-wrap bg-white p-5 d-flex align-items-center">
                        <div class="row justify-content pb-5" style="width: 100%">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-3">{{ $research->{'title_' . $locale} }}</h2>
                            </div>

                            <div class="col-md-10 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="media-body pl-md-4">
                                        <p>{{ $research->{'description_' . $locale} }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="carouselExampleControls" class="col-md-4 carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if (is_array(json_decode($research->photo)))
                                    @foreach (json_decode($research->photo) as $key => $photo)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ Voyager::image($photo) }}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{ trans('Previous') }}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{ trans('Next') }}</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
