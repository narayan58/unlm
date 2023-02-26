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
          <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-5">
          <h1 class="hero-heading">Login</h1>
          <p class="text-muted mb-5">Welcome to {{ $sitedetail->title }}! Please login.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h2 class="h4 mb-4">Returning user</h2>
          <form class="mb-5" id="customerLoginForm">
            {{ csrf_field() }}
            <input type="hidden" name="from_login" value="1">
            <div class="row">
              <div class="form-group col-lg-6 mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control" type="text" name="email" placeholder="Email address">
                <span id="cEmail" class="text-danger"></span>
              </div>
              <div class="form-group col-lg-6 mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
                <span id="cPassword" class="text-danger"></span>
              </div>
              <div class="form-group col-12 mb-3">
                <div class="form-check">
                  <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                  <label class="form-check-label text-muted" for="flexCheckDefault">Remember me for next time</label>
                  {{-- <label class="form-check-label text-muted" for="flexCheckDefault">Remember me for next time</label> --}}
                  <a href="{{ route('customerForgetPassword') }}" class="text_p" style="text-align: right;">Forgot Password?</a>

                </div>
              </div>
              <div class="form-group col-12">
                <button class="btn btn-primary" id="customerLoginBtn" type="button">Login</button>
                  <span id="customerLoginMessage" class="text-danger"></span>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-5 ms-auto">
          <h2 class="h4 mb-4">New customer</h2>
          <p class="text-muted">Create your {{ $sitedetail->title }} Account</p><a class="btn btn-primary" href="{{ route('customer.register') }}">Create an
            account</a>
        </div>
      </div>
    </div>
  </section>
@endsection