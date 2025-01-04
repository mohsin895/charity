@extends('layouts.member.master')

@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Add Blood </a></li>
                    
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
            <form class="form" method="post" action="{{route('member.donate.blood')}}">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="name" disabled type="text" placeholder="Name" value="{{Auth::guard('member')->user()->name}}">
                    <input name="member_id" disabled type="text" placeholder="Name" value="{{Auth::guard('member')->user()->id}}">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="email" disabled type="email" placeholder="Email" value="{{Auth::guard('member')->user()->email}}">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <input name="phone" disabled type="text" placeholder="Phone" value="{{Auth::guard('member')->user()->phone}}">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <select class="form-control wide" name="blood_group_id" id="blood_group_id" required>
                      <option value="" selected disabled>Select Blood group</option>
                      @foreach($bloodGroups as $data)
                          <option value="{{ $data->id }}">{{ $data->name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                      <select class="form-control wide" name="division_id" id="division_id" required>
                          <option value="" selected disabled>Select Division</option>
                          @foreach($divisions as $data)
                              <option value="{{ $data->id }}"  {{ (isset($divisionInfo) && $divisionInfo->id == $data->id) ? 'selected' : '' }}>{{ $data->name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
           
                <select class="form-control" name="district_id" id="district_id" required>
                    <option value="" selected disabled>Select District</option>
                    @if(isset($districtInfo) && isset($divisionInfo))
                    @php
                        $districts = \App\Models\District::where('division_id', $divisionInfo->id)->get();
                    @endphp
                    @foreach($districts as $district)
                        <option value="{{ $district->id }}" 
                            {{ (isset($districtInfo) && $districtInfo->id == $district->id) ? 'selected' : '' }}>
                            {{ $district->name }}
                        </option>
                    @endforeach
                @endif
                </select>
            </div>
              
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
         
              <select class="form-control" name="thana_id" id="thana_id" required>
                  <option value="" selected disabled>Select Thana</option>
                  @if(isset($thanaInfo) && isset($districtInfo))
                  @php
                      $thanas = \App\Models\Thana::where('district_id', $districtInfo->id)->get();
                  @endphp
                  @foreach($thanas as $thana)
                      <option value="{{ $thana->id }}" 
                          {{ (isset($thanaInfo) && $thanaInfo->id == $thana->id) ? 'selected' : '' }}>
                          {{ $thana->name }}
                      </option>
                  @endforeach
              @endif
              </select>
          </div>
            
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
         <span> Last Donation Date</span>
         <input type="date" class="form-control " name="last_donation_date"/>
        </div>
          
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="form-group">
       <span> Address</span>
       <textarea type="text" class="form-control " name="address"></textarea>
      </div>
        
      </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <div class="button">
                      <button type="submit" class="btn">
                        Donate Blood
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function () {
          $('#division_id').change(function () {
              const divisionId = $(this).val();
              
              if (divisionId) {
                  $.ajax({
                      url: '/get-districts',
                      type: 'GET',
                      data: { division_id: divisionId },
                      success: function (response) {
                          $('#district_id').empty(); // Clear previous options
                          $('#district_id').append('<option value="" selected disabled>Select District</option>');
                          response.forEach(district => {
                              $('#district_id').append(`<option value="${district.id}">${district.name}</option>`);
                          });
                      },
                      error: function () {
                          alert('Failed to fetch districts. Please try again.');
                      }
                  });
              }
          });
      });
  </script>

<script>
  $(document).ready(function () {
      $('#district_id').change(function () {
          const districtId = $(this).val();
          
          if (districtId) {
              $.ajax({
                  url: '/get-thanas',
                  type: 'GET',
                  data: { district_id: districtId },
                  success: function (response) {
                      $('#thana_id').empty(); // Clear previous options
                      $('#thana_id').append('<option value="" selected disabled>Select Thana</option>');
                      response.forEach(thana => {
                          $('#thana_id').append(`<option value="${thana.id}">${thana.name}</option>`);
                      });
                  },
                  error: function () {
                      alert('Failed to fetch thana. Please try again.');
                  }
              });
          }
      });
  });
</script>
  

@endsection