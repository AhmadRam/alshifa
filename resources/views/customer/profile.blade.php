@extends('layouts.master')

@section('content')
    <div class="container col-md-6">

        <div class="appointment-wrap bg-white p-5 d-flex align-items-center" style="margin-top: 100px">

            <form class="appointment-form ftco-animate" method="POST" action="{{ route('register') }}">
                @csrf
                <h3>{{ __('Update Profile') }}</h3>
                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="{{ __('Name') }}" name="name" value="{{ $customer->name }}" required
                        autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('Email Address') }}" name="email" value="{{ $customer->email }}" required
                        autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="{{ __('password') }}" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control"
                        placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required
                        autocomplete="new-password">
                </div> --}}

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary py-3 px-4"> {{ __('Update') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
