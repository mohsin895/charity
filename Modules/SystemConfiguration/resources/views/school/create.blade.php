@extends('layouts.backend')
@section('page_title_breadcrumb')
    {{ ucfirst('school') }}
@endsection

@section('create-button')
    <a href="{{ route('schools.index') }}" class="btn btn-sm fw-bold btn-primary">
        {{ ucfirst('school') }} List
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('schools.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <label for="upazila_id" class="form-label">
                            উপজেলা
                        </label>
                        <select name="upazila_id" id="upazila_id" class="form-select">
                            <option value="">নির্বাচন করুন ...</option>
                            @foreach ($upazilas as $upazila)
                                <option value="{{ $upazila->id }}"
                                    {{ old('upazila_id') == $upazila->id ? 'selected' : '' }}>
                                    {{ $upazila->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label my-2">{{ _lang('School Name') }}</label>
                            <input type="text" class="form-control" id="school_name" name="school_name"
                                value="{{ old('name') }}" placeholder="School Name" required>

                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label my-2">{{ _lang('School Identify Code') }}</label>
                            <input type="number" step="0.01" class="form-control" id="school_identify_code"
                                name="school_identify_code" value="{{ old('code') }}" placeholder="School Identify Code">

                            @error('school_identify_code')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-9">
                        <button type="submit" class="btn btn-primary mt-5">{{ _lang('Create') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
