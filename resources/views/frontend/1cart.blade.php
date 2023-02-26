@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('cartList'))
@section('title', 'Cart List  || ' . $sitedetail->title)
<!-- Breadcrumb-->
<div class="bg-light py-2">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 bg-light">
        <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
      </ol>
    </nav>
  </div>
</div>
<section class="py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <!-- Navigation-->
        <div class="text-center mb-5">
          <h2>Shopping cart</h2>
        </div>
        <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
          <li class="nav-item"><a class="nav-link active" aria-current="page">1. Shopping cart</a></li>
          <li class="nav-item"><a class="nav-link disabled" href="#">2. Billing Information</a></li>
          <li class="nav-item"><a class="nav-link disabled" href="#">3. Completed</a></li>
        </ul>
        <!-- Shopping cart-->
        <div class="table-responsive mb-4">
          @if(session('cart'))
          <table class="table">
            <thead class="bg-light">
              <tr>
                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Product</strong></th>
                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Price</strong></th>
                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Quantity</strong></th>
                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Total</strong></th>
                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Action</strong></th>
              </tr>
            </thead>
            <tbody>
              <?php $total = 0 ?>
              <?php $i =1;?>
              @foreach(session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
              <tr>
                <th class="p-3 pl-0 border-0" scope="row">
                  <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link"
                  href="detail.html"><img src="{{ $details['image'] }}" alt="" width="70"></a>
                  <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link"
                  href="{{ route('singleProduct',$details['slug']) }}">{{ $details['title'] }}</a></strong></div>
                </div>
              </th>
              <td class="p-3 align-middle border-0">
                <p class="mb-0 small">{{ $currency_code }} {{ $details['price'] }}</p>
              </td>
              <td class="p-3 align-middle border-0">
                <div class="border d-inline-block px-2">
                  <div class="quantity">
                    <button class="dec-btn p-0" onclick="decrease(this)"><i class="las la-caret-left"></i></button>
                    <input class="form-control border-0 shadow-0 p-0 quantity-result quantityData" type="text" value="{{ $details['quantity'] }}">
                    <button class="inc-btn p-0" onclick="increase(this)"><i class="las la-caret-right"></i></button>
                  </div>
                </div>
              </td>
              <td class="p-3 align-middle border-0">
                <p class="mb-0 small">{{ $currency_code }} {{ $details['price'] * $details['quantity'] }}</p>
              </td>
              <td class="p-3 align-middle border-0"><a class="reset-anchor update-cart" data-id="{{ $id }}"><i class="las la-save"></i></a>
              <a class="reset-anchor remove-from-cart"  data-id="{{ $id }}"><i
              class="las  la-trash-alt small text-muted"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Cart footer-->
        <div class="bg-light p-4">
          <div class="row align-items-center">
            <div class="col-md-6">
              <ul class="list-inline mb-0">
                <li class="list-inline-item py-1"><a class="btn btn_secondary" href="{{ route('shop') }}"> <i
                class="las la-shopping-bag me-2"></i>Continue shopping</a>
              </li>
              <li class="list-inline-item py-1"><a class="btn btn-primary" href="{{ route('checkout') }}"><i
              class="las la-wallet me-2"></i>Process checkout</a></li>
            </ul>
          </div>
          <div class="col-md-6 text-start text-md-end">
            <p class="text-muted mb-1">Cart total</p>
            <h6 class="h4 mb-0">{{ $currency_code }} {{ $total }} /-</h6>
          </div>
          @else
          <p>Your Cart is Empty .</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection