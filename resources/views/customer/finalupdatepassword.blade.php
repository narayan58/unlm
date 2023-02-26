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
          <li class="breadcrumb-item active" aria-current="page">Set New Password</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">

        <div class="col-sm-6">
          <h1 class="hero-heading">Set New Password</h1>
          <p class="text-muted mb-5"> Set New Password for {{ $sitedetail->title }} Account</p>
          <form class="mb-5" action="{{ route('postupdatepassword',['id'=>$c->mobile,'token'=>$c->verify_token]) }}" method="POST">
            {{ csrf_field() }}
        <input type="hidden" name="mobile" value="{{ $c->mobile }}">
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">New Password</label>
                <input class="form-control" type="password" name="password" placeholder="New Password">
               @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
              </div>


              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
               @if ($errors->has('password_confirmation'))
                    <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                @endif
              </div>

              <div class="form-group col-12">
                <button class="btn btn-primary"  type="submit">Update Password</button>
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