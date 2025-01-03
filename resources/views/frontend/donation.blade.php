@extends('layouts.frontend.master')

@section('content')


    <div class="breadcrumbs overlay">
        <div class="container">
          <div class="bread-inner">
            <div class="row">
              <div class="col-12">
                <h2>চলুন একসাথে একটি পরিবর্তন আনি</h2>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <section class="blog section" id="blog">
        <div class="container">
            
            <div class="row">
                @foreach($dataList as $data)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news" style="min-height: 450px;">
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
 
    
 


@endsection