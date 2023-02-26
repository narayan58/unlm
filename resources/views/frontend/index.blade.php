@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->meta_keywords)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)

<section class="slider-area">
  <!-- slider start -->
          <div class="slider">
          <div  class="nivoSlider nevo-slider">
              <video style="width:100%;height:100%" autoplay muted loop preload="auto">
                  <source src="http://unlm.basnepalcenter.com/image/home/20220617081057.mp4" type="video/mp4">
              </video>
          </div>
      </div>
      <!-- slider end -->
</section>

<!-- slider-area start -->
  
    <!-- slider-area end -->
    <!--Start Lateast Collection Top area -->
    <div class="body_top_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="single_image">
              <a href="#"><img class="banner_home1" src="{{ asset('frontend/img/collection-image/banner-1.jpg') }}" alt="" /></a>
              <div class="banner_text">
                <h2><a href="#">collection for ladies</a></h2>
              </div>
              <div class="shop_collection">
                <a href="#">Shop the Collection <span><img src="{{ asset('frontend/img/arrow/bkg_newsletter.png') }}" alt="" /></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="single_image">
              <a href="#"><img class="banner_home1" src="{{ asset('frontend/img/collection-image/banner-2.jpg') }}" alt="" /></a>
              <div class="banner_text">
                <h2><a href="#">collection for ladies</a></h2>
              </div>
              <div class="shop_collection">
                <a href="#">Shop the Collection <span><img src="{{ asset('frontend/img/arrow/bkg_newsletter.png') }}" alt="" /></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Lateast Collection Top area -->
    <!--Start Lateast Collection bottom area -->
    <div class="banner_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="single_image">
              <a href="#"><img class="banner_home1" src="{{ asset('frontend/img/collection-image/banner-11.jpg') }}" alt="" /></a>
              <div class="banner_text">
                <h3><a href="#">see lookbook</a></h3>
              </div>
              <div class="shop_collection">
                <a href="#">Shop the Collection <span><img src="{{ asset('frontend/img/arrow/bkg_newsletter.png') }}" alt="" /></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="single_image">
              <a href="#"><img class="banner_home1" src="{{ asset('frontend/img/collection-image/banner-12.jpg') }}" alt="" /></a>
              <div class="banner_text">
                <h3><a href="#">Shop accessories</a></h3>
              </div>
              <div class="shop_collection">
                <a href="#">Shop the Collection <span><img src="{{ asset('frontend/img/arrow/bkg_newsletter.png') }}" alt="" /></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="single_image">
              <a href="#"><img class="banner_home1" src="{{ asset('frontend/img/collection-image/banner-13.jpg') }}" alt="" /></a>
              <div class="banner_text">
                <h3><a href="#">Sale up to 70% off</a></h3>
              </div>
              <div class="shop_collection">
                <a href="#">Shop the Collection <span><img src="{{ asset('frontend/img/arrow/bkg_newsletter.png') }}" alt="" /></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Lateast Collection bottom area -->
    <!--Start Feature area -->
    <!--End Feature area -->
    <!--Start Testimonila area -->
    <div class="carousel_testimonial_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial_list">
              <div class="testimonial_single">
                <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a>
                <p>alexmax</p>
                <div class="author">
                  <img src="{{ asset('frontend/img/author/avatar.png') }}" alt="" />
                </div>
              </div>
              <div class="testimonial_single">
                <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a>
                <p>alexmax</p>
                <div class="author">
                  <img src="{{ asset('frontend/img/author/avatar.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Testimonila area -->
    <!--Start Blog area -->
    <!--End blog area -->
    <!--Start Contact info area -->
    <div class="service_info_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="service_list">
              <h2><i class="fa fa-envelope-o"></i> info@liendobingo.com</h2>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="service_list">
              <h3><i class="fa fa-phone"></i> (+5555) 224 434</h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="Social_list">
              <h2>Connect us: </h2>
              <div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
                <a data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="#"><i class="fa fa-facebook"></i></a>
                <a data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 61k" class="red-tooltip" href="#"><i class="fa fa-twitter"></i></a>
                <a data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                <a data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Contact info area -->
    <!--Start Branding area -->
    <div class="branding_area">
      <div class="container">
        <div class="row">
          <div class="carousel_branding">
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand1.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand2.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand3.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand4.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand1.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand2.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand3.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand4.jpg') }}" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="single_branding">
                <a href="#"><img src="{{ asset('frontend/img/branding-image/brand1.jpg') }}" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Branding area -->
@endsection