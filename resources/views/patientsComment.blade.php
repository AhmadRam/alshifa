@extends('layouts.master')

@section('content')
    <div class="container col-md-6">

        <div class="appointment-wrap bg-white p-5 d-flex align-items-center" style="margin-top: 100px">

            <form class="appointment-form ftco-animate" method="POST" action="{{ route('customer.patients-comment.store') }}">
                @csrf
                <h3>Patients Comment</h3>
                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Name Surname" name="name" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="comment" class="form-control @error('comment') is-invalid @enderror"
                        placeholder="Rate us" name="comment" value="{{ old('comment') }}" required
                        autocomplete="comment" autofocus>

                    @error('comment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div id="fileBtn" onclick="getFile()">Click to upload a photo</div>
                <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="photo" type="file"
                        value="upload" onchange="sub(this)" /></div>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary py-3 px-4">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
