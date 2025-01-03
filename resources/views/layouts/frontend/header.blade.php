<header class="header" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><i class="fa fa-phone"></i>{{$setting->phone ?? ""}}</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:{{$setting->email ?? ""}}">{{$setting->email ?? ""}}</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><a href="#">Donation</a></li>
                        <li><a href="{{route('blood.management')}}">Blood</a></li>
                        <li><a href="{{route('member.login')}}">Member</a></li>
                        
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset($setting->logo ?? "")}}" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu" style="float: right">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ Request::routeIs('index') ? 'active' : '' }}">
                                        <a href="{{ route('index') }}" style="text-decoration: none">প্রচ্ছদ</a>
                                    </li>
                                    <li class="{{ Request::routeIs('about.us') ? 'active' : '' }}" >
                                        <a href="{{ route('about.us') }}" style="text-decoration: none">আমাদের সম্পর্কে</a>
                                    </li>
                            
                                    <li class="{{ Request::routeIs('activity') ? 'active' : '' }}" >
                                        <a href="{{ route('activity') }}" style="text-decoration: none">কার্যক্রম  </a>
                                    </li>
                                    <li class="{{ Request::routeIs('blood') ? 'active' : '' }}"><a href="{{ route('blood') }}" style="text-decoration: none">রক্তদান   </a></li>
                                    <li class="{{ Request::routeIs('project') ? 'active' : '' }}">
                                        <a href="{{ route('project') }}" style="text-decoration: none">প্রকল্প   </a>
                                    </li>
                                    <li class="{{ Request::routeIs('donation') ? 'active' : '' }}">
                                        <a href="{{ route('donation') }}" style="text-decoration: none">অনুদান   </a>
                                    </li>
                                    <li class="{{ Request::routeIs('media') ? 'active' : '' }}">
                                        <a href="{{ route('media') }}" style="text-decoration: none">মিডিয়া    </a>
                                    </li>
                                    <li><a href="#" style="text-decoration: none">গুরুত্বপূর্ণ তথ্যবলি   </a></li>
                                    <li class="{{ Request::routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" style="text-decoration: none">যোগাযোগ </a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    {{-- <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.html" class="btn">Book Appointment</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>