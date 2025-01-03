@extends('layouts.frontend.master')

@section('content')

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
          <h2>আমাদের সম্পর্কে</h2>
         
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">

    <div class="row">
        <!-- Left Navigation -->
        <div class="col-md-3">
            <ul class="nav custom-tabs flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="about-us-tab" data-toggle="tab" href="#about-us" role="tab"
                       aria-controls="about-us" aria-selected="true">রক্ত প্রয়োজন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="our-mission-tab" data-toggle="tab" href="#our-mission" role="tab"
                       aria-controls="our-mission" aria-selected="false">রক্তদানের পাতা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="about-us-tab" data-toggle="tab" href="#our-history" role="tab"
                       aria-controls="about-us" aria-selected="true">রক্তদানের হালচাল</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-aim-tab" data-toggle="tab" href="#our-aim" role="tab"
                       aria-controls="about-aim" aria-selected="false">আমার রক্তদাতা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-vision-tab" data-toggle="tab" href="#constitution" role="tab"
                       aria-controls="about-vision" aria-selected="false">সংগঠন </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="executive-commite-tab" data-toggle="tab" href="#executive-commite" role="tab"
                       aria-controls="executive-commite" aria-selected="false">সেরা রক্তদাতা সংগ্রাহক</a>
                </li>
                
            </ul>
        </div>

        <!-- Right Content -->
        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="about-us" role="tabpanel" aria-labelledby="about-us-tab">
                    <h3>রক্ত প্রয়োজন</h3>
                    <p>
                        {!! $setting->blood_hsitory !!}
                    </p>
                </div>
                <div class="tab-pane fade" id="about-aim" role="tabpanel" aria-labelledby="about-aim-tab">
                    <h3>আমাদের লক্ষ্য ও উদ্দেশ্য</h3>
                    <p>
                        আমাদের লক্ষ্য হল গুণগত মান বজায় রেখে সমাজের সেবা করা। আমরা দীর্ঘমেয়াদী উন্নয়ন পরিকল্পনা গ্রহণ করি।
                    </p>
                </div>
                <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                    <h3>আমাদের ভবিষ্যত দৃষ্টি</h3>
                    <p>
                        আমরা এমন একটি ভবিষ্যত দেখতে পাই যেখানে প্রযুক্তি এবং উদ্ভাবন মানবকল্যাণে ব্যবহৃত হবে।
                    </p>
                </div>
              
                <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                    <h3>আমাদের ভবিষ্যত দৃষ্টি</h3>
                    <p>
                        আমরা এমন একটি ভবিষ্যত দেখতে পাই যেখানে প্রযুক্তি এবং উদ্ভাবন মানবকল্যাণে ব্যবহৃত হবে।
                    </p>
                </div>
                <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                    <h3>আমাদের ভবিষ্যত দৃষ্টি</h3>
                    <p>
                        আমরা এমন একটি ভবিষ্যত দেখতে পাই যেখানে প্রযুক্তি এবং উদ্ভাবন মানবকল্যাণে ব্যবহৃত হবে।
                    </p>
                </div>
            </div>
        </div>

        
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.nav-link').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 'smooth');
        });
    });
</script>
@endsection
