@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ _lang('Syllabus') }}
@endsection
@section('create-button-2')
    <a class="btn btn-sm fw-bold btn-primary" href="{{ route('syllabus.create') }}">
        {{ _lang('Create Syllabus') }}
    </a>
@endsection

<style>
    /* Default styles */
    div.dt-container div.dt-length label {
        display: inline-block !important;
        float: left !important;
    }

    div.dt-container div.dt-search {
        display: inline-block !important;
        float: right !important;
    }

    /* Media query for screens less than or equal to 668px */
    @media (max-width: 668px) {
        div.dt-container div.dt-length label {
            float: none !important;
        }

        div.dt-container div.dt-search {
            float: none !important;
            margin-top: 10px;
        }
    }
</style>

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 data-table">
                    <thead>
                        <th>{{ _lang('Title') }}</th>
                        <th>{{ _lang('Description') }}</th>
                        <th>{{ _lang('Class') }}</th>
                        <th>{{ _lang('File') }}</th>
                        <th>{{ _lang('Action') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($syllabus as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->description }} </td>
                                <td>{{ $data->sclass }}</td>
                                <td>{{ $data->file }}</td>
                                <td>
                                    <form action="{{ route('syllabus.destroy', $data->id) }}" method="post">
                                        <a href="{{ asset('uploads/files/syllabus/' . $data->file) }}"
                                            class="btn btn-primary btn-sm"><i class="fa fa-download"
                                                aria-hidden="true"></i></a>
                                        <a href="{{ route('syllabus.show', $data->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('syllabus.edit', $data->id) }}" class="btn btn-warning btn-sm"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm btn-remove"><i
                                                class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
