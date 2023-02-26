@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $product->title)
@section('meta_keywords', $product->title)
@section('ogtitle', $product->title)
@section('ogdescription', $product->title)
@section('ogimage', asset($product->image))
@section('ogurl', route('singleProduct',$product->slug))
@section('title', $product->title .' || '.$sitedetail->title)
  <!-- Breadcrumb-->
  <div class="bg-light py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 bg-light">
          <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-10 order-1 order-md-2 mb-4 mb-lg-0">
              <!-- Item slider-->
              <div class="swiper-container" id="detailSlider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a class="glightbox" href="{{ asset($product->image) }}"><img
                        class="img-fluid" src="{{ asset($product->image) }}" alt="{{ $product->title }}"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Item info-->
        <div class="col-lg-6">
         <h1>{{ $product->title }}</h1>
          <div class="d-flex align-items-center">
            <ul class="list-inline mb-2 me-3 small">
              <li class="list-inline-item m-0"><i class="las la-star small text-warning"></i></li>
              <li class="list-inline-item m-0"><i class="las la-star small text-warning"></i></li>
              <li class="list-inline-item m-0"><i class="las la-star small text-warning"></i></li>
              <li class="list-inline-item m-0"><i class="las la-star small text-warning"></i></li>
              <li class="list-inline-item m-0"><i class="las la-star small text-warning"></i></li>

            </ul>
            <p class="small text-muted mb-2">12 customer reviews</p>
          </div>
          <p class="h4">{{ $currency_code }} {{ $product->new_price }}    <del>{{ $currency_code }} {{ $product->old_price }}</del></p>
          <p class="text-small mb-4">{!! $product->short_info !!}</p>


          <div class="d-flex align-items-center mb-4">
            {{-- <div class="border d-flex align-items-center justify-content-between p-1 me-2">
              <div class="quantity py-0">
                <button class="dec-btn p-0" onclick="decrease(this)"><i class="las la-caret-left"></i></button>
                <input class="form-control border-0 shadow-0 p-0 quantity-result" type="text" value="1">
                <button class="inc-btn p-0" onclick="increase(this)"><i class="las la-caret-right"></i></button>
              </div>
            </div> --}}
            <a class="btn btn-primary btn-sm py-2 border-bottom-0 px-5 me-3" href="{{ route('addToCart',$product->id) }}"> <i
                class="fas fa-shopping-bag py-1 me-2"></i>Add to cart</a><a class="p-0 reset-anchor d-inline-block mx-2"
              href="#"><i class="fas fa-heart"></i></a><a class="p-0 reset-anchor d-inline-block mx-2" href="#"><i
                class="fas fa-share-alt"></i></a>
          </div><br>
          <ul class="list-unstyled small d-inline-block">
            <li class="px-3 py-2 mb-1 bg-light"><strong class="text-uppercase">SKU:</strong><span
                class="ms-2 text-muted">{{ $product->sku }}</span></li>
            @php
              $productCat = \App\Model\admin\ProductCategory::where('id',$product->product_category_id)->first();
              $productSubCat = \App\Model\admin\ProductSubCategory::where('id',$product->product_sub_category_id)->first();
            @endphp
            <li class="px-3 py-2 mb-1 bg-light text-muted"><strong class="text-uppercase text-dark">Category:</strong>
              <a class="reset-anchor ms-2" href="{{ route('productCategory',$productCat->slug) }}">{{ $productCat->title }}</a>,
              <a class="reset-anchor ms-2" href="{{ route('productSubCategory',[$productCat->slug,$productSubCat->slug]) }}">{{ $productSubCat->title }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-5">
    <div class="container">
      <div class="row">
        <!-- Item information-->
        <div class="col-xl-10 mx-auto">
          <ul class="nav nav-tabs tabs-fill justify-content-center border-0 flex-column flex-md-row" id="myTab"
            role="tablist">
            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a
                class="nav-link text-small fw-bold py-3 border-0 active" id="description-tab" data-bs-toggle="tab"
                href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a
                class="nav-link text-small fw-bold py-3 border-0" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a
                class="nav-link text-small fw-bold py-3 border-0" id="shipping-tab" data-bs-toggle="tab"
                href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping &amp; Returns</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-3 p-md-5">
                <p class="text-muted mb-4">{!! $product->description !!}</p>
              </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="p-3 p-md-5">
                <p class="small text-muted mb-1">Based on 12 customers</p>
                <h5 class="mb-4">How customers reviewed this item</h5>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="d-flex mb-4"><img class="rounded-circle p-1 shadow-sm flex-grow-1 align-self-baseline"
                        src="{{ asset('frontend/img/client-2.f8d832d9.jpg') }}" alt="..." width="60">
                      <div class="ms-3">
                        <h3 class="h6 mb-0">Patrick Wood</h3>
                        <p class="text-gray small mb-0">15 Mar 2019</p>
                        <ul class="list-inline mb-3">
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                        </ul>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex mb-4"><img class="rounded-circle p-1 shadow-sm flex-grow-1 align-self-baseline"
                        src="{{ asset('frontend/img/client-2.f8d832d9.jpg') }}" alt="..." width="60">
                      <div class="ms-3">
                        <h3 class="h6 mb-0">Melissa Johanson</h3>
                        <p class="text-gray small mb-0">15 Mar 2019</p>
                        <ul class="list-inline mb-3">
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                          <li class="list-inline-item small m-0"><i class="fas fa-star text-primary small"></i></li>
                        </ul>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
              <div class="p-3 p-md-5">
                <h6>Returns Policy</h6>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo,
                  accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non
                  ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor
                  accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                <p class="text-muted mb-5">Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc
                  enim, sit amet pharetra erat aliquet ac.</p>
                <h6>Shipping</h6>
                <p class="text-muted">Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis
                  pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel
                  scelerisque elit, et vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper
                  massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis
                  consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Similar items-->
  <section class="pb-5">
    <div class="container pb-5">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <header class="text-center mb-5">
            <h2>You may also like</h2>
            <p class="text-muted">Related products</p>
          </header>
          <div class="swiper-container" id="similarItemsSlider">
            <div class="swiper-wrapper">
              <?php
              $CategoryWishproducts=\App\Model\admin\Product::where('product_category_id',$product->productCategory->id)->get();
              ?>
              @foreach($CategoryWishproducts as $product)
              <!-- Product-->
              <div class="swiper-slide pb-5">
                <div class="product mb-4">
                  <a href="{{ route('singleProduct',$product->slug) }}"><img class="img-fluid" src="{{ asset($product->image) }}"
                      alt="{{ $product->title }}" title="{{ $product->title }}"></a>
                  <div class="cta shadow d-inline-block">
                        <a class="product-btn" href="{{ route('singleProduct',$product->slug) }}"><i class="las la-expand"></i></a>

                      <a
                  class="product-btn" href="{{ route('addToCart',$product->id) }}"><i class="las la-shopping-cart"></i></a></div>
                </div>
                <h6 class="text-center"><a class="reset-anchor" href="{{ route('singleProduct',$product->slug) }}">{{ $product->title }}</a></h6>
                <p class="text-center text-muted font-weight-bold">{{ $currency_code }} {{ $product->new_price }}</span>
                      <del>{{ $currency_code }} {{ $product->new_price }}</del></p>
              </div>
              @endforeach
            </div>
            <div class="swiper-button-prev px-3 py-2">
              <i class="las la-arrow-left"></i> Prev
            </div>
            <div class="swiper-button-next px-3 py-2">
              Next
              <i class="las la-arrow-right"></i>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection