@extends('email.master') 
@section('title', $subject)
@section('icon', asset('email_icon/circle-icon-message.png', $secure = null))
{{-- @section('date', \Carbon\Carbon::parse($sitedetail)->format('l, jS \of F Y')) --}}
{{-- @section('clickhere_url', route('newsletterdetail',$slug)) --}}
@section('main-content')
<tr>
    <td style="color: rgb(40, 40, 40); font-size: 15px; line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; border-color: rgb(40, 40, 40);">
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
                    Dear Sir,
                </multiline>
            </span>
        </div>
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
            	<br>
                	Your login credentials for Chef Login are as:
                </multiline>
            </span>
        </div>
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
                	<b>username : {{ $chefdetail->mobileno }}</b>
                </multiline>
            </span>
        </div>
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
                	<b>password : {{ $password }}</b>
                </multiline>
            </span>
        </div>
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
                    <b>url : {{ CHEF_URL }}</b>
                </multiline>
            </span>
        </div>
        <div style="line-height: 2;" id="detail-content">
            <span>
                <multiline>
                	<br>
                	Please change your password after successful login.
                </multiline>
            </span>
        </div>
    </td>
</tr>
@endsection