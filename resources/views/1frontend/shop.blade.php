@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('shop'))
@section('title', 'Shop  || ' . $sitedetail->title)
<!--  Modal -->
<!-- Hero section-->
<section class="sub-hero bg-center bg-cover d-flex align-items-center"
  style="background: url(frontend/img/bg-banner.f561f8e8.jpg)">
  <div class="container">
    <h1 class="mb-1 hero-heading">Shop</h1>
    <nav aria-label="breadcrumb" >
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
        <!--<ul class="list-unstyled text-muted mb-5">-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor"-->
        <!--      href="#">Clothes</a><span class="badge bg-light text-dark">240</span></li>-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor"-->
        <!--      href="#">Electronics</a><span class="badge bg-light text-dark">120</span></li>-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor" href="#">Health-->
        <!--      &amp; Beauty</a><span class="badge bg-light text-dark">70</span></li>-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor"-->
        <!--      href="#">Shoes</a><span class="badge bg-light text-dark">324</span></li>-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor"-->
        <!--      href="#">Watches</a><span class="badge bg-light text-dark">180</span></li>-->
        <!--  <li class="mb-2 d-flex align-items-center justify-content-between"><a class="reset-anchor"-->
        <!--      href="#">Accessories</a><span class="badge bg-light text-dark">77</span></li>-->
        <!--</ul>-->
        
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
        
        {{--                                   <h5 class="mb-3">Show by brand</h5>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck1" type="checkbox" checked>
          <label class="form-check-label" for="exampleCheck1">Zara</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck2" type="checkbox" checked>
          <label class="form-check-label" for="exampleCheck2">Cucci</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck3" type="checkbox" checked>
          <label class="form-check-label" for="exampleCheck3">Rayban</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck4" type="checkbox" checked>
          <label class="form-check-label" for="exampleCheck4">Defactu</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck5" type="checkbox">
          <label class="form-check-label" for="exampleCheck5">River Nine</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck6" type="checkbox">
          <label class="form-check-label" for="exampleCheck6">Puma</label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" id="exampleCheck7" type="checkbox">
          <label class="form-check-label" for="exampleCheck7">Nike</label>
        </div>
        <div class="mb-5 form-check">
          <input class="form-check-input" id="exampleCheck8" type="checkbox">
          <label class="form-check-label" for="exampleCheck8">Ravin</label>
        </div>
        <h5 class="mb-3">Shop by color</h5>
        <form action="#">
          <div class="form-check">
            <input class="form-check-input" id="seaColor" type="checkbox">
            <label class="form-check-label d-flex align-items-center" for="seaColor"><i
              class="fas fa-circle text-primary me-2 text-xs"></i><span>Sea</span></label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="yellowColor" type="checkbox">
              <label class="form-check-label d-flex align-items-center" for="yellowColor"><i
                class="fas fa-circle text-warning me-2 text-xs"></i><span>Yellow</span></label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="greenColor" type="checkbox">
                <label class="form-check-label d-flex align-items-center" for="greenColor"><i
                  class="fas fa-circle text-success me-2 text-xs"></i><span>Green</span></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="cyanColor" type="checkbox">
                  <label class="form-check-label d-flex align-items-center" for="cyanColor"><i
                    class="fas fa-circle text-info me-2 text-xs"></i><span>Cyan</span></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="redColor" type="checkbox">
                    <label class="form-check-label d-flex align-items-center" for="redColor"><i
                      class="fas fa-circle text-danger me-2 text-xs"></i><span>Red</span></label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="blackColor" type="checkbox">
                      <label class="form-check-label d-flex align-items-center" for="blackColor"><i
                        class="fas fa-circle text-dark me-2 text-xs"></i><span>Black</span></label>
                      </div>
                    </form> --}}
                  </div>
                  <!-- Shop listing-->
                  <div class="col-xl-10 col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                    <!-- Listing filter-->
                    <div class="row mb-4 pb-3 align-items-center">
                      <div class="col-md-6 ">
                        {{-- <p class="small text-muted">Showing <strong class="text-dark">12 </strong>of <strong class="text-dark">265
                        </strong>items</p>  --}}
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
                          <a href="{{ route('singleProduct',$product->slug) }}"><img class="img-fluid" src="{{ asset($product->image) }}"
                          alt="Round grey hanging decor"></a>
                          <div class="cta shadow d-inline-block">
                          <a class="product-btn" href="{{ route('singleProduct',$product->slug) }}"><i
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