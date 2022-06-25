@extends('layouts.master')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-8 d-flex">
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
                                                <option value="">Departments</option>
                                                @foreach ($branches as $branch)
                                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                </div>

                            </div>
                            <div class="">
                                <div class="form-group">
                                    <textarea name="description" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Description"></textarea>
                                </div>

                                <div id="fileBtn" onclick="getFile()">Click to upload a file</div>
                                <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="document"
                                        type="file" value="upload" onchange="sub(this)" /></div>

                                <div class="form-group">
                                    <input type="submit" value="Send Consultation" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
