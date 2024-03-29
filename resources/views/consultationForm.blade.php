<?php $locale = app()->getLocale() ?>
<form method="POST" action="{{ route('customer.consultations.store') }}" class="appointment-form ftco-animate"
    enctype='multipart/form-data'>
    @csrf
    <h3>{{ trans('Free Consultation') }}</h3>
    <div class="">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{ trans('Full Name') }}" name="full_name" required>
        </div>
    </div>
    <div class="">
        <div class="form-group">
            <div class="form-field">
                <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="department_id" id="" class="form-control" required>
                        <option value="">{{ trans('Departments') }}</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->{'name_' . $locale} }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{ trans('Email') }}" name="email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{ trans('Phone') }}" name="phone" required>
        </div>

    </div>
    <div class="">
        <div class="form-group">
            <textarea name="description" id="" cols="30" rows="2" class="form-control"
                placeholder="{{ trans('Description') }}"></textarea>
        </div>

        {{-- <div id="fileBtn" onclick="getFile()">Click to upload a file</div>
        <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="document" type="file"
                value="upload" onchange="sub(this)" /></div> --}}

        <div class="form-group">
            <input type="submit" value="{{ trans('Send Consultation') }}"
                class="btn btn-secondary py-3 px-4 rounded-5">
        </div>
    </div>
</form>
