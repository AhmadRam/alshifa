@extends('layouts.master')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-8 d-flex">
                    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                       @include('consultationForm')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
