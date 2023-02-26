@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)
  <div class="bg-light py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 bg-light">
          <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">

        <div class="col-sm-6">
          <h1 class="hero-heading">Register Now</h1>
          <p class="text-muted mb-5"> Create your {{ $sitedetail->title }} Account</p>
          <h2 class="h4 mb-4">Personal information</h2>
          <form class="mb-5" id="customerRegisterForm">
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Full name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your full name">
                <span id="customerName" class="text-danger"></span>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email address">
                <span id="customerEmail" class="text-danger"></span>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Mobile</label>
                <input class="form-control" type="number" name="mobile" placeholder="Enter your mobile number">
                <span id="customerMobile" class="text-danger"></span>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Address</label>
                <input class="form-control" type="text" name="address" placeholder="Enter your address">
                <span id="customerAddress" class="text-danger"></span>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">City</label>
                <input class="form-control" type="text" name="city" placeholder="Enter your city">
                <span id="customerCity" class="text-danger"></span>
              </div>
            </div>
          {{-- <h2 class="h4 mb-4">Shipping details</h2>
          <form class="mb-5" action="#">
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Adress 1</label>
                <input class="form-control" type="text" name="address1" placeholder="Enter your main address">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Address 2</label>
                <input class="form-control" type="text" name="address2" placeholder="Enter your alternative address">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">City</label>
                <input class="form-control" type="text" name="city" placeholder="Enter your city">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Postal code</label>
                <input class="form-control" type="text" name="postcode" placeholder="City postal code">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Country</label>
                <select class="form-control js-country" name="country">
                  <option value="">Choose your Country</option>
                  <option value="Demo country">Demo country</option>
                  <option value="Demo country">Demo country</option>
                  <option value="Demo country">Demo country</option>
                  <option value="Demo country">Demo country</option>
                  <option value="Demo country">Demo country</option>
                </select>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">State</label>
                <select class="form-control js-choice" name="state">
                  <option value="">Choose your state</option>
                  <option value="Demo state">Demo state</option>
                  <option value="Demo state">Demo state</option>
                  <option value="Demo state">Demo state</option>
                  <option value="Demo state">Demo state</option>
                  <option value="Demo state">Demo state</option>
                </select>
              </div>
            </div>
          </form> --}}
          <h2 class="h4 mb-4">Your password</h2>
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
                <span id="customerPassword" class="text-danger"></span>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Confirm password</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                <span id="customerCPassword" class="text-danger"></span>
              </div>
              <div class="form-group col-12 mb-3">
                <div class="form-check">
                  <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                  <label class="form-check-label text-muted" for="flexCheckDefault">I have read and accept <a href="{{ route('singlePage','privacy-policy') }}">Privacy Policy</a></label>
                </div>
              </div>
              <div class="form-group col-12">
                <button class="btn btn-primary" id="customerRegisterBtn" type="button">Create your account</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-5 offset-sm-1">
          <div class="imagewrapper">
            <img src="{{ asset('frontend/img/login.svg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection