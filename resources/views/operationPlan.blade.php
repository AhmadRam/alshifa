@extends('layouts.master')
<?php $locale = app()->getLocale() ?>
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .swiper-pagination-bullet {
            background: #7134bd;
        }

        .swiper-button-next,
        .swiper-rtl .swiper-button-prev {
            color: #7134bd;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #7134bd;
        }
    </style>
@endsection

@section('content')
    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb container" id="operation_plan">
        <div id="svg_wrap"></div>
        <div class="body">

            <form method="POST" action="{{ route('customer.operation-plans.store') }}">
                @csrf
                <h1 class="h1">{{ trans('Operation Plan') }}</h1>

                {{-- <section class="section"> --}}
                <section class="section">
                    <h3>{{ trans('Choose Department') }} :</h3>
                    <div class="mainSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($departments as $key => $item)
                                <div class="swiper-slide">
                                    {{-- <input id="department-{{ $key }}" type="radio" name="department_id" required
                                        value="{{ $item->id }}" onchange="getHospital({{ $item->id }})"> --}}
                                    <input id="department-{{ $key }}" type="radio" name="department_id" required
                                        value="{{ $item->id }}" onchange="getHospital({{ $item->id }})">
                                    <?php $image = !is_array(json_decode($item->photo)) ? asset('asset/images/Logo.png') : Voyager::image(json_decode($item->photo)[0]); ?>
                                    <img class="w-100" src="{{ $image }}" alt="{{ $item->{'title_' . $locale} }}"
                                        title="{{ $item->{'title_' . $locale} }}">
                                    <p>{{ $item->{'name_' . $locale} }}</p>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                </section>

                <section class="section">
                    <h3>{{ trans('Choose Hospital') }} :</h3>
                    {{-- <div class="mainSwiper">
                        <div class="swiper-wrapper" id="hospitals">
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div> --}}

                    <div class="mainSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($hospitals as $key => $item)
                                <div class="swiper-slide">
                                    <input id="department-{{ $key }}" type="radio" name="department_id" required
                                        value="{{ $item->id }}">
                                    <?php $image = !is_array(json_decode($item->photo)) ? asset('asset/images/Logo.png') : Voyager::image(json_decode($item->photo)[0]); ?>
                                    <img class="w-100" src="{{ $image }}" alt="{{ $item->{'title_' . $locale} }}"
                                        title="{{ $item->{'title_' . $locale} }}">
                                    <p>{{ $item->{'name_' . $locale} }}</p>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                </section>

                <section class="section">
                    <h3>{{ trans('Choose Hotels') }} :</h3>


                    <div class="mainSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($hotels as $key => $item)
                                <div class="swiper-slide">
                                    <input id="department-{{ $key }}" type="radio" name="department_id" required
                                        value="{{ $item->id }}" onchange="getHospital({{ $item->id }})">
                                    <?php $image = !is_array(json_decode($item->photo)) ? asset('asset/images/Logo.png') : Voyager::image(json_decode($item->photo)[0]); ?>
                                    <img class="w-100" src="{{ $image }}" alt="{{ $item->{'title_' . $locale} }}"
                                        title="{{ $item->{'title_' . $locale} }}">
                                    <p>{{ $item->{'name_' . $locale} }}</p>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                </section>

                <section class="section">
                    <h3>{{ trans('Choose Transfer') }} :</h3>
                    <div class="transfers-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($transfers as $key => $item)
                                <div class="swiper-slide">
                                    <input id="department-{{ $key }}" type="radio" name="department_id" required
                                        value="{{ $item->id }}" onchange="getHospital({{ $item->id }})">
                                    <?php $image = !is_array(json_decode($item->photo)) ? asset('asset/images/Logo.png') : Voyager::image(json_decode($item->photo)[0]); ?>
                                    <img class="w-100" src="{{ $image }}" alt="{{ $item->{'title_' . $locale} }}"
                                        title="{{ $item->{'title_' . $locale} }}">
                                    <p>{{ $item->{'name_' . $locale} }}</p>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>

                </section>

                <section class="section">
                    <h3>{{ trans('Personal information') }} :</h3>
                    <input class="input" type="text" name="full_name" placeholder="Full Name" required />
                    <input class="input" type="text" name="email" placeholder="E-mail" required />
                    <input class="input" type="text" name="phone" placeholder="Phone" />
                </section>
                <div class="button" id="prev">&larr; {{ trans('Previous') }}</div>
                <button class="button" id="next">{{ trans('Next') }} &rarr;</button>
                <input type="submit" class="button" id="submit" value="Agree and send application" />
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function getHospital(id) {
            let url = `/getHospitals/${id}`;
            $.ajax({
                url: url,
                type: 'get',
                success: function(data) {
                    document.getElementById('hospitals').innerHTML = '';
                    data.data.forEach(item => {
                        document.getElementById('hospitals').innerHTML +=
                            `<div class="swiper-slide" >
                                <input type="radio" name="hospital_id" id="hospital-${item.id}" value="${item.id}">
                                <img src="${window.location.protocol}//${window.location.host}/storage/${item.photo}">
                                <p>${item.name}</p>
                            </div>`;
                    });
                }
            });
        }
        const swiper = new Swiper('.mainSwiper', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 4,
            spaceBetween: 20,
            grid: {
                rows: 2,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                    grid: {
                        rows: 2,
                    },
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    grid: {
                        rows: 2,
                    },
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    grid: {
                        rows: 2,
                    },
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    grid: {
                        rows: 2,
                    },
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    grid: {
                        rows: 2,
                    },
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    grid: {
                        rows: 2,
                    },
                }

            },
            activeClass: 'swiper-slide-active',
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
        const transfers_swiper = new Swiper('.transfers-swiper', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
        $(document).ready(function() {
            $('.swiper-slide').click(function() {
                $(this).find('input[type="radio"]').prop('checked', true);

                document.querySelector('#next').removeAttribute('disabled', 'disabled');
            });
            if ($('input[name="department_id"]').is(':checked') == false) {
                document.querySelector('#next').setAttribute('disabled', 'disabled')
            } else {
                document.querySelector('#next').removeAttribute('disabled', 'disabled');
            }
        });
        // set button disabled for not selected department
    </script>
@endsection
