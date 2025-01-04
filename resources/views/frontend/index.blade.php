@extends('layouts.frontend.master')

@section('content')

<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->

        @foreach($sliderList as $data)
        <div class="single-slider" style="background-image:url({{asset($data->image)}})">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        @endforeach
     
       
    </div>
</section>

<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
           
            @foreach($bloodgroups as $key => $data)
            <div class="col-lg-3 col-md-6 col-12 mb-5" >
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class=" ">{{$data->name}}</i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist </p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            @endforeach
           
        </div>
    </div>
</div>

<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>চলুন একসাথে একটি পরিবর্তন আনি.</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($donationList as $data)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news" style="min-height: 450px;border:1px solid">
                    <div class="news-head">
                        <img src="{{ asset($data->image) }}" alt="#">
                    </div>
                    <div class="news-body" style="height: 210px">
                        <div class="news-content">
                            <h2 style="text-align: center"><a href="blog-single.html">{{ $data->title }}</a></h2>
                            <p class="text">{!! \Illuminate\Support\Str::limit($data->description, 210, '...') !!}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="table-bottom">
                            <a class="btn" href="#" style="color: #fff;width:200px">দান করুন</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
              
            @endforeach
          
           
        </div>
    </div>
</section>

<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>চলমান প্রজেক্ট</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($projectList as $data)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news" style="min-height: 450px;border:1px solid">
                    <div class="news-head">
                        <img src="{{ asset($data->image) }}" alt="#">
                    </div>
                    <div class="news-body" style="height: 210px">
                        <div class="news-content">
                            <h2 style="text-align: center"><a href="blog-single.html">{{ $data->title }}</a></h2>
                            <p class="text">{!! \Illuminate\Support\Str::limit($data->description, 210, '...') !!}</p>
                        </div>
                    </div>
                  
                </div>
                <!-- End Single Blog -->
            </div>
              
            @endforeach
          
           
        </div>
    </div>
</section>

<section class="portfolio section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>গ্যালারী
                    </h2>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    @foreach($galleries as $data)
                    <div class="single-pf">
                        <img src="{{asset($data->image)}}" alt="#">
                       
                    </div>
                        
                    @endforeach
                
                   
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5 col-lg-12 col-md-12 col-12">
        <a href="{{ route('media') }}" >
            <div class="form-group">
                <div class="button">
                    <button type="submit" class="btn">আরও</button>
                </div>
            </div>
        </a>
        
        </div>
</section>



@endsection