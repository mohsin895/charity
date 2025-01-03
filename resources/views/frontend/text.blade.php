@extends('layouts.frontend.master')

@section('content')
<style>
    .tab-container {
	/* background: #344152; */
	padding: 0;
	/* border: solid 1px #444; */
	/* height: 440px; */
	/* overflow: hidden; */
	width: 100%;
}
.nav-tabs.nav-tabs-left {
  float: left;
  border-right: 0;
}
.nav-tabs.nav-tabs-left li a {
  margin-right: 0;
	border-radius: 0;
  border-right: none;
}
.nav-tabs.nav-tabs-left {
  border-bottom: 0;
  max-width: 40%;
}
.nav-tabs.nav-tabs-left li {
  float: none;
  margin: 0;
text-align: left;
padding-top: 8px;
    padding-bottom: 8px;
}
.nav-tabs.nav-tabs-left li a,
.nav-tabs.nav-tabs-right li a {
  /* background-color: #344152; */
  color: #141313;
}
.nav-tabs.nav-tabs-left li a:hover,
.nav-tabs.nav-tabs-right li a:hover {
  background-color: rgba(255,255,255,0.9);
  border-color: rgba(255,255,255,0.9);
  color: #444;
}


.nav-tabs.nav-tabs-left li:not(:last-of-type),
.nav-tabs.nav-tabs-right li:not(:last-of-type) {
  margin-bottom: -1px;
}
.tab-content {
	background: #fff;
	/* height: 440px; */
	/* overflow-y: scroll; */
}
.tab-content.side-tabs .tab-pane {
  display: none;
  padding: 20px;
  overflow-y: auto;
}
.tab-content.side-tabs-left {
  margin-left: 180px;
}
.tab-content.side-tabs-left .tab-pane {
  border-radius: 0;
}
.tab-content.side-tabs-left .tab-pane.active {
  display: block;
  background-color: #fff;
  border-color: #fff;
  color: #333;
  font-weight: 300;
  letter-spacing: 0.1em;
}
.tab-content.side-tabs-right {
  margin-right: 45px;
}
.tab-content.side-tabs-right .tab-pane {
  border-radius: 4px 0 0 4px;
}
main > .row:not(:first-of-type) {
  margin-top: 1.1em;
}
col.time,
col.repname {
  width: 12em;
}
col.did {
  width: 9em;
}
.nav-tabs>li>a,.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	border: none;
}


</style>
<div class="flex items-center justify-center h-10">
    <h2 class="text-center text-sm">Website &amp; Software Development</h2>
</div>
<div class="container">
	<div class="row">
   		<div class="col-sm-12">
          
   			
   			<div class="tab-container">
		      <ul class="nav nav-tabs nav-tabs-left nav-centered" role="tablist" style="display: flow-root">
		        <li role="presentation" class="active">
		          <a href="#about-us"  data-toggle="tab" role="tab" >
                    আমাদের সম্পর্কে 
		          </a>
		        </li>
		        <li role="presentation">
		          <a href="#about-aim" data-toggle="tab" role="tab">
                    আমাদের লক্ষ্য ও উদ্দেশ্য 
		          </a>
		        </li>
		        <li role="presentation">
		          <a href="#about-history" data-toggle="tab" role="tab">
                    আমাদের ইতিহাস
		          </a>
		        </li>
		        <li role="presentation">
		          <a href="#about-plane" data-toggle="tab" role="tab">
                    আমাদের পরিকল্পনা
		          </a>
		        </li>
                <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        গঠনতন্ত্র 
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        কার্য নির্বাহী কমিটি 
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        সদস্য 
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        স্বেচ্ছাসেবক 
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        উপদেষ্টা 
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        পরামর্শক 
                    </a>
                  </li>

                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        প্রয়োজনীয় প্রশ্ন ও উত্তর
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        মাস সেরা স্বেচ্ছাসেবক
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#business" data-toggle="tab" role="tab">
                        হিসাব নিরক্ষণ প্রতিবেদন

                    </a>
                  </li>
		      </ul>
		      <div id="my_side_tabs" class="tab-content side-tabs side-tabs-left" >
		        <div class="tab-pane fade in active show" id="about-us" role="tabpanel" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
		        	<div class="col-sm-6">
		        		<h3>Custom Web Design</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Responsive</li>
		        			<li>Search Engine Optimization (SEO)</li>
		        			<li>W3C Compliant</li>
		        			<li>Custom CMS</li>
		        			<li>Hosting</li>
		        			<li>Webmaster Services</li>
		        			<li>Content Writing</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		<h3>eCommerce</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Shopify</li>
		        			<li>WordPress</li>
		        			<li>Paypal</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		
		        	</div>
		        </div>
		        <div class="tab-pane fade" id="about-aim" role="tabpanel">
		        	<div class="col-sm-6">
		        		<h3>UI/UX Designs</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Smartphone &amp; Tablet UI</li>
		        			<li>Responsive Website UI</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		<h3>Logos</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        	</div>
		        </div>
		        <div class="tab-pane fade" id="about-history" role="tabpanel">
					<div class="col-sm-6">
		        		<h3>Online Advertising</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Facebook</li>
		        			<li>Google AdWords</li>
		        			<li>YouTube Ads</li>
		        			<li>Custom Ads</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		<h3>Social Media</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Blogging</li>
		        			<li>Facebook</li>
		        			<li>Twitter</li>
		        			<li>LinkedIn</li>
		        			<li>Instagram</li>
		        			<li>Pinterest</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		<h3>Fundraising</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        	</div>
		        </div>
		        <div class="tab-pane fade" id="about-plane" role="tabpanel">
		        	<div class="col-sm-6">
		        		<h3>Consulting</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        		<ul>
		        			<li>Company Branding</li>
		        			<li>Website Security</li>
		        			<li>Computer IT &amp; Repair</li>
		        			<li>Data Storage</li>
		        		</ul>
		        	</div>
		        	<div class="col-sm-6">
		        		<h3>Analytics &amp; Reporting</h3>
		        		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		        	</div>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function () {
    // Ensure the first tab and pane are active on page load
    $('.nav-tabs li:first-child').addClass('active');
    $('.tab-content .tab-pane:first-child').addClass('active in');
});
        (function () {
	'use strict';

	var sideTabsPaneHeight = function() {
		var navHeight = $('.nav-tabs.nav-tabs-left').outerHeight() || $('.nav-tabs.nav-tabs-right').outerHeight() || 0;

		var paneHeight = 0;

		$('.tab-content.side-tabs .tab-pane').each(function(idx) {
			paneHeight = $(this).outerHeight() > paneHeight ? $(this).outerHeight() : paneHeight;
		});

		$('.tab-content.side-tabs .tab-pane').each(function(idx) {
			$(this).css('min-height', navHeight + 'px');
		});
	};
	
  $(function() {
    sideTabsPaneHeight();

		$( window ).resize(function() {
			sideTabsPaneHeight();
		});

		$( '.nav-tabs.nav-tabs-left' ).resize(function() {
			sideTabsPaneHeight();
		});
	});
}());

    </script>
@endsection