@extends('layouts.frontend.master')

@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>Login</h2>
            <ul class="bread-list">
              <li><a href="index.html">Home</a></li>
              <li><i class="icofont-simple-right"></i></li>
              <li class="active">Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="login section">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-lg-6">
            <div class="login-left"></div>
          </div>
          <div class="col-lg-6">
            <div class="login-form">
              <h2>Login Here</h2>
              <p>
                Didn't you account yet ?
                <a href="{{route('member.registration')}}">Register Here</a>
              </p>
              <!-- Form -->
              <form class="form" method="post" action="{{ route('member.login') }}">
                @csrf
                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group login-btn">
                      <button class="btn" type="submit">Login</button>
                    </div>
                    <div class="checkbox">
                      <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember
                        me</label>
                    </div>
                    <a href="#" class="lost-pass">Lost your password ?</a>
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
