@extends('layouts.frontend.master')

@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>Register</h2>
            <ul class="bread-list">
              <li><a href="index.html">Home</a></li>
              <li><i class="icofont-simple-right"></i></li>
              <li class="active">Register</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="register section">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-lg-6">
            <div class="register-left"></div>
          </div>
          <div class="col-lg-6">
            <div class="register-form">
              <h2>Register Here</h2>
              <p>
                Already have an account ? <a href="{{route('member.login')}}">Login Here</a>
              </p>
              <!-- Form -->
              <form class="form" method="post" action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="First Name" required="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="Last Name" required="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Phone" required="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Email" required="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" name="password" placeholder="Password" required="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" name="password" placeholder="Confirm Password" required="">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group login-btn">
                      <button class="btn" type="submit">Login</button>
                    </div>
                    <div class="checkbox">
                      <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Yes, I
                        agree with all</label>
                    </div>
                    <a href="#" class="terms">Terms &amp; Conditions</a>
                  </div>
                </div>
              </form>
              <!--/ End Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
