@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('contact'))
@section('title', 'Contact Us  || ' . $sitedetail->title)
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="aboutWrapper">
                    <h3 class="title text_p mb-3">Contact us</h3>
                    <div class="row">
                        <div class="col-sm-7">
                            <ul style="list-style: none;" class="m-0 p-0">
                                <li>
                                    <p class="text-muted"> <i class="las la-building me-2"></i>{{ $sitedetail->title }}</p>
                                </li>
                                <li>
                                    <p class="text-muted"> <i class="las la-map me-2"></i>{{ $sitedetail->address }}</p>
                                </li>
                                <li>
                                    <p class="text-muted"> <i class="las la-phone me-2"></i>{{ $sitedetail->mobile_no }}</p>
                                </li>
                                <li>
                                    <p class="text-muted"> <i class="las la-envelope me-2"></i>{{ $sitedetail->email }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5">
                            <ul style="list-style: none;" class="m-0 p-3 bg_p_dim rounded">
                                <li>
                                    <a href="{{ $sitedetail->facebook }}" target="_blank">
                                        <p class="text-muted"> <i class="lab la-facebook me-2"></i>follow us on Facebook
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $sitedetail->twitter }}" target="_blank">
                                        <p class="text-muted"> <i class="lab la-twitter me-2"></i>follow us on Twitter
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $sitedetail->instagram }}" target="_blank">
                                        <p class="text-muted"> <i class="lab la-instagram me-2"></i>follow us on
                                            Instagram
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $sitedetail->youtube }}" target="_blank">
                                        <p class="text-muted"> <i class="lab la-youtube me-2"></i>follow us on
                                            Youtube
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="aboutWrapper">
                    <h3 class="title text_p mb-3">Send Message</h3>
                    <form id="contact_us_form" class="contactForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="uname" class="name"><small class="text-muted">Your Full
                                    Name</small></label>
                                    <input type="text" name="name" id="uname" placeholder="Full Name"
                                    class="form-control">
                                    <span id="error_contact_name" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="name"><small class="text-muted">Your Email
                                    Name</small></label>
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                    <span id="error_contact_email" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="unumbver" class="name"><small class="text-muted">Your Contact Number
                                    </small></label>
                                    <input type="tel" name="phoneno" id="unumbver " placeholder="Contact Number"
                                    class="form-control">
                                    <span id="error_contact_phoneno" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address" class="name"><small class="text-muted">Your
                                    Address</small></label>
                                    <input type="text" name="address" id="address " placeholder="Address"
                                    class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address" class="name"><small class="text-muted">Your
                                    Address</small></label>
                                    <textarea name="message" id="" cols="" rows="4" class="form-control"
                                    placeholder="Your Message"></textarea>
                                    <span id="error_contact_message" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn_p" id="contact_us_btn">Submit</button>
                                    <span id="contact_success" class="text-success"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
@endsection