@extends('layouts.backend')
@section('page_title_breadcrumb')
    {{ ucfirst('upazila') }}
@endsection

@section('create-button')
    <a href="{{ route('upazilas.index') }}" class="btn btn-sm fw-bold btn-primary">
        {{ ucfirst('upazila') }} List
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('upazilas.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="control-label my-2">{{ _lang('Name') }}</label>
                            <div class="">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Name" required>

                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="control-label my-2">{{ _lang('Code') }}</label>
                            <div class="">
                                <input type="text" class="form-control" id="code" name="code"
                                    value="{{ old('code') }}" placeholder="Code">
                            </div>
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
