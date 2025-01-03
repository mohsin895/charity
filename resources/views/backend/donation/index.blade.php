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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
                    @include('backend.modal.donation')
                    <thead>
                        <th>{{ _lang('SL') }}</th>
                        <th>{{ _lang('Title') }}</th>
          
                        <th>{{ _lang('Description') }}</th>
                        <th>{{ _lang('Action') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($dataList as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                               
                                <td>{{ $data->title }}</td>
                            
                                <td>{!! \Illuminate\Support\Str::limit($data->description, 50, '...') !!}
                                </td>
                                <td>
                                    <a href="#"
                                    data-bs-toggle="modal"
                                            data-bs-target="#editRowModal{{ $data->id }}"
                                        class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('admin.donation.delete', $data->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this Data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @include('backend.modal.donation')
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function fabiconURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#fabicon').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

    });

</script>
 
@endsection
