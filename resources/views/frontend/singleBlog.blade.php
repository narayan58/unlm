@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)
@section('ogtitle', $blog->title)
@section('ogdescription', $blog->meta_description)
@section('ogimage', asset($blog->image))
@section('ogurl', route('singleBlog',$blog->slug))
@section('title', $blog->title .' || '.$sitedetail->title)

<div class="ht__bradcaump__area py-5 singleBlog" style=" background-color: #bcbcbc;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-image: url('{{ asset($blog->image) }}');
  
  ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-left">
                          <h2 class="bradcaump-title">{{ $blog->title }} </h2>
                          
                          
                          <nav aria-label="breadcrumb" style="color: #fff">
  <ol class="breadcrumb" style="background-color: transparent">
    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>

        <li class="breadcrumb-item" aria-current="page">{{ $blog->title }}</li>

  </ol>
</nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
    <div class="page-blog-details section-padding--lg bg--white py-5 blogContent">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-12">
            <div class="blog-details content">
              <article class="blog-post-details">
                <div class="post-thumbnail">
                  <img src="{{ asset($blog->image) }}" class="img-fluid" alt="{{ $blog->title }}" title="{{ $blog->title }}">
                </div>
                <div class="post_wrapper">
                  <div class="post_header">
                    <h2 class="title text_p my-3">{{ $blog->title }}</h2>
                    <div class="blog-date-categori">
                      <ul style="margin: 0px; padding: 0px; list-style: none">
                        <li style="text-muted f14"> <i class="las la-calendar f18 text_p"></i> {{Carbon\Carbon::parse($blog->published_date)->toFormattedDateString()}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="post_content text_dim para f14 my-3">
                    {!!html_entity_decode($blog->description)!!}

                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
            <div class="wn__sidebar">
              <!-- Start Single Widget -->
              <aside class="widget search_widget">
                <h3 class="widget-title f16 fw600">Search</h3>
                <form action="#">
                  <div class="form-input">
                    <input type="text" placeholder="Search..." class="form-control">
                    <button class="btn mt-2 btn-sm px-3 py-2">Search</button>
                  </div>
                </form>
              </aside>
              <!-- End Single Widget -->
              <!-- Start Single Widget -->
              <aside class="widget recent_widget mt-3">
                <h3 class="widget-title f16 fw600">Recent Posts</h3>
                <div class="recent-posts">
                  <ul style="list-style: none; margin:0px; padding: 0px">
                    @foreach($blogs as $blog)
                    <li>
                         <a href="{{ route('singleBlog',$blog->slug) }}" style="color: #555">
                      <div class="post-wrapper">
                        <div class="thumb">
                         <img src="{{ asset($blog->image) }}" class="img-fluid" alt="blog images">
                        </div>
                        <div class="content my-3">
                          <h4 style="font-size: 18px; font-weight: 600" class="f16">{{ $blog->title }}</h4>
                          <p class='text-muted f14'>{{Carbon\Carbon::parse($blog->published_date)->toFormattedDateString()}}</p>
                        </div>
                      </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
