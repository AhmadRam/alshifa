@extends('layouts.master')
<?php $locale = app()->getLocale(); ?>


@section('body-class', 'department')

@section('css')
    <link rel="stylesheet" href="{{ asset('dist/css/new-style.css') }}">
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2"
style="background-image: url({{ Voyager::image(json_decode($department->banner_photo)[0] ?? null) }});height:400px"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread" style="padding-bottom: 285px;text-align: center">
                {{ $department->{'name_' . $locale} }}</h1>
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
        <div class="col-md-12 d-flex m-4">
            <div class="appointment-wrap bg-white p-md-5 d-flex align-items-center">
                <div class="row justify-content pb-5" style="width: 100%">
                    {{-- <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-3">{{ $department->{'name_' . $locale} }}</h2>
                    </div> --}}

                    <div class="col-md-10 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-flex">
                            <div class="media-body pl-md-4">
                                <p>{!! $department->{'description_' . $locale} !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
@endsection
