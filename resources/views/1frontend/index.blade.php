@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->meta_keywords)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)
<section>
  <div class="swiper-container" id="hero-slider">
    <div class="swiper-wrapper">
      @foreach($sliders as $slider)
      <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center"
        style="background: url({{ $slider->image }})">
        <div class="container">
          <div class="row text-sm-left">
            <div class="col-lg-8">
              <p class="h6 text-uppercase text-muted mb-3">{{ $slider->sub_title }}</p>
              <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200">{{ $slider->title }}</h1>
              <div class="row">
                <div class=" mx-auto">
                  <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400">{!! $slider->description !!}</p>
                </div>
              </div><a class="btn btn-primary text" href="{{ $slider->url }}" data-swiper-parallax="-600"> <i
            class="las la-cart-arrow-down"></i>Shop now</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="swiper-pagination px-4 py-2 text-end h5 font-weight-light"></div>
</div>
</section>
<section class="categories py-5">
<div class="container">
  <div class="row">
    <div class="col-sm-4 d-flex align-items-center">
      <div class="textWrapper">
        <div class="subtitle">
          <p class="text-uppercase f14 text-muted">Shop by Categories</p>
        </div>
        <h3 class="title text_p">We have varieties of BAGS.</h3>
        <p class="text-muted">{{ $sitedetail->title }}. A brand that spells luxury, style and elegance first identified the opportunity for a world-class.</p>
        <div class="buttonwrapper">
          <a href="{{ route('shop') }}">
            <button class="btn btn_p">
            <i class="las la-shopping-bag">
            </i>
            Shop Now
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="catwrapper">
        @foreach($productCategory as $sub)
        <div class="cat">
          <a href="{{ route('productCategory',$sub->slug) }}">
            <img src="{{ asset($sub->image) }}" alt="{{ $sub->title }}" title="{{ $sub->title }}"
            class="img-fluid">
            <div class="label text-uppercase f14 text-muted d-flex justify-content-between">
              {{ $sub->title }}<div class="icon">
                <i class="las la-angle-right"></i>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</section>
<!-- New arrivals-->
<section class="py-5 bg_p_dim">
<div class="container py-5">
  <div class="mb-3 text-center">
    <h2 class="mb-0">New arrivals</h2>
    <p class="text-muted">Browse the Newest Products</p>
  </div>
  <div class="swiper-container pt-5" id="newArrivals">
    <div class="swiper-wrapper">
      @foreach($products as $product)
      <div class="swiper-slide pb-5">
        <div class="product mb-4">
          {{--<span class="badge rounded-0 bg-primary">New Arrival</span>--}}
          <a href="{{ route('singleProduct',$product->slug) }}"><img class="img-fluid" src="{{ asset($product->image) }}"
          alt="{{ $product->title }}" title="{{ $product->title }}"></a>
          <div class="cta shadow d-inline-block">
            {{--                 <a class="product-btn" href="#"><i class="las la-heart"></i></a>
            --}}
            <a class="product-btn" href="{{ route('singleProduct',$product->slug) }}"><i class="las la-expand"></i></a>
            <a class="product-btn" href="{{ route('addToCart',$product->id) }}"><i class="las la-shopping-cart"></i></a></div>
          </div>
          <h6 class="text-center"><a class="reset-anchor" href="{{ route('singleProduct',$product->slug) }}">{{ $product->title }}</a></h6>
          <p class="text-center text-muted font-weight-bold">{{ $currency_code }} {{ $product->new_price }}  <del>{{ $currency_code }} {{ $product->old_price }}</del></p>
        </div>
        <!--  Modal -->
      {{-- modal --}}
      @endforeach
    </div>
    <div class="swiper-button-prev px-3 py-2">
      <i class="las la-arrow-left"></i>Prev
    </div>
    <div class="swiper-button-next px-3 py-2">
      Next
      <i class="las la-arrow-right"></i>
    </div>
  </div>
