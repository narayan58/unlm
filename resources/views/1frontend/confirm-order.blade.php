@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('confirmOrder',$order->order_code))
@section('title', 'Order Confirmation  || ' . $sitedetail->title)
  <!-- Breadcrumb-->
  <div class="bg-light py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 bg-light">
          <li class="breadcrumb-item"><a class="reset-anchor" href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Completed</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <!-- Navigation-->
          <header class="text-center mb-5">
            <h2>Completed</h2>
          </header>
          <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
            <li class="nav-item"><a class="nav-link disabled" href="#">1. Shopping cart</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">2. Billing Information</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">3. Completed</a></li>
          </ul>
          <div class="text-center">
            <i class="las la-shipping-fast copleteIcon"></i>
            <h1>Thank you</h1>
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <p class="text-muted mb-4">Your Order {{ $order->order_code }} Successully Placed.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div><a class="btn btn-primary" href="{{ route('shop') }}"> <i class="las la-shopping-bag me-2"></i>Continue
              shopping</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection