@extends('layouts.backend')
@section('page_title_breadcrumb')
    {{ ucfirst('upazila') }}
@endsection

@section('create-button')
    <a href="{{ route('upazilas.create') }}" class="btn btn-sm fw-bold btn-primary">
        {{ ucfirst('upazila') }} Create
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