</div>
</section>
{{--   <span class="item_price">{{ $currency_code }} {{ $pro->new_price }}</span>
<del>{{ $currency_code }} {{ $pro->old_price }}</del> --}}
<!-- Featured products-->
<section class="py-5 ">
<div class="container">
  <div class="mb-3 text-center">
    <h2 class="mb-0">Featured products</h2>
    <p class="text-muted">Browse the Newest Products</p>
  </div>
  <div class="swiper-container pt-5" id="featuredProducts">
    <div class="swiper-wrapper">
      <!-- Product-->
      @foreach($products as $product)
      <div class="swiper-slide pb-5">
        <div class="product mb-4">
          {{--<span class="badge rounded-0 bg-primary">New Arrival</span>--}}
          <a href="{{ route('singleProduct',$product->slug) }}"><img class="img-fluid" src="{{ asset($product->image) }}"
          alt="{{ $product->title }}" title="{{ $product->title }}"></a>
          <div class="cta shadow d-inline-block">
            <a class="product-btn" href="{{ route('singleProduct',$product->slug) }}"><i class="las la-expand"></i></a>
            <a class="product-btn" href="{{ route('addToCart',$product->id) }}"><i class="las la-shopping-cart"></i></a>
          </div>
        </div>
        <h6 class="text-center"><a class="reset-anchor" href="{{ route('singleProduct',$product->slug) }}">{{ $product->title }}</a></h6>
        <p class="text-center text-muted font-weight-bold">{{ $currency_code }} {{ $product->new_price }}  <del>{{ $currency_code }} {{ $product->old_price }}</del></p>
      </div>
      @endforeach
    </div>
    <div class="swiper-button-prev px-3 py-2">
      <i class="las la-arrow-left"></i>Prev
    </div>
    <div class="swiper-button-next px-3 py-2">
      Next
      <i class="las la-arrow-right"></i>
    </div>
  </div>
</div>
</section>
<!-- brnds -->
<section class="brandsBanner">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="textWrapper">
        <p class="text-muted mb-0 text-uppercase subtitle f14">
          Top Products
        </p>
        <h3 class="title">
        Out Top Selling Products </h3>
        <p class="text-muted mt-3">
          Handbags & Party Bag are such essentials that allow us to keep important accessories with us while we travel or go out.
        </p>
        <div class="brandsbutton">
          <a href="{{ route('shop') }}">
            <button class="btn btn_p_dim">Shop Now</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-8 d-flex align-items-center">
      <div class="brandswrapper">
        <div class="d-flex brandMenuandItem align-items-center">
          <div class="nav text-left nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach($productCategory as $key=>$category)
            @if($key==0)
            <button class="nav-link active" id="v-pills-home-tab{{ $category->id }}" data-bs-toggle="pill"
            data-bs-target="#v-pills-home{{ $category->id }}" type="button" role="tab" aria-controls="v-pills-home{{ $category->id }}"
            aria-selected="true">{{ $category->title }}</button>
            @else
            <button class="nav-link" id="v-pills-home-tab{{ $category->id }}" data-bs-toggle="pill"
            data-bs-target="#v-pills-home{{ $category->id }}" type="button" role="tab" aria-controls="v-pills-home{{ $category->id }}"
            aria-selected="true">{{ $category->title }}</button>
            @endif
            @endforeach
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            @foreach($productCategory as $key=>$category)
            @if($key==0)
            <div class="tab-pane fade show active" id="v-pills-home{{ $category->id }}" role="tabpanel"
              aria-labelledby="v-pills-home-tab{{ $category->id }}">
              <div class="brandsSlider">
                <div class="product"><span class="badge rounded-0 bg-info">{{ $category->title }}</span><a href="{{ route('productCategory',$category->slug) }}"><img
              class="img-fluid" src="{{ asset($category->image) }}" alt="{{ $category->title }}"></a>
            </div>
          </div>
        </div>
        @else
        <div class="tab-pane fade" id="v-pills-home{{ $category->id }}" role="tabpanel"
          aria-labelledby="v-pills-home-tab{{ $category->id }}">
          <div class="brandsSlider">
            <div class="product"><span class="badge rounded-0 bg-info">{{ $category->title }}</span><a href="{{ route('productCategory',$category->slug) }}"><img
          class="img-fluid" src="{{ asset($category->image) }}" alt="{{ $category->title }}"></a>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Divider section-->
<section class="py-5 bg-center bg-cover" style="background: url(frontend/img/divider-bg.0d7f8f0b.jpg)">
<div class="container py-5">
<div class="row">
<div class="col-lg-6 ms-auto">
<h2 class="hero-heading">New bags collections</h2>
<p class="text-muted">We have the top best selling bags.
</p><a class="btn btn-primary" href="{{ route('shop') }}"> <i
class="fas fa-shopping-bag-mr-2"></i>Shop now</a>
</div>
</div>
</div>
</section>
@endsection