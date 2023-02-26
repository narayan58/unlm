@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->title)
@section('meta_keywords', $sitedetail->title)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->title)
@section('ogimage', asset($sitedetail->image))
@section('title', $sitedetail->title .' || '.$sitedetail->title)
<div class="ht__bradcaump__area" style=" background-color: #bcbcbc;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">{{ $customer->name }}</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('index') }}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active"><b>{{ $customer->name }}</b></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="list__view__wrapper">
                <!-- Start Single Product -->
                @if(!$favorites->isEmpty())
                @foreach($favorites as $favorite)
                <div class="list__view mt--40">
                    <div class="thumb">
                        <a class="first__img" href="{{ route('singleProduct',$favorite->product->slug) }}"><img src="{{ asset($favorite->product->image) }}" alt="product images"></a>
                        <a class="second__img animation1" href="{{ route('singleProduct',$favorite->product->slug) }}"><img src="{{ asset($favorite->product->image) }}" alt="product images"></a>
                    </div>
                    <div class="content">
                        <h2><a href="{{ route('singleProduct',$favorite->product->slug) }}">{{ $favorite->product->title }}</a></h2>
                        <ul class="rating d-flex">
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <ul class="prize__box">
                            <li>$ {{ $favorite->product->new_price }}</li>
                            <li class="old__prize">$ {{ $favorite->product->old_price }}</li>
                        </ul>
                        <p>{!! str_limit($favorite->product->description, 200) !!}</p>
                        <?php
                        $cart=\App\Model\admin\Cart::where('product_id',$favorite->product->id)->where('customer_id',$customer->id)->first();
                        ?>
                        <ul class="cart__action d-flex">
                            @if($cart)
                            <li class="cart"><a>Added cart</a></li>
                            @else
                                  <li class="cart">
                                <a id="CartAddBtn">
                                    <form id="CartAddForm">
                                        <input type="hidden" name="product_id" value="{{ $favorite->product->id }}">
                                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                        {{ csrf_field() }}
                                    </form>
                                    Add to cart
                                </a>
                            </li>
                            @endif
                            <li class="wishlist">
                                <a onclick="functionWishRemove({{ $favorite->id }})" style="background-color: #e59285; cursor: pointer;">
                                    <form id="wishlistRemoveForm{{ $favorite->id }}">
                                        <input type="hidden" name="favorite_id" value="{{ $favorite->id }}">
                                        {{ csrf_field() }}
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
                @else
                <tr class="text-center">
                    <p class="text-center" style="text-align: center;">There is no favorites</p>
                </tr>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
{{-- <li class="wishlist">
    <a id="wishlistStoreBtn" style="background-color: #e59285; cursor: pointer;">
        <form id="wishlistStoreForm">
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="hidden" name="product_id" value="{{ $favorite->product->id }}">
            {{ csrf_field() }}
        </form>
    </a>
</li> --}}