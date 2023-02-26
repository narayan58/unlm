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
          <li class="breadcrumb-item active" aria-current="page">VERIFY CODE</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">

        <div class="col-sm-6">
          <h1 class="hero-heading">VERIFY CODE</h1>
          <p class="text-muted mb-5"> Forgot Your Password {{ $sitedetail->title }} Account</p>
          <h2 class="h4 mb-4">Enter Your Token which has been sent to email or mobile number.</h2>
          <form class="mb-5" action="{{ route('post.verifytoken') }}" method="POST">
            {{ csrf_field() }}
        <input type="hidden" name="mobile" value="{{ $c->mobile }}">
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Enter OTP</label>
                <input class="form-control" type="text" name="otpcode" placeholder="Enter OTP">
               @if ($errors->has('otpcode'))
                    <p class="text-danger">{{ $errors->first('otpcode') }}</p>
                @endif
              </div>

              <div class="form-group col-12">
                <button class="btn btn-primary"  type="submit">Verify OTP</button>
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