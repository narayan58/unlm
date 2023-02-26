@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('artistCollective'))
@section('title', 'Artist Collective || ' . $sitedetail->title)
<div class="about_hope_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                <div class="about_hope_text">
                    <h1>ABOUT UNLM</h1>
                    <p>Land of Buddha. Land of Culture. The idea for UNML came from the symbol of unalome. It represents the path to enlightenment in the Buddhist culture. Life is full of twists and turns and that’s what the spirals in the symbol symbolise, and the straight line is the moment one reaches peace. Hence the idea for UNLM was born- to connect people through the symbol of unalome- through art of lifestyle- wherein one finds peace and harmony in chaos- the art of finding comfort. UNML is all about representing lifestyle and culture through apparel and accessories.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="about_hope_image">
                    <img src="{{asset('http://unlm.basnepalcenter.com/image/about/20220727114202.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection