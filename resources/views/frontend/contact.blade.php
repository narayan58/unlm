@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('contact'))
@section('title', 'Contact Us  || ' . $sitedetail->title)
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single blog_top_area">
                    {{-- <ul id="breadcrumbs">
                        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li><span>Ι</span></li>
                        <li>Contact Us</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div>
		<!--Start google map area -->
		<div class="google_map_area">
			<div class="container">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                        <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                    </div>
                </div>
			</div>
		</div>
		<!--End google map area -->
		<!--Start company details area -->
		<div class="company_contact_details">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="get_touch">
							 <h2>GET IN TOUCH WITH US</h2>
							 <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<form class="contact-form-style" id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
							<div class="row">
								<div class="col-lg-12">
									<input name="name" placeholder="Name*" type="text" />
								</div>
								<div class="col-lg-12">
									<input name="email" placeholder="Email*" type="email" />
								</div>
								<div class="col-lg-12">
									<input name="subject" placeholder="Subject*" type="text" />
								</div>
								<div class="col-lg-12">
									<textarea name="message" placeholder="Your Message*"></textarea>
									<button class="btn btn-primary" type="submit">Send Message</button>
								</div>
							</div>
						</form>
						<p class="form-messege"></p>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="company_right_area">
							<h6>INFORMATION</h6>
							<div class="contact_addon_content">
								<p><span><i class="fa fa-map-marker"></i></span> Little Lonsdale St, Talay Victoria 8011</p>
								<p><span><i class="fa fa-envelope"></i></span> support@demo.com</p>
								<p><span><i class="fa fa-phone"></i></span> 1 (800) 557-4541</p>
							</div>
                        </div>
						<div class="company_right_hour">
							<h6>BUSINESS HOURS</h6>
						   <p>Monday &ndash; Friday: 9am to 20 pm Saturday: 9am to 17pm Sunday: day off</p>
						   <div class="single_icons_contact">
								<ul id="social_contact_icon">
									<li><a href="#" class="black-tooltip s-1" title="" data-placement="top" data-bs-toggle="tooltip" data-original-title="Follow us Facebook"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#" class="black-tooltip s-2" title="" data-placement="top" data-bs-toggle="tooltip" data-original-title="Follow us Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="black-tooltip s-3" title="" data-placement="top" data-bs-toggle="tooltip" data-original-title="Follow us Google-plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="black-tooltip s-4" title="" data-placement="top" data-bs-toggle="tooltip" data-original-title="Follow us Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="black-tooltip s-5" title="" data-placement="top" data-bs-toggle="tooltip" data-original-title="Follow us Behance"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End company details area -->
		<!--Start Footer Banner area -->
		<div class="blog_banner_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_banner">
							<div class="banner_home_inner">
								<a href="#">
									<img alt="" src="{{asset('frontend/img/banner/2.jpg')}}">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@include('frontend.pageparts.brand')
@endsection