@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('checkout'))
@section('title', 'Checkout  || ' . $sitedetail->title)
<!--  Modal -->
<div class="modal fade" id="loginModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content rounded-0 border-0">
			<div class="modal-body p-0 overflow-hidden shadow">
				<div class="row align-items-stretch">
					<div class="col-lg-12">
						<button class="close modal-close p-4 border-0" type="button" data-bs-dismiss="modal"
						aria-label="Close"><span aria-hidden="true">
							<i class="las la-times"></i>
						</span></button>
						<div class="p-5 my-md-4">
							<h2 class="h5 text-uppercase">Let's Login</h2>
							<p class="text-muted">to your account</p>
							<form id="customerLoginForm" method="POST" class="loginForm">
								{{ csrf_field() }}
								<div class="form-group mb-2">
									<label for="username">Email</label>
									<input type="text" class="form-control" placeholder="Username or Email" name="email">
									<span class="errorMsg text-danger" id="cEmail"></span>
								</div>
								<div class="form-group mb-2">
									<label for="username">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
								<span class="errorMsg text-danger" id="cPassword"></span>
								<div class="form-group mb-2 d-flex align-items-center justify-content-between">
									<div class="left">
										<input type="checkbox" name="rem" id="rem" class="">
										<label for="rem">Remember Me</label>
									</div>
									<div class="right">
										<a href="{{ route('customerForgetPassword') }}" class="text_p">Forgot Password?</a>
									</div>
								</div>
								<div class="form-group mt-4">
									<button type="button" id="customerLoginBtn" class="btn btn_p">Login</button>
								</div>
								<div class="form-group text-muted mt-4">
									Do not have an account?
									<a href="{{ route('customer.register') }}">Let's create account <i class="las la-angle-right f16"></i></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb-->
<div class="bg-light py-2">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 bg-light">
				<li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Billing information</li>
			</ol>
		</nav>
	</div>
