@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('gallery'))
@section('title', 'Gallery  || ' . $sitedetail->title)
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
<div class="properties mb-40">
<div class="properties__card">
<div class="properties__img">
    <a href="https://nswlandscaping.com/public/uploads/shares/service/spring-and-fall-cleanup.jpg" data-lightbox="example-set">
        <img src="https://nswlandscaping.com/public/uploads/shares/service/spring-and-fall-cleanup.jpg" alt="">
    </a>
</div>

</div>
</div>
</div>
    <div class="col-lg-4 col-md-6 col-sm-6">
<div class="properties mb-40">
<div class="properties__card">
<div class="properties__img">
    <a href="https://nswlandscaping.com/public/uploads/shares/service/retain-wall.jpg" data-lightbox="example-set">
        <img src="https://nswlandscaping.com/public/uploads/shares/service/retain-wall.jpg" alt="">
    </a>
</div>

</div>
</div>
</div>
    <div class="col-lg-4 col-md-6 col-sm-6">
<div class="properties mb-40">
<div class="properties__card">
<div class="properties__img">
    <a href="https://nswlandscaping.com/public/uploads/shares/service/turf.jpg" data-lightbox="example-set">
        <img src="https://nswlandscaping.com/public/uploads/shares/service/turf.jpg" alt="">
    </a>
</div>

</div>
</div>
</div>

</div>
@endsection