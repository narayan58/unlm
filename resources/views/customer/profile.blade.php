@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->title)
@section('meta_keywords', $sitedetail->title)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->title)
@section('ogimage', asset($sitedetail->image))
@section('title', $sitedetail->title .' || '.$sitedetail->title)
<div class="ht__bradcaump__area" style=" background-color: #bcbcbc;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">{{ $customer->name }}</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('index') }}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active"><b>{{ $customer->name }}</b></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
             <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                <div class="wn__order__box">
                    <h3 class="onder__title">Your profile</h3>
                    <table class="table">
        <tbody>
            <tr>
                <td>
                Name
                </td>
                <td>
                    {{ $customer->name}}
                </td>
            </tr>

             <tr>
                <td>
                Email
                </td>
                <td>
                    {{ $customer->email}}
                </td>
            </tr>
        </tbody>
    </table>
                </div>

            </div>
            <div class="col-lg-6 col-12">
                <div class="customer_details">
                    <h3>Change Password</h3>
                        <form id="customerPasswordChangeForm">
                            {{ csrf_field() }}
                    <div class="customar__field">
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Current Password <span>*</span></label>
                                <input type="password" name="old">
                                <span id="customerPasswordChangeOld" class="text-danger"></span>
                            </div>
                            <div class="input_box space_between">
                                <label>New Password <span>*</span></label>
                                <input type="password" name="password">
                                    <span id="customerPasswordChangeNew" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Confirm Password <span>*</span></label>
                                <input type="password" name="password_confirmation">
                                    <span id="customerPasswordChangeConf" class="text-danger"></span>
                            </div>
                        </div>
                        <button class="contactbtn" id="customerPasswordChangeBtn" style="background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                        border: 2px solid #333;
                        box-shadow: none;
                        color: #333;
                        display: inline-block;
                        font-family: Poppins,Arial,Helvetica,sans-serif;
                        font-size: 12px;
                        font-weight: 700;
                        line-height: 34px;
                        padding: 2px 20px 0;
                        text-shadow: none;
                        text-transform: uppercase;
                        transition: all 0.4s ease 0s;
                        ">Change Password</button>
                    </div>
                    </form>
                    <span id="customerPasswordChangeSm" class="text-sucess"></span>
                </div>
            </div>
           
        </div>
    </div>
</section>
@endsection