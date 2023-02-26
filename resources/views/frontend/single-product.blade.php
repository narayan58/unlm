@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $product->title)
@section('meta_keywords', $product->title)
@section('ogtitle', $product->title)
@section('ogdescription', $product->title)
@section('ogimage', asset($product->image))
@section('ogurl', route('singleProduct',$product->slug))
@section('title', $product->title .' || '.$sitedetail->title)
<!-- breadcrumbs area -->
{{-- <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single breadcrumb_top">
                    <ul id="breadcrumbs">
                        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li><span>I</span></li>
                        <li>LOREM IPSUM DOLOR</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End breadcrumbs area -->
<!-- Start preview Product details area -->
<div class="blog_single_view_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="my_tabs">
                    <div class="tab-content tab_content_style">
                        <div id="tab1" class="tab-pane fade show active">
                            <div class="blog_tabs">
                               <img src="{{ asset($product->image) }}"
                                        alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_product_details">
                    <h2 class="blog_heading">{{$product->title}}</h2>
                    <div class="product_rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product_rating">
                        <a href="#">1 Review(s) <span>I</span></a>
                        <a href="#"> Add Your Review</a>
                    </div>
                    <div class="pricing_rate">
                        <p class="stack">Availability:<span class="in-stock"> In stock</span></p>
                        <p class="rating_dollor rating_margin"><span
                                class="rating_value_one dollor_size">{{ $currency_code }} {{ $product->new_price }}</span> <span
                                class="rating_value_two">{{ $currency_code }} {{ $product->old_price }}</span></p>
                        <p class="blog_texts">{!! $product->short_info !!}</p>
                    </div>
                    {{-- <div class="product_blog_button ">
                        <div class="cart_blog_details blog_icon_border">
                            <a href="#" target="blank"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="cart_blog_details blog_icon_border">
                            <a href="#" target="expand"><i class="fa fa-retweet"></i></a>
                        </div>
                        <div class="cart_blog_details blog_icon_border">
                            <a href="#" target="heart"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div> --}}
                </div>
                <div class="product_options_area">
                    {{-- <div class="product_options_selection">
                        <ul id="options_selection">
                            <li><span class="star_color">*</span><span class="Product_color">color</span> <span
                                    class="required">*Required Fields</span></li>
                            <li>
                                <select>
                                    <option value="" selected="selected">-- Please Select --</option>
                                    <option value="">black +$2.00</option>
                                    <option value="">blue +$1.00</option>
                                    <option value="">yellow +$1.00</option>
                                </select>
                            </li>
                            <li><span class="star_color">*</span><span class="Product_color">size</span></li>
                            <li>
                                <select>
                                    <option value="" selected="selected">-- Please Select --</option>
                                    <option value="">L +$2.00</option>
                                    <option value="">M +$1.00</option>
                                </select>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="cart_blog_item">
                        <div class="add-to-cart">
                            <input type="text" title="Qty" value="1" class="qty" />
                            <div class="slider2-shop">
                                <a href="{{ route('addToCart',$product->id) }}"  class="continue_shopping">Add to cart</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End preview Product details area -->
<!-- Start Product details tabs area -->
<div class="product_collateral_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="my_tabs_description">
                    <div class="tab-content tab_content_style">
                            <div class="product_description">
                                <p>{!!$product->description!!}</p>
                            </div>
                        <div id="tab-6" class="tab-pane fade">
                            <div class="product_description">
                                <ul id="Motorola">
                                    <li><a href="#">Motorola</a> Review by <span class="Motorola_cl">Motorola</span>
                                    </li>
                                    <li><span>Quality</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li><span>Price</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li><span>Value</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>Motorola (Posted on 11/2/2015)</li>
                                </ul>
                                <div class="fieldsets">
                                    <h3>You're reviewing: <span>Lorem ipsum dolor</span></h3>
                                    <h4>How do you rate this product?*</h4>
                                    <div class="start_tab_pricing_area">
                                        <fieldset>
                                            <table class="star_pricing_tb">
                                                <tr>
                                                    <th></th>
                                                    <th>1 Star</th>
                                                    <th>2 Stars</th>
                                                    <th>3 Stars</th>
                                                    <th>4 Stars</th>
                                                    <th>5 Stars</th>
                                                </tr>
                                                <tr>
                                                    <td>Quality</td>
                                                    <td><input type="radio" name="ratings[1]" value="1"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[1]" value="2"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[1]" value="3"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[1]" value="4"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[1]" value="5"
                                                            class="radio"></td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td><input type="radio" name="ratings[2]" value="6"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[2]" value="7"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[2]" value="8"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[2]" value="9"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[2]" value="10"
                                                            class="radio"></td>
                                                </tr>
                                                <tr>
                                                    <td>Value</td>
                                                    <td><input type="radio" name="ratings[3]" value="11"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[3]" value="12"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[3]" value="13"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[3]" value="14"
                                                            class="radio"></td>
                                                    <td><input type="radio" name="ratings[3]" value="15"
                                                            class="radio"></td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </div>

                                    <div class="rating_contact">
                                        <ul id="review_contact">
                                            <li>Nickname<span>*</span></li>
                                            <li><input type="text" name="nickname" class="input-text required-entry"
                                                    value=""></li>
                                            <li>Summary of Your Review<span>*</span></li>
                                            <li><input type="text" name="nickname" class="input-text required-entry"
                                                    value=""></li>
                                            <li>Review<span>*</span></li>
                                            <li><textarea name="detail" cols="5" rows="3"
                                                    class="required-entry"></textarea></li>
                                        </ul>
                                    </div>
                                    <div class="review_button">
                                        <button type="submit" title="Submit Review" class="button">Submit
                                            Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade">
                            <div class="product_description">
                                <div class="product_tag_area">
                                    <h2>Other people marked this product with these tags:</h2>
                                    <ul id="product_tags">
                                        <li><a href="#">fashion</a> <span>(1)</span></li>
                                        <li><a href="#">Nunc</a> <span>(1)</span></li>
                                        <li><a href="#">facilisis</a> <span>(1)</span></li>
                                    </ul>
                                    <div class="add_tags">
                                        <h2>Add Your Tags:</h2>
                                        <input type="text" name="nickname" class="input-text required-entry"
                                            value="">
                                    </div>
                                    <div class="review_button product_tag_add">
                                        <button type="submit" title="Submit Review" class="button">Add Tags</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product details tabs area -->
<!-- Start Related products area -->
<div class="related_products_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature_text feature_upsell">
                    <h4>Related Products</h4>
                </div>
                <div class="m-lr-n-15px">
                    <div class="upsell_product_list">
                        <?php
              $CategoryWishproducts=\App\Model\admin\Product::where('product_category_id',$product->productCategory->id)->get();
              ?>
              @foreach($CategoryWishproducts as $item)
                        <div class="p-lr-15px">
                            <div class="single_upsell">
                                <a href="{{ route('singleProduct',$item->slug) }}"><img src="{{asset($item->image)}}" alt="" /></a>
                                <div class="upsell_details">
                                    <h2><a href="{{ route('singleProduct',$item->slug) }}">{{$item->title}}</a></h2>
                                    <div class="product_rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>{{ $currency_code }} {{ $product->new_price }}</p>
                                </div>
                            </div>
                        </div>
              @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Related products area -->
<!-- Start Branding area -->
<div class="branding_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="carousel_branding">
                    <div class="single_branding">
                        <img src="img/branding-image/brand1.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand3.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand4.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand1.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand3.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection