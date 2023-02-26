@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)
<!-- Breadcrumb-->
<div class="bg-light py-2">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 bg-light">
        <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Page Not Found !!</li>
      </ol>
    </nav>
  </div>
</div>
<section class="py-5">
  <div class="container py-5">
    <div class="row">
      Page Not Found !!
    </div>
  </div>
</div>
</div>
</section>
@endsection