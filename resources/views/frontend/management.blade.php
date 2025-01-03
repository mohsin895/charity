@extends('layouts.frontend.master')

@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="appointment single-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="appointment-inner">
            <div class="title">
              <h3>Book your appointment</h3>
              <p>We will confirm your appointment within 2 hours</p>
            </div>
            <form class="form" action="#">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="name" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="email" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="phone" type="text" placeholder="Phone">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <div class="nice-select form-control wide" tabindex="0">
                      <span class="current">Select Blood group</span>
                      <ul class="list">
                        @foreach($bloodGroups as $data)
                        <li value="{{$data->id}}" class="option selected focus">
                           {{$data->name}}
                          </li>
                        @endforeach
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <div class="nice-select form-control wide" tabindex="0">
                      <span class="current">Doctor</span>
                      <ul class="list">
                        <li data-value="1" class="option selected focus">Doctor</li>
                        <li data-value="2" class="option">
                          Dr. Akther Hossain
                        </li>
                        <li data-value="3" class="option">Dr. Dery Alex</li>
                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input type="text" placeholder="Date" id="datepicker">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                  <div class="form-group">
                    <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <div class="button">
                      <button type="submit" class="btn">
                        Book An Appointment
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      
      </div>
    </div>
  </section>

@endsection