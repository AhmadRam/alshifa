@extends('layouts.master')

@section('content')
    <section class="hero-wrap js-fullheight" style="background-image: url({{ asset('asset/images/bg_3.jpg') }});"
        data-section="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 pt-5 ftco-animate">
                    <div class="mt-5">
                        <span class="subheading">Welcome to Magicist</span>
                        <h1 class="mb-4">We are here <br>for your Care</h1>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        <p><a href="/appointment" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
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
                                    from all over the world to obtain health care in Istanbul, highly qualified medical
                                    staff, surgeons and university professors in various medical fields, and by contracting
                                    with the best hospitals designed according to international standards and the best
                                    health care providers in Istanbul, we strive to provide high quality services, smooth
                                    post-operative care, and a clean and healthy recovery environment. We also offer you a
                                    comfortable travel environment through our agreements with the best tourist facilities,
                                    transportation services and hotel services</p>
                                <p><a href="/appointment" class="btn btn-primary py-3 px-4">Make an appointment</a> <a
                                        href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
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
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-ambulance"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Emergency Services</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-doctor"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Qualified Doctors</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-stethoscope"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Outdoors Checkup</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-24-hours"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">24 Hours Service</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                        <form method="POST" action="{{ route('customer.consultations.store') }}"
                            class="appointment-form ftco-animate" enctype='multipart/form-data'>
                            @csrf
                            <h3>Free Consultation</h3>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name" name="full_name"
                                        required>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="branch_id" id="" class="form-control" required>
                                                <option value="">branch</option>
                                                @foreach ($branchs as $branch)
                                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                </div>

                            </div>
                            <div class="">
                                <div class="form-group">
                                    <textarea name="description" id="" cols="30" rows="2" class="form-control"
                                        placeholder="description"></textarea>
                                </div>

                                <div id="fileBtn" onclick="getFile()">click to upload a file</div>
                                <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile"
                                        name="document" type="file" value="upload" onchange="sub(this)" /></div>

                                <div class="form-group">
                                    <input type="submit" value="Consult Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro img" style="background-image: url({{ asset('asset/images/bg_2.jpg') }});">
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
    </section>

    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="department-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-8 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Operation Plan</h2>
                        <p>Fill all form field to go to next step</p>

                        <form id="msform" method="POST" action="{{ route('customer.operation-plans.store') }}">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>informations</strong></li>
                                <li id="personal"><strong>branch & hospital</strong></li>
                                <li id="payment"><strong>hotel</strong></li>
                                <li id="confirm"><strong>transfer</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <br>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Informations :</h2>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding-left: 25px">
                                        <input type="text" class="form-control" placeholder="Full Name"
                                            name="full_name" required>
                                        <input type="text" class="form-control" placeholder="E-mail" name="email"
                                            required>
                                        <input type="text" class="form-control" placeholder="Phone" name="phone"
                                            required>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next btn btn-secondary py-3 px-4"
                                    value="Next" style="height:55px; width:85px" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">choose branch :</h2>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div>
                                    @foreach ($branchs as $key => $branch)
                                        <label style="padding: 10px" id="selected_branch">
                                            <input type="radio" name="branch_id" id="{{ $key }}"
                                                value="{{ $branch->id }}" {{ $key == 0 ? 'checked' : '' }} onchange="getHospital({{ $branch->id }})">
                                            <img src="{{ Voyager::image($branch->photo) }}" height="100px">
                                            <p style="text-align: center">{{ $branch->name }}</p>
                                        </label>
                                    @endforeach
                                    <div id="hospitals">

                                    </div>
                                </div>
                                <input type="button" name="previous"
                                    class="previous btn btn-outline-secondary py-3 px-4-previous" value="Previous"
                                    style="height:55px; width:95px" />
                                <input type="button" name="next" class="next btn btn-secondary py-3 px-4"
                                    value="Next" style="height:55px; width:85px" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">choose hotel:</h2>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div>
                                    @foreach ($hotels as $key => $hotel)
                                        <label style="padding: 10px">
                                            <input type="radio" name="hotel_id" id ="{{ $key }}"
                                                value="{{ $hotel->id }}" {{ $key == 0 ? 'checked' : '' }}>
                                            <img src="{{ Voyager::image($hotel->photo) }}" height="100px">
                                            <p style="text-align: center">{{ $hotel->name }}</p>
                                        </label>
                                    @endforeach
                                </div>
                                <input type="button" name="previous"
                                    class="previous btn btn-outline-secondary py-3 px-4-previous" value="Previous"
                                    style="height:55px; width:95px" />
                                <input type="button" name="next" class="next btn btn-secondary py-3 px-4"
                                    value="Next" style="height:55px; width:85px" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">choose transfer:</h2>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div>
                                    @foreach ($transfers as $key => $transfer)
                                        <label style="padding: 10px">
                                            <input type="radio" name="transfer_id" id="{{ $key }}"
                                                value="{{ $transfer->id }}" {{ $key == 0 ? 'checked' : '' }}>
                                            <img src="{{ Voyager::image($transfer->photo) }}" height="100px">
                                            <p style="text-align: center">{{ $transfer->name }}</p>
                                        </label>
                                    @endforeach
                                </div>
                                <input type="button" name="previous"
                                    class="previous btn btn-outline-secondary py-3 px-4-previous" value="Previous"
                                    style="height:55px; width:95px" />
                                <input type="submit" class="btn btn-secondary py-3 px-4" value="Submit"
                                    style="height:55px; width:95px" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="department-section">
        <div id="svg_wrap"></div>
        <div class="body">
            <form method="POST" action="{{ route('customer.operation-plans.store') }}">
                @csrf
            <h1 class="h1">Operation Plan</h1>
            <section class="section">
                <p class="p">Personal information</p>
                <input class="input" type="text" name="full_name" placeholder="Full Name" />
                <input class="input" type="text" name="email" placeholder="E-mail" />
                <input class="input" type="text" name="phone" placeholder="Phone" />
            </section>

            <section class="section">
                <p class="p">Branchs</p>
                @foreach ($branchs as $key => $branch)
                    <label style="padding: 10px" id="selected_branch">
                        <input type="radio" name="branch_id" id="{{ $key }}" value="{{ $branch->id }}"
                         onchange="getHospital({{ $branch->id }})">
                        <img src="{{ Voyager::image($branch->photo) }}" height="100px">
                        <p style="text-align: center">{{ $branch->name }}</p>
                    </label>
                @endforeach
            </section>

            <section class="section">
                <p class="p">Hospitals</p>
                <div id="hospitals">
                </div>
            </section>

            <section class="section">
                <p class="p">Hotels</p>
                @foreach ($hotels as $key => $hotel)
                    <label style="padding: 10px">
                        <input type="radio" name="hotel_id" id ="{{ $key }}" value="{{ $hotel->id }}"
                        >
                        <img src="{{ Voyager::image($hotel->photo) }}" height="100px">
                        <p style="text-align: center">{{ $hotel->name }}</p>
                    </label>
                @endforeach
            </section>

            <section class="section">
                <p class="p">Transfers</p>
                @foreach ($transfers as $key => $transfer)
                    <label style="padding: 10px">
                        <input type="radio" name="transfer_id" id="{{ $key }}"
                            value="{{ $transfer->id }}">
                        <img src="{{ Voyager::image($transfer->photo) }}" height="100px">
                        <p style="text-align: center">{{ $transfer->name }}</p>
                    </label>
                @endforeach
            </section>

            <div class="button" id="prev">&larr; Previous</div>
            <div class="button" id="next">Next &rarr;</div>
            <input type="submit" class="button" id="submit" value="Agree and send application"/>
        </form>
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
                        @foreach ($branchs as $branch)
                            <?php $number++; ?>
                            @if ($number == 1 || $number == 4 || $number == 7 || $number == 10)
                                <div class="col-md-4">
                            @endif
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="flaticon-stethoscope"></span>
                                    </div>
                                    <h3><a href="#">{{ $branch->name }}</a></h3>
                                    <p>{{ $branch->description }}</p>
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

    {{-- <section class="ftco-section" id="doctor-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Qualified Doctors</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('asset/images/doc-1.jpg)') }};"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="mb-2">Dr. Lloyd Wilson</h3>
                            <span class="position mb-2">Neurologist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <p><a href="#" class="btn btn-primary">Book now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('asset/images/doc-2.jpg)') }};"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="mb-2">Dr. Rachel Parker</h3>
                            <span class="position mb-2">Ophthalmologist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <p><a href="#" class="btn btn-primary">Book now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('asset/images/doc-3.jpg)') }};"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="mb-2">Dr. Ian Smith</h3>
                            <span class="position mb-2">Dentist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <p><a href="#" class="btn btn-primary">Book now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('asset/images/doc-4.jpg)') }};"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="mb-2">Dr. Alicia Henderson</h3>
                            <span class="position mb-2">Pediatrician</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <p><a href="#" class="btn btn-primary">Book now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-facts img ftco-counter" style="background-image: url({{ asset('asset/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 heading-section heading-section-white">
                    <span class="subheading">Fun facts</span>
                    <h2 class="mb-4">Over 5,100 patients trust us</h2>
                    <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
                </div>
                <div class="col-md-7">
                    <div class="row pt-4">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Happy Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="84">0</strong>
                                    <span>Number of Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Number of Staffs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Gets Every Single Updates Here</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_1.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_2.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_3.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_4.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_5.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('asset/images/image_6.jpg') }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta mb-3">
                                <div><a href="#">June 9, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                        </div>
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
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img"
                                    style="background-image: url({{ asset('asset/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text px-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img"
                                    style="background-image: url({{ asset('asset/images/person_2.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text px-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img"
                                    style="background-image: url({{ asset('asset/images/person_3.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text px-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img"
                                    style="background-image: url({{ asset('asset/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text px-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img"
                                    style="background-image: url({{ asset('asset/images/person_3.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text px-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Patients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Contact Us</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>Ataköy 7-8-9-10 kısım mh. Çobançeşme E-5 yanyol CD. No:12 Daire:A119 Nivo Ataköy rezidans
                            Bakırköy/İSTANBUL</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://+90 555 024 35 55">+90 555 024 35 55</a></p>
                        <p><a href="tel://+90 555 041 35 55">+90 555 041 35 55</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@magicist.co">info@magicist.co</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
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
                        `<label style="padding: 10px"><input type="radio" name="hospital_id" id="${item.id}" value="${item.id}"><img src="${window.location.protocol}//${window.location.host}/storage/${item.photo}" height="100px"><p style="text-align: center">${item.name}</p></label>`;
                });
            }
        });
    }
</script>
