@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('index'))
@section('title', $sitedetail->title)
<!-- Breadcrumb-->
<div class="bg-light py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 bg-light">
                <li class="breadcrumb-item"><a class="reset-anchor" href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
</div>
<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="title">
                Welcome, {{ $customer->name }}!
                </h3>
                <div class="nav flex-column nav-pills me-3 " id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true"><i class="las la-file-invoice me-2"></i>My Orders</button>
                    {{-- <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true"><i class="las la-heart me-2"></i>My Wishlist</button> --}}
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false"><i class="las la-id-card me-2"></i>My Account</button>
{{--                     <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false"><i class="las la-map me-2"></i>My Address</button> --}}
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"><i class="las la-key me-2"></i>Change Password</button>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <h3 class="title">
                        My Orders
                        </h3>
                        <div class="orderwrapper">
                            <div class="table-responsive">
                                
                          
                            <table class="table orderTable">
                                <thead>
                                    <tr class="order heading f14 fwb  bg_p_dim rounded">
                                        <td class="sn">#</td>
                                        <td class="pimage">Order Code</td>
                                        <td class="pdetails">Product Details</td>
                                        <td class="odetails">Order Details</td>
                                        {{-- <td class="odetails">Total Price</td> --}}
                                        <td class="paction">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($orders as $order)
                                    @php
                                    $subOrders = \App\Model\admin\ProductOrderList::where('order_code_id',$order->id)->get();
                                    @endphp
                                    <tr class="order">
                                        <td class="sn">{{ $i++ }}</td>
                                        <td class="pimage">
                                            <p>{{ $order->order_code }}</p>
                                        </td>
                                        <td class="pdetails">
                                            @foreach($subOrders as $subOrder)
                                            <div class="productInfo">
                                                <a href="{{ route('singleProduct',$subOrder->product->slug) }}">
                                                    <b class="d-block text_p">{{ $subOrder->product->title }}</b>
                                                </a>
                                                <div class="info text-muted">
                                                    <small>
                                                    Ordered Quantity: {{ $subOrder->product_qty }}
                                                    </small>
                                                </div>
                                                {{-- <div class="price my-2">
                                                    <a href="#">
                                                        <i class="las la-wallet me-2"></i> <small>Rs. 2300</small>
                                                    </a>
                                                </div> --}}
                                            </div>
                                            @endforeach
                                        </td>
                                        <td class="odetails">
                                            <div class="wrapper">
                                                <div class="info text-muted">
                                                    <small>
                                                    Sub Total Price: {{ $currency_code }} {{ $order->sub_total_price }}
                                                    </small>
                                                </div>

                                                <div class="info text-muted">
                                                    <small>
                                                    Shipping Cost: {{ $currency_code }} {{ $order->shipping_cost }}
                                                    </small>
                                                </div>

                                                <div class="info text-muted">
                                                    <small>
                                                    Final Price: {{ $currency_code }} {{ $order->final_price }}
                                                    </small>
                                                </div>
                                                {{-- 
                                                <div class="info text-muted">
                                                    <small>
                                                    Total Amount: 2*2300 = Rs. 4600
                                                    </small>
                                                </div>
                                                <div class="info text-muted mb-2">
                                                    <small>
                                                    Order Status: Pending
                                                    </small>
                                                </div> --}}
                                                <div class="info text_p">
                                                    <i class="las la-calendar me-2"></i><small> {{ Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</small>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="paction">
                                            <a href="" class="d-block mb-2">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                   {{--  <i class="las la-eye"></i> --}} 
                                                   @if($order->status==0)
                                                   <small>Processing</small>
                                                   @else
                                                   <small>Completed</small>
                                                   @endif
                                                </div>
                                            </a>
                                            <!-- <a href="#" class="d-block">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                    <i class="las la-eye"></i> <small>View Product</small>
                                                </div>
                                            </a> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                              </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <h3 class="title">
                        My Wishlists
                        </h3>
                        <div class="orderwrapper">
                            <table class="table orderTable">
                                <thead>
                                    <tr class="order heading f14 fwb  bg_p_dim rounded">
                                        <td class="sn">#</td>
                                        <td class="pimage">Product Image</td>
                                        <td class="pdetails">Product Details</td>
                                        <td class="odetails">Wish Details</td>
                                        <td class="paction">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="order">
                                        <td class="sn">1</td>
                                        <td class="pimage">
                                            <img src="img/product-1.ea13b77a.jpg" alt="" class="img-fluid">
                                        </td>
                                        <td class="pdetails">
                                            <div class="productInfo">
                                                <a href="#">
                                                    <b class="d-block text_p">Red Hot Watch, Professional</b>
                                                </a>
                                                <p class="text-muted mb-0">
                                                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                    </small>
                                                </p>
                                                <div class="price my-2">
                                                    <a href="#" class="bg_p_dim px-3 py-2">
                                                        <i class="las la-wallet me-2"></i> <small>Rs. 2300</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="odetails">
                                            <div class="wrapper">
                                                <div class="info text_p">
                                                    <i class="las la-calendar me-2"></i><small>May 21 2021, 03:00
                                                    PM</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="paction">
                                            <a href="#" class="d-block mb-2">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                    <i class="las la-eye"></i> <small>Purchase</small>
                                                </div>
                                            </a>
                                            <a href="#" class="d-block mb-2">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                    <i class="las la-trash"></i> <small>Remove</small>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order">
                                        <td class="sn">1</td>
                                        <td class="pimage">
                                            <img src="img/product-1.ea13b77a.jpg" alt="" class="img-fluid">
                                        </td>
                                        <td class="pdetails">
                                            <div class="productInfo">
                                                <a href="#">
                                                    <b class="d-block text_p">Red Hot Watch, Professional</b>
                                                </a>
                                                <p class="text-muted mb-0">
                                                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                    </small>
                                                </p>
                                                <div class="price my-2">
                                                    <a href="#" class="bg_p_dim px-3 py-2">
                                                        <i class="las la-wallet me-2"></i> <small>Rs. 2300</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="odetails">
                                            <div class="wrapper">
                                                <div class="info text_p">
                                                    <i class="las la-calendar me-2"></i><small>May 21 2021, 03:00
                                                    PM</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="paction">
                                            <a href="#" class="d-block mb-2">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                    <i class="las la-eye"></i> <small>Purchase</small>
                                                </div>
                                            </a>
                                            <a href="#" class="d-block mb-2">
                                                <div class="view bg_p_dim px-2 py-2 rounded text-center">
                                                    <i class="las la-trash"></i> <small>Remove</small>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <h3 class="title">
                        My Account
                        </h3>
                        <h6 class="subtitle text_p m2-4">Personal information</h6>
                        <form class="mb-5" id="customerProfileChangeForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Full name</label>
                                    <input class="form-control" type="text" name="name"
                                    readonly value="{{ $customer->name }}" placeholder="Enter your first name">
                                    <span id="customerFullNameUpdate" class="text-danger"></span>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input class="form-control" type="email" name="email"
                                    readonly value="{{ $customer->email }}" placeholder="Enter your email address">
                                    <span id="customerEmailUpdate" class="text-danger"></span>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Mobile</label>
                                    <input class="form-control" type="number" name="mobile"
                                    readonly value="{{ $customer->mobile }}" placeholder="Enter your mobile number">
                                    <span id="customerMobileUpdate" class="text-danger"></span>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" type="text" name="address"
                                     value="{{ $customer->address }}" placeholder="Enter your address">
                                    <span id="customerAddressUpdate" class="text-danger"></span>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input class="form-control" type="text" name="city"
                                     value="{{ $customer->city }}" placeholder="Enter your city">
                                    <span id="customerCityUpdate" class="text-danger"></span>
                                </div>

                                <div class="form-group col-12">
                                    <button class="btn btn-primary" type="submit" id="customerProfileChangeBtn">Update Your Profile</button>
                                    <span id="customerUpdateProfile" class="text-sucess"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <h3 class="title">
                        My Address
                        </h3>
                        <h6 class="subtitle text_p m2-4">Delivery information</h6>
                        <form class="mb-5" action="#">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Adress 1</label>
                                    <input class="form-control" type="text" name="address1"
                                    placeholder="Enter your main address">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Address 2</label>
                                    <input class="form-control" type="text" name="address2"
                                    placeholder="Enter your alternative address">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input class="form-control" type="text" name="city"
                                    placeholder="Enter your city">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Postal code</label>
                                    <input class="form-control" type="text" name="postcode"
                                    placeholder="City postal code">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="form-control js-country" name="country">
                                        <option value="">Choose your Country</option>
                                        <option value="Demo country">Demo country</option>
                                        <option value="Demo country">Demo country</option>
                                        <option value="Demo country">Demo country</option>
                                        <option value="Demo country">Demo country</option>
                                        <option value="Demo country">Demo country</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">State</label>
                                    <select class="form-control js-choice" name="state">
                                        <option value="">Choose your state</option>
                                        <option value="Demo state">Demo state</option>
                                        <option value="Demo state">Demo state</option>
                                        <option value="Demo state">Demo state</option>
                                        <option value="Demo state">Demo state</option>
                                        <option value="Demo state">Demo state</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <h3 class="title">
                        Change Password
                        </h3>
                        <h6 class="subtitle text_p m2-4">Change Your Password</h6>
                        <form class="mb-5" id="customerPasswordChangeForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="old">
                                    <span id="customerPasswordChangeOld" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6"></div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">New Password</label>
                                    <input class="form-control" type="password" placeholder="Confirm password" name="password">
                                     <span id="customerPasswordChangeNew" class="text-danger"></span>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation">
                                    <span id="customerPasswordChangeConf" class="text-danger"></span>
                                </div>
                                <div class="form-group col-12">
                                    <button class="btn btn-primary" type="submit" id="customerPasswordChangeBtn">Change your Password</button>
                    <span id="customerPasswordChangeSm" class="text-sucess"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection