@extends('layouts.frontend.master')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Tabs Container */
    .custom-tabs {
        border-bottom: none; /* Remove default border from tabs */
        margin-bottom: 0; /* No margin required at the bottom */
    }

    /* Default Tab Link Styling */
    .custom-tabs .nav-link {
        color: #555; /* Default text color */
        font-size: 12px;
        padding: 10px 15px;
        transition: color 0.3s ease, font-weight 0.3s ease;
        text-decoration: none;
        border: 1px solid #ddd; /* Add border to nav-links */
        /* border-radius: 5px;
        margin-bottom: 10px;  */
        display: block; /* Ensure the nav-link spans full width */
    }

    /* Active Tab Styling */
    .custom-tabs .nav-link.active {
        color: #fff; /* Active tab text color */
        background-color: #e74c3c; /* Active tab background color */
        font-weight: bold;
        border-color: #e74c3c; /* Match border color to background */
    }

    /* Hover Effect */
    .custom-tabs .nav-link:hover {
        color: #1A76D1; /* Text color on hover */
    }

    /* Tab Content Styling */
    .tab-pane {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
</style>

<div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>প্রকল্প</h2>
           
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container mt-5">
   
    <div class="row">
        <!-- Left Navigation -->
        <div class="col-md-4">
            <ul class="nav custom-tabs flex-column" id="myTab" role="tablist">
                @foreach($dataList as $index => $data)
        <li class="nav-item">
            <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $index }}" data-toggle="tab" 
               href="#content-{{ $index }}" role="tab" aria-controls="content-{{ $index }}" 
               aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                {{$data->title}}
            </a>
        </li>
        @endforeach
               
            </ul>
        </div>

        <!-- Right Content -->
        <div class="col-md-8">
            <div class="tab-content" id="myTabContent">
                @foreach($dataList as $index => $data)
                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="content-{{ $index }}" 
                     role="tabpanel" aria-labelledby="tab-{{ $index }}">
                     <div class="row">
                      @foreach($data->images as $row)
                      <div class="col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 10px">
 
                        <img id="ImgPreview" src="{{ asset($row->image) }}" class="preview1" style="height:100px;width:100px" />

                    </div>

                      @endforeach
                     </div>
                  
                 </div>
                @endforeach
                 
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
