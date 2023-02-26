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
          <li class="breadcrumb-item active" aria-current="page">Forgot Your Password</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">

        <div class="col-sm-6">
          <h1 class="hero-heading">Forgot Your Password</h1>
          <p class="text-muted mb-5"> Forgot Your Password {{ $sitedetail->title }} Account</p>
          <h2 class="h4 mb-4">Please provide us your email address so that we can sent you a password reset link.</h2>
          <form class="mb-5" action="{{ route('post.forgotpassword') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email address">
               @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
              </div>

              <div class="form-group col-12">
                <button class="btn btn-primary"  type="submit">Send Password reset Link</button>
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