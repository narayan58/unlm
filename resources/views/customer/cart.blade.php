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
                    <h2 class="bradcaump-title">Cart</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('index') }}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active"><b>Cart</b></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content wnro__table table-responsive">
                        @if(!$carts->isEmpty())
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-price">Quantity</th>
                                    <th class="product-price">Total Price</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div style="display: none">
                                    {{ $total = 0 }}
                                </div>
                                @foreach($carts as $cart)
                                <tr>
                                    <td class="product-thumbnail"><a href="{{ route('singleProduct',$cart->product->slug) }}"><img src="{{ asset($cart->product->image) }}" alt="{{ $cart->product->title }}"></a></td>
                                    <td class="product-name"><a href="{{ route('singleProduct',$cart->product->slug) }}">{{ $cart->product->title }}</a></td>
                                    <td class="product-price"><span class="amount">Rs. {{ $cart->product->new_price }}</span></td>
                                    <td class="product-price"><span class="amount">{{ $cart->product_qty }}</span></td>
                                    <?php
                                    $productPrice = $cart->product_qty*$cart->product->new_price;
                                    ?>
                                    <td class="product-price"><span class="amount">Rs. {{ $productPrice }}</span></td>
                                    <td class="product-remove">
                                        <form id="cartRemoveForm{{ $cart->id }}">
                                            <a onclick="functionCartRemove({{ $cart->id }})" style="cursor: pointer;">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                                X
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center" style="text-align: center;">Cart is empty</p>
                        @endif
                    </div>
                </form>
                <div class="cartbox__btn">
                    <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                        <li><a href="{{ route('product') }}">Update Cart</a></li>
                        @if(!$carts->isEmpty())
                        <li><a href="{{ route('cartCheckout') }}">Check Out</a></li>
                        @else
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        @if(!$carts->isEmpty())
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cart__total__amount">
                        <span>Grand Total</span>
                        <span>$ {{ $total }}</span>
                        
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
    </div>
</div>
@endsection