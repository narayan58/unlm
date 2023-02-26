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
                    <h1>UNLM X CALLI</h1>
                    <p>At UNLM, we aim to revive the beauty of our culture, to a creative translation of great traditions into a common future. “Traditions” and “modernity” are widely used as polar opposites but at UNLM we identify ourselves as traditionalist with a metropolitan attitude.
                    </p>
                    <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam sollicitudin tempus consectetur conubia, urna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="about_hope_image">
                    <img src="{{asset('http://unlm.basnepalcenter.com/image/about/20220727114444.png')}}" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                <div class="about_hope_text">
                    <h1>INTRO: CALLIGRAFFITI</h1>
                    <p>When calligraphy, typography and graffiti were fused into one, a new art form was born and named Calligraffiti. The ancient practice merged with the modern techniques of graffiti, an art form that combines the rich history of craftsmanship with a progressive contemporary edge

                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="about_hope_image">
                    <img src="{{asset('http://unlm.basnepalcenter.com/image/about/20220727114613.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection