@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)


    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="aboutWrapper">
                        <h3 class="title text_p mb-3">{{ $page->title }}</h3>
                        <p class="text-muted">
                            {!! $page->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection