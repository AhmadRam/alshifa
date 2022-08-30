@extends('layouts.master')

@section('content')
    <div class="container col-md-6">

        <div class="appointment-wrap bg-white p-5 d-flex align-items-center" style="margin-top: 100px">

            <form class="appointment-form ftco-animate" method="POST" action="{{ route('customer.patients-comment.store') }}">
                @csrf
                <h3>{{ trans('Patients Comment') }}</h3>
                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="{{ trans('Full Name') }}" name="name" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="comment" class="form-control @error('comment') is-invalid @enderror"
                        placeholder="{{ trans('Rate us') }}" name="comment" value="{{ old('comment') }}" required
                        autocomplete="comment" autofocus>

                    @error('comment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="rating">
                    <label>
                        <input type="radio" name="rating" value="1" />
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="2" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="3" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="4" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="5" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary py-3 px-4">{{ trans('Submit') }}</button>
                </div>

            </form>
        </div>
    </div>
    <script>
        $(':radio').change(function() {
            console.log('New star rating: ' + this.value);
        });
    </script>
@endsection
