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
                       aria-controls="about-us" aria-selected="true">আমাদের সম্পর্কে</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="our-mission-tab" data-toggle="tab" href="#our-mission" role="tab"
                       aria-controls="our-mission" aria-selected="false">আমাদের লক্ষ্য ও উদ্দেশ্য</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="about-us-tab" data-toggle="tab" href="#our-history" role="tab"
                       aria-controls="about-us" aria-selected="true">আমাদের ইতিহাস</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-aim-tab" data-toggle="tab" href="#our-aim" role="tab"
                       aria-controls="about-aim" aria-selected="false">আমাদের পরিকল্পনা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-vision-tab" data-toggle="tab" href="#constitution" role="tab"
                       aria-controls="about-vision" aria-selected="false">গঠনতন্ত্র </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="executive-commite-tab" data-toggle="tab" href="#executive-commite" role="tab"
                       aria-controls="executive-commite" aria-selected="false">কার্য নির্বাহী কমিটি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="member-tab" data-toggle="tab" href="#memebr" role="tab"
                       aria-controls="member" aria-selected="false">সদস্য </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="volunteer-tab" data-toggle="tab" href="#volunteer" role="tab"
                       aria-controls="volunteer" aria-selected="false">স্বেচ্ছাসেবক </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="adviser-tab" data-toggle="tab" href="#adviser" role="tab"
                       aria-controls="adviser" aria-selected="false">উপদেষ্টা </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="consultant-tab" data-toggle="tab" href="#consultant" role="tab"
                       aria-controls="consultant" aria-selected="false">পরামর্শক </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-vision-tab" data-toggle="tab" href="#question-answer" role="tab"
                       aria-controls="about-vision" aria-selected="false">প্রয়োজনীয় প্রশ্ন ও উত্তর </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-vision-tab" data-toggle="tab" href="#monthly-vounteer" role="tab"
                       aria-controls="about-vision" aria-selected="false">মাস সেরা স্বেচ্ছাসেবক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-vision-tab" data-toggle="tab" href="#audit-report" role="tab"
                       aria-controls="about-vision" aria-selected="false">হিসাব নিরক্ষণ প্রতিবেদন</a>
                </li>
            </ul>
        </div>

        <!-- Right Content -->
        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="about-us" role="tabpanel" aria-labelledby="about-us-tab">
                    <h3>আমাদের সম্পর্কে</h3>
                    <p>
                        আমরা একটি উদ্ভাবনী সংস্থা, যা প্রগতিশীল সমাধান তৈরি করে। আমাদের লক্ষ্য হল সমাজের উন্নতির জন্য অবদান রাখা।
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
                <section class="tab-pane fade doctor-calendar-area section" id="executive-commite" role="tabpanel" aria-labelledby="executive-commite-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                     
                          <h2>কার্য নির্বাহী কমিটি</h2>
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                              </tr>
                            </thead>
            
                            <tbody>
                              @foreach($executiveCommetes as $key => $data)
                              <tr>
                                <td><span class="time">9.00</span></td>
                               
                                <td>
                              
                                  <span>{{$data->name}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->phone}}</span>
                                </td>
                             
                                <td>
                                
                                  <span>{{$data->email}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->address}}</span>
                                </td>
                              </tr>
                              @endforeach
                             
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="tab-pane fade doctor-calendar-area section" id="memebr" role="tabpanel" aria-labelledby="memebr-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                     
                          <h2>সদস্য </h2>
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                              </tr>
                            </thead>
            
                            <tbody>
                              @foreach($members as $key => $data)
                              <tr>
                                <td><span class="time">9.00</span></td>
                               
                                <td>
                              
                                  <span>{{$data->name}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->phone}}</span>
                                </td>
                             
                                <td>
                                
                                  <span>{{$data->email}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->address}}</span>
                                </td>
                              </tr>
                              @endforeach
                             
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="tab-pane fade doctor-calendar-area section" id="volunteer" role="tabpanel" aria-labelledby="volunteer-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                     
                          <h2>স্বেচ্ছাসেবক </h2>
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                              </tr>
                            </thead>
            
                            <tbody>
                              @foreach($volunteers as $key => $data)
                              <tr>
                                <td><span class="time">9.00</span></td>
                               
                                <td>
                              
                                  <span>{{$data->name}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->phone}}</span>
                                </td>
                             
                                <td>
                                
                                  <span>{{$data->email}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->address}}</span>
                                </td>
                              </tr>
                              @endforeach
                             
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="tab-pane fade doctor-calendar-area section" id="adviser" role="tabpanel" aria-labelledby="adviser-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                     
                          <h2>উপদেষ্টা </h2>
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                              </tr>
                            </thead>
            
                            <tbody>
                              @foreach($advisers as $key => $data)
                              <tr>
                                <td><span class="time">9.00</span></td>
                               
                                <td>
                              
                                  <span>{{$data->name}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->phone}}</span>
                                </td>
                             
                                <td>
                                
                                  <span>{{$data->email}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->address}}</span>
                                </td>
                              </tr>
                              @endforeach
                             
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="tab-pane fade doctor-calendar-area section" id="consultant" role="tabpanel" aria-labelledby="consultant-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                     
                          <h2>পরামর্শক </h2>
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                              </tr>
                            </thead>
            
                            <tbody>
                              @foreach($consultants as $key => $data)
                              <tr>
                                <td><span class="time">9.00</span></td>
                               
                                <td>
                              
                                  <span>{{$data->name}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->phone}}</span>
                                </td>
                             
                                <td>
                                
                                  <span>{{$data->email}}</span>
                                </td>
                                <td>
                           
                                  <span>{{$data->address}}</span>
                                </td>
                              </tr>
                              @endforeach
                             
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                
                <section class="tab-pane fade faq-area section __web-inspector-hide-shortcut__" id="question-answer" role="tabpanel" aria-labelledby="question-answer-tab">
                    <div class="container">
                      <div class="row faq-wrap">
                        <div class="col-lg-12">
                          <div class="faq-head">
                            <h2>প্রয়োজনীয় প্রশ্ন ও উত্তর</h2>
                          </div>
                          <div class="faq-item">
                            <ul class="accordion">
                                @foreach($qaList as $index => $data)
                                <li class="wow fadeInUp {{ $index === 0 ? 'active' : '' }}" data-wow-delay=".{{ $index + 3 }}s" style="visibility: visible; animation-delay: 0.{{ $index + 3 }}s; animation-name: fadeInUp;">
                                    <a class="{{ $index === 0 ? 'active' : '' }}">{{ $data->question }}</a>
                                    <p style="display: {{ $index === 0 ? 'block' : 'none' }};">
                                        {{ $data->answer }}
                                    </p>
                                </li>
                                @endforeach
                                
                            </ul>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </section>


           
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
