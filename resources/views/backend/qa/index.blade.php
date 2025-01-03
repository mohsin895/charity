@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ _lang($subTitle) }}
@endsection
@section('create-button-2')
 

    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
    data-bs-target="#addRowModal">
    <i class="fa fa-plus"></i>


   {{ _lang($title) }}
</button>
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
                    @include('backend.modal.qa')
                    <thead>
                        <th>{{ _lang('SL') }}</th>
                        <th>{{ _lang('Question') }}</th>
                        <th>{{ _lang('Answer') }}</th>
                        <th>{{ _lang('Action') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($dataList as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                               
                                <td>{{ $data->question }}</td>
                                <td>{{ $data->answer }}</td>
                                <td>
                                    <a href="#"
                                    data-bs-toggle="modal"
                                            data-bs-target="#editRowModal{{ $data->id }}"
                                        class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('admin.about.qa.delete', $data->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this Data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @include('backend.modal.qa')
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

 
@endsection
