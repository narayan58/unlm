@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('blog'))
@section('title', 'Blog List  || ' . $sitedetail->title)
    <section class="about py-5 listBlog">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="aboutWrapper">
                        <h3 class="title text_p mb-3">Blog </h3>
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-sm-6">
                                <a href="{{ route('singleBlog',$blog->slug) }}">
                                    <article class="article mb-3">
                                        <figure>
                                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" class="img-fluid" >
                                        </figure>
                                        <h5 class="title text_p">
                                           {{ $blog->title }}
                                        </h5>
                                        <div class="excerpt text-muted f14 text_p">
                                          {!! str_limit($blog->description, 200) !!}
                                        </div>
                                        <div class="metas f14 text_p">
                                            <div class="meta">
                                                <i class="las la-calendar"></i>{{Carbon\Carbon::parse($blog->published_date)->toFormattedDateString()}}
                                            </div>

                                        </div>

                                    </article>
                                </a>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection