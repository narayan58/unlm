@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('faq'))
@section('title', 'FAQ  || ' . $sitedetail->title)
    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="faqwrapper">
                        <h3 class="title text_p mb-3">Frequntly Asked Questions</h3>

                        <div id="accordion">
                           @foreach($faqs as $key=>$faq)
                           @if($key==0)
                            <div class="card">
                                <div class="card-header" id="heading{{ $faq->id }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{ $faq->id }}"
                                            aria-expanded="true" aria-controls="collapseOne{{ $faq->id }}">
                                            {{ $faq->title }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne{{ $faq->id }}" class="collapse show" aria-labelledby="heading{{ $faq->id }}"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                     {!! $faq->description !!}
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card">
                                <div class="card-header" id="heading{{ $faq->id }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{ $faq->id }}"
                                            aria-expanded="false" aria-controls="collapseOne{{ $faq->id }}">
                                            {{ $faq->title }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                     {!! $faq->description !!}
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection