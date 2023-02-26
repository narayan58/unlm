@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('cartList'))
@section('title', 'Cart List  || ' . $sitedetail->title)
<div class="shopping_cart_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="cart_title">
          <h2>Shopping Cart</h2>
        </div>
        <div class="shopping-cart-table">
          <table class="cart_items">
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
            <?php $total = 0 ?>
              <?php $i =1;?>
              @foreach(session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
            <tr>
              <td><a href="{{ route('singleProduct',$details['slug']) }}">
              <img src="{{ $details['image'] }}" width="80px" alt="" /></a>
              <br>
              <td>{{$details['quantity'] }}</td>
              <td>{{ $currency_code }} {{ $details['price'] }}</td>
              <td>{{ $details['price'] * $details['quantity'] }}</td>
              <td>Action</td>
            </tr>
            @endforeach
            <tr>
              <td colspan="4">Sub Total</td>
              <td>{{ $currency_code }} {{ $total }} /-</td>
            </tr>
            <tr>
              <td colspan="4">Grand Total</td>
              <td>{{ $currency_code }} {{ $total }} /-</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="shopping_cart_main">
          <div class="slider2-shop">
            <a href="{{route('shop')}}"  class="continue_shopping">Continue Shopping</a>
          </div>
          <div class="slider2-shop">
            <a href="{{ route('checkout') }}"  class="continue_shopping">Process checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Shopping Cart top area -->
<!--Start Estimate Shipping,Discount,Total checkout area -->

<!--End Estimate Shipping,Discount,Total checkout area -->
<!--Start Branding area -->
<div class="branding_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="carousel_branding">
          <div class="single_branding">
            <img src="img/branding-image/brand1.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand2.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand3.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand4.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand2.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand1.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand3.jpg" alt="" />
          </div>
          <div class="single_branding">
            <img src="img/branding-image/brand2.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection