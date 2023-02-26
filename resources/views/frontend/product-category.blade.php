@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $productCategory->meta_description)
@section('meta_keywords', $productCategory->meta_keywords)
@section('ogtitle', $productCategory->meta_title)
@section('ogdescription', $productCategory->meta_description)
@section('ogimage', $productCategory->image)
@section('ogurl', route('productCategory',$productCategory->slug))
@section('title', $productCategory->title . $sitedetail->title)
  <!-- Hero section-->
  <section class="sub-hero bg-center bg-cover d-flex align-items-center"
    style="background: url({{ asset('frontend/img/bg-banner.f561f8e8.jpg') }})">
    <div class="container">
      <h1 class="mb-1 hero-heading">Shop</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 px-0" style="background-color: transparent">
          <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
          @foreach($allProductCategory as $category)
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
              {{-- <p class="small text-muted">Showing <strong class="text-dark">12 </strong>of <strong class="text-dark">265
                </strong>items</p> --}}
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
                    alt="{{ $product->title }}" title="{{ $product->title }}"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href="{{ route('singleProduct',$product->slug) }}"><i
                      class="las la-expand"></i></a><a class="product-btn" href="{{ route('addToCart',$product->id) }}"><i
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