</div>
<section class="py-5 checkoutPage">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<!-- Navigation-->
				<div class="text-center mb-5">
					<h2>Billing information</h2>
				</div>
				<ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
					<li class="nav-item"><a class="nav-link disabled" href="#">1. Shopping cart</a></li>
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="">2. Billing Information</a></li>
					<li class="nav-item"><a class="nav-link disabled" href="#">3. Completed</a></li>
				</ul>
				<div class="row">
					<div class="col-lg-6">
						<div class="bg-light d-flex align-items-center justify-content-center justify-content-md-between px-3 py-2 mb-3">
							<h6 class="mb-0 py-1">Buyer info</h6>
							@if($customer)
							<p class="text-muted small mb-0 py-1">
								<u>{{ $customer->name }}</u>
							</p>
							@else
							<p class="text-muted small mb-0 py-1">Returning user? <a class="reset-anchor" class="product-btn"
								href="#loginModal" data-bs-toggle="modal">
								<u>login here</u></a>
							</p>
							@endif
						</div>
						<form action="{{ route('checkoutPost') }}" method="post">
							{{ csrf_field() }}
							<div class="row">
								@if($customer)
								<input type="hidden" name="customer_id" value="{{ $customer->id }}">
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Full name</label>
									<input class="form-control" type="text" name="name" value="{{ $customer->name }}" readonly placeholder="Enter your full name">
								</div>
								<div class="form-group col-lg-12 mb-3">
									<label class="form-label small text-uppercase">Mobile Number</label>
									<input class="form-control" type="tel" name="phone" value="{{ $customer->mobile }}" readonly placeholder="Enter Mobile Number">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Email address</label>
									<input class="form-control" type="email" name="email" value="{{ $customer->email }}" readonly placeholder="Enter your email address">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Adress</label>
									<input class="form-control" type="text" name="address" value="{{ $customer->address }}" placeholder="Enter your main address">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Location</label>
									<input class="form-control" type="text" name="city" value="{{ $customer->cjty }}" placeholder="Enter your city">
								</div>
								@else
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Full name</label>
									<input class="form-control" type="text" name="name" placeholder="Enter your full name">
								</div>
								<div class="form-group col-lg-12 mb-3">
									<label class="form-label small text-uppercase">Mobile Number</label>
									<input class="form-control" type="tel" name="phone" placeholder="Enter Mobile Number">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Email address</label>
									<input class="form-control" type="email" name="email" placeholder="Enter your email address">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Adress</label>
									<input class="form-control" type="text" name="address" placeholder="Enter your main address">
								</div>
								<div class="form-group col-12 mb-3">
									<label class="form-label small text-uppercase">Location</label>
									<input class="form-control" type="text" name="city" placeholder="Enter your city">
								</div>
								@endif
							</div>
						</div>
						<div class="col-lg-6 purchase">
							<div class="bg-light px-3 py-2 d-flex align-items-center justify-content-between mb-3">
								<h6 class="mb-0 py-1">
								<div class="titlelabel">Purchase Details</div>
								</h6>
								{{-- 	<div class="amount_pay">
									<p class=" mb-0">Total: <span class="text_p"><strong>Rs. 100000</strong></span> </p>
								</div> --}}
							</div>
							<table class="table">
								<tbody>
									<?php $total = 0 ?>
									@if(session('cart'))
									<?php $i =1;?>
									@foreach(session('cart') as $id => $details)
									<?php $total += $details['price'] * $details['quantity'] ?>
									<tr class="d-flex align-items-center">
										<td class="d-flex align-items-center productDetails">
											<div class="image">
												<img src="{{ $details['image'] }}" alt="" class="img-fluid">
											</div>
											<div class="details pl-3 f14 ">
												<strong class="f16 gap_small d-flex align-items-center">
												{{ $details['title'] }} ({{ $details['quantity'] }})
												</strong>
												<p class="text-muted mb-2 text_p"> <i class="las text_p la-wallet me-2"></i>{{ $currency_code }} {{ $details['price']}} X {{ $details['quantity'] }} =
												{{ $currency_code }} {{ $details['price'] * $details['quantity'] }}</p>
											</div>
										</td>
										{{-- <td class="">
											<button type="button" class=" btn bg_p_dim text_p">
											<i class="las la-trash"></i>
											</button>
										</td> --}}
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<div class="bg-light px-3 py-2 mb-3">
							     <h6 class="my-3">
								                Purchase Calculations
								            </h6>
								<table class="table">
								    <tr>
								        <td>Cart Total
								           
								        </td>
								        <td>
								            <b>{{ $currency_code }} {{ $total }} /-</b>
								        </td>
								        
								        </tr>
								    
								    
								    <tr>
								        
								        <td>Shipping</td>
									<td><b>{{ $currency_code }} {{ $shippingCharge }} /-</b></td>
								    </tr>
								    	<?php $finalTotal = $total+$shippingCharge; ?>
								    <tr>
								        
									<td>Total Payment</td>
									<td><strong class="text_p">{{ $currency_code }} {{ $finalTotal }} /-</strong></td>
								    </tr>
								</table>
							
									
							
							
								
									
							
							
								
							</div>
							<div class="selectpaymentmethod my-3">
							     <h6 class="my-3">
								               Choose Payment Method
								            </h6>
								<div class="row">
									<div class="col-sm-12 d-flex methods">
										<div class="form-group paymentOption flex1 d-flex align-items-center">
											<input type="radio" id="codpayment" name="paymentOptionItem" checked>
											<label for="codpayment"><img
												src="{{ asset('frontend/img/cod.png') }}" alt=""
												class="img-fluid">
											</label>
										</div>
										<div class="form-group paymentOption flex1 d-flex align-items-center">
											<input type="radio" id="esewapayment" name="paymentOptionItem" checked>
											<label for="esewapayment"><img
												src="https://media.ttmind.com/Media/tech/article_70_6-28-201912-07-34PM.png" alt=""
												class="img-fluid">
											</label>
										</div>
										<div class="form-group paymentOption flex1 d-flex align-items-center">
											<input type="radio" id="khaltipayment" name="paymentOptionItem" checked>
											<label for="khaltipayment"><img
												src="https://miro.medium.com/max/1006/1*xqUNa2hUbiis04Z2XTr4Jw.png" alt=""
												class="img-fluid">
											</label>
										</div>
										<div class="form-group paymentOption flex1 d-flex align-items-center">
											<input type="radio" id="connectIpsPayment" name="paymentOptionItem" checked>
											<label for="connectIpsPayment"><img
												src="https://www.connectips.com/templates/protostar/images/loading-screen.png" alt=""
												class="img-fluid">
											</label>
										</div>
									</div>
								</div>
							</div>
							<!-- Footer-->
							<input type="hidden" name="final_total" value="{{ $finalTotal }}">
							<input type="hidden" name="shipping_charge" value="{{ $shippingCharge }}">
							<input type="hidden" name="sub_total_price" value="{{ $total }}">
							<div class="terms my-3">
								<input type="checkbox"  class="input-checkbox" name="terms" id="terms">
								<label for='terms' class="conditions-checkbox-text">I have read and agree to the website <a href="{{ route('singlePage','terms-and-conditions') }}" class="conditions-link" target="_blank">terms and conditions</a></label>&nbsp;<span class="required">*</span>
								<input type="hidden" name="terms-field" value="1">
								<div class="bg-light p-4 mt-3">
									<div class="row align-items-center">
										<div class="col-md-12">
											<ul class="list-inline mb-0 d-flex justify-content-between">
												<li class="list-inline-item py-1"><a class="btn btn_secondary" href="{{ route('cartList') }}"> <i
												class="fas fa-shopping-cart me-2"></i>Back to cart</a></li>
												<li class="list-inline-item py-1"><button type="submit" class="btn btn-primary"> Place Order</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	@endsection