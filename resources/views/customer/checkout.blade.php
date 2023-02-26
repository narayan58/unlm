@extends('frontend.pageparts.app')
@section('content')
<div class="ht__bradcaump__area" style=" background-color: #bcbcbc;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Checkout</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('index') }}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active"><b>Checkout</b></span>
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
            <div class="col-lg-6 col-12">
                <div class="customer_details">
                    <h3>Billing details</h3>
                       <p>Thank you checkout !!</p>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                <div class="wn__order__box">
                    <h3 class="onder__title">Your order</h3>
                    <ul class="order__total">
                        <li>Product</li>
                        <li>Total</li>
                    </ul>
                     <div style="display: none">
                                    {{ $total = 0 }}
                                </div>
                    <ul class="order_product">
                        @foreach($carts as $cart)
                        <li>{{ $cart->product->title }} <span>${{ $total += $cart->product->new_price }}</span></li>
                        @endforeach
                    </ul>
                    <ul class="total__amount">
                        <li>Order Total <span>$ {{ $total}}</span></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection