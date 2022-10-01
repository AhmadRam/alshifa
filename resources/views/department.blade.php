@extends('layouts.master')
<?php $locale = app()->getLocale(); ?>


@section('body-class', 'department')

@section('css')
    <link rel="stylesheet" href="{{ asset('dist/css/new-style.css') }}">
@endsection

@section('content')
    <div class="container">
        <section class="head-section ftco-section ftco-no-pt ftco-no-pb ftco-services-1">
            <img src="{{ asset('asset/images/smile.jpg') }}" alt="">
            <h1>
                {{ $department->{'name_' . $locale} }}
            </h1>
        </section>
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light description-content">
            <div class="description">{!! $department->{'description_' . $locale} !!}</div>
        </section>
    </div>
@endsection
