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
                    <h1>Artist Name</h1>
                    <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam sollicitudin tempus consectetur conubia, urna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod</p>
                    <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam sollicitudin tempus consectetur conubia, urna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod</p>
                    <div class="member_iconsD">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="about_hope_image">
                    <img src="{{asset('frontend/img/author/team30.jpg')}}" alt="" />
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="about_hope_image">
                    <img src="{{asset('frontend/img/author/team30.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                <div class="about_hope_text">
                    <h1>Artist Name</h1>
                    <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam sollicitudin tempus consectetur conubia, urna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod</p>
                    <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam sollicitudin tempus consectetur conubia, urna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod</p>
                    <div class="member_iconsD">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection