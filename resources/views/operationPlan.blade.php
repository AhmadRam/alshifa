@extends('layouts.master')

@section('content')
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="operation_plan">
    <div id="svg_wrap"></div>
    <div class="body">
        <form method="POST" action="{{ route('customer.operation-plans.store') }}">
            @csrf
            <h1 class="h1">Operation Plan</h1>

            <section class="section">
                <p class="p">Departments</p>
                @foreach ($departments as $key => $department)
                    <label style="padding: 10px" id="selected_department">
                        <input type="radio" name="department_id" id="{{ $key }}"
                            value="{{ $department->id }}" onchange="getHospital({{ $department->id }})">
                        <img src="{{ Voyager::image($department->photo) }}" height="100px">
                        <p style="text-align: center">{{ $department->name }}</p>
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
                        <input type="radio" name="hotel_id" id ="{{ $key }}" value="{{ $hotel->id }}">
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

            <section class="section">
                <p class="p">Personal information</p>
                <input class="input" type="text" name="full_name" placeholder="Full Name" />
                <input class="input" type="text" name="email" placeholder="E-mail" />
                <input class="input" type="text" name="phone" placeholder="Phone" />
            </section>
            <div class="button" id="prev">&larr; Previous</div>
            <div class="button" id="next">Next &rarr;</div>
            <input type="submit" class="button" id="submit" value="Agree and send application" />
        </form>
    </div>
</section>
@endsection
