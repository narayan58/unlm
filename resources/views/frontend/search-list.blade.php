@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)

  <!--  Modal -->
  {{-- <div class="modal fade" id="productView" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content rounded-0 border-0">
        <div class="modal-body p-0 overflow-hidden shadow">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0 modal-product-img"><a
                class="glightbox product-view d-block h-100 bg-cover bg-center"
                style="background: url(img/product-5.5d8c02c5.jpg)" href="img/product-5.5d8c02c5.jpg"
                data-gallery="productview"></a><a class="glightbox product-view h-100 bg-cover bg-center d-none"
                href="img/product-5-alt-1.2317c566.jpg" data-gallery="productview"></a><a
                class="glightbox product-view h-100 bg-cover bg-center d-none" href="img/product-5-alt-2.500c9984.jpg"
                data-gallery="productview"></a></div>
            <div class="col-lg-6">
              <button class="close modal-close p-4 border-0" type="button" data-bs-dismiss="modal"
                aria-label="Close"><span aria-hidden="true">
                  <i class="las la-times"></i>
                </span></button>
              <div class="p-5 my-md-4">
                <ul class="list-inline mb-2">
                  <li class="list-inline-item m-0"><i class="lar la-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="lar la-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="lar la-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="lar la-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="lar la-star text-warning"></i></li>
                </ul>
                <h2 class="h5 text-uppercase">Kui Ye Chen’s AirPods</h2>
                <p class="text-muted">$250</p>
                <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper
                  leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur
                  ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item me-3"><strong>Quantity</strong></li>
                  <li class="list-inline-item">
                    <div class="border d-flex align-items-center justify-content-between p-1">
                      <div class="quantity py-0">
                        <button class="dec-btn p-0" onclick="decrease(this)"><i class="las la-angle-left"></i></button>
                        <input class="form-control border-0 shadow-0 p-0 quantity-result" type="text" value="1">
                        <button class="inc-btn p-0" onclick="increase(this)"><i class="las la-angle-right"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="list-inline-item"><a class="btn btn-dark" href="cart.html">
                      <i class="las la-shopping-bag"></i> Add to cart</a></li>
                </ul><a class="p-0 reset-anchor" href="#"><i class="lab la-gratipay"></i>Add to wish list</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Hero section-->
  <section class="sub-hero bg-center bg-cover d-flex align-items-center"
    style="background: url(frontend/img/bg-banner.f561f8e8.jpg)">
    <div class="container">
      <h1 class="mb-1 hero-heading">Search Result</h1>
      <nav aria-label="breadcrumb" >
        <ol class="breadcrumb mb-0 px-0" style="background-color: transparent">
          <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Search Result</li>
        </ol>
      </nav>
    </div>
  </section>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">
        <!-- Shop sidebar-->
      <div class="col-xl-2 col-lg-3 order-2 order-lg-1">
        <h5 class="mb-4">Shop by Category</h5>
        <div class="accordion catCollapse mb-3" id="accordionExample">
          @foreach($productCategory as $category)
          <?php $subCategory = \App\Model\admin\ProductSubCategory::where('product_category_id',$category->id)->get(); ?>
          <?php $productCount = \App\Model\admin\Product::where('product_category_id',$category->id)->count(); ?>
          <div class="cat">
            <div class="cat-header" id="headingOne{{ $category->id }}">
              <button class="category_item collapsed" type="button" data-toggle="collapse" data-target="#collapseOne{{ $category->id }}" aria-expanded="true" aria-controls="collapseOne{{ $category->id }}">
              {{ $category->title }}<span class="badge bg-light text-dark">{{ $productCount }}</span>
              </button>
              
            </div>
            <div id="collapseOne{{ $category->id }}" class="collapse" aria-labelledby="headingOne{{ $category->id }}" data-parent="#accordionExample">
              <ul class="subcategories">
                @foreach($subCategory as $sub)
                <li>
                  <a href="{{ route('productSubCategory',[$category->slug,$sub->slug]) }}">{{ $sub->title }}
                  </a>
                </li>
                @endforeach
              </ul>
              
            </div>
          </div>
          @endforeach
        </div>
        </div>
        <!-- Shop listing-->
        <div class="col-xl-10 col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
          <!-- Listing filter-->
          <div class="row mb-4 pb-3 align-items-center">
            <div class="col-md-6 text-center text-md-start">
              <p class="small text-muted">Search result : <strong class="text-dark">"{{ $title }}"</strong>and <strong class="text-dark">{{ count($products) }}
                </strong>items founds</p>
            </div>
            <div class="col-md-6 text-lg-end">
              <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="#"><i
                        class="las la-th-list"></i></a></li>
                  <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="#"><i
                        class="las la-th"></i></a></li>
                  <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="#"><i
                        class="las la-th-large"></i></a></li>
                </ul>
                <ul class="list-inline mb-0 ms-2">
                  <li class="list-inline-item text-start">
                    <select class="form-control js-sort" id="productSort" name="product_sort">
                      <option value="">Sort by</option>
                      <option value="price_asc">Price: low to high</option>
                      <option value="price_desc">Price: high to low</option>
                      <option value="newest">Latest</option>
                      <option value="popularity">Popularity</option>
                    </select>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Product-->
            @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-6">
              <div class="product mb-4">
{{--                 <span class="badge rounded-0 bg-primary">New Arrival</span>
 --}}                <a href="{{ route('singleProduct',$product->slug) }}"><img class="img-fluid" src="{{ asset($product->image) }}"
                    alt="Round grey hanging decor"></a>
                <div class="cta shadow d-inline-block">
                  <a class="product-btn" href="{{ route('singleProduct',$product->slug) }}" data-bs-toggle="modal"><i
                      class="las la-expand"></i></a>
                  <a class="product-btn" href="{{ route('addToCart',$product->id) }}"><i
                      class="las la-shopping-cart"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="{{ route('singleProduct',$product->slug) }}">{{ $product->title }}</a></h6>
              <p class="text-center text-muted font-weight-bold mb-4">{{ $currency_code }} {{ $product->new_price }}  <del>{{ $currency_code }} {{ $product->old_price }}</del></p>
            </div>
            @endforeach
            <!-- Pagination-->
            <nav class="pt-5" aria-label="Page navigation">
            {{ $products->links('frontend.pagination') }}
            </nav>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection