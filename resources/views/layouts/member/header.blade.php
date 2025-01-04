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
                        <li><a href="{{route('member.blood')}}">Blood</a></li>
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
                                        <a href="{{ route('index') }}" style="text-decoration: none">Blood Donation</a>
                                    </li>
                                    <li class="{{ Request::routeIs('about.us') ? 'active' : '' }}" >
                                        <a href="{{ route('about.us') }}" style="text-decoration: none">Logout</a>
                                    </li>
                            
                                    
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