@extends('frontend.pageparts.app')
@section('content')
@section('meta_descriptions', $sitedetail->meta_descriptions)
@section('meta_keywords', $sitedetail->meta_keywords)
@section('ogtitle', $sitedetail->title)
@section('ogdescription', $sitedetail->meta_descriptions)
@section('ogimage', $sitedetail->logo)
@section('ogurl', route('shop'))
@section('title', 'Shop  || ' . $sitedetail->title)
<!--Start breadcrumbs area -->
{{-- <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul id="breadcrumbs">
                        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li><span>Ι</span></li>
                        <li>Clothings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End breadcrumbs area -->
<!--Start clothing product area -->
<div class="clothing_product_area">
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 position-relative">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="catagory_banner">
                            <img src="{{asset('frontend/img/banner/category.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="my_tabs">
                    <div class="tab-content tab_content_style">
                        <div id="tab1" class="tab-pane fade show active">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product_list">
                                        <div class="single_product repomsive_768">
                                            <a href="{{ route('singleProduct',$product->slug) }}"><img src="{{ asset($product->image) }}" alt="" /></a>
                                            <div class="product_details">
                                                <h2>{{$product->title}}</h2>
                                                <p><span class="regular_price">{{ $currency_code }} {{ $product->old_price }}</span> <span class="popular_price">{{ $currency_code }} {{ $product->new_price }}</span></p>
                                            </div>
                                            <div class="product_detail">
                                                <div class="star_icon">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="product_button">
                                                    <div class="cart_details">
                                                        <a href="{{ route('singleProduct',$product->slug) }}" >Add to cart</a>
                                                    </div>
                                                    {{-- <div class="cart_details">
                                                        <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                    </div>
                                                    <div class="cart_details">
                                                        <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="row mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/1.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/4.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/6_1.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/12_1.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/18_1.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/13_4.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/14_3.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-50px">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/16.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/17_2_1_1.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="#">Lorem ipsum dolor</a></h2>
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
                                            <p class="rating_dollor"><span class="rating_value_one">$170.00</span> <span class="rating_value_two">$150.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more" href="#">Learn More</a></p>
                                        </div>
                                        <div class="product_blog_button">
                                            <div class="cart_blog_details">
                                                <a href="#" target="blank">Add to cart</a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_blog_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog_pagination">
                                        <h2>Page:</h2>
                                        <ul class="pagination_list">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="catagory_price_color">
                    <div class="catagory_area">
                        <h2>CATEGORY</h2>
                        <ul class="catagory">
                            <li><a href="#"><i class="fa fa-angle-right"></i>LEARNING</a> <span>(4)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>LIGHTING</a><span>(6)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>LIVING ROOMS</a><span>(8)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>LAMP</a><span>(10)</span></li>
                        </ul>
                    </div>
                    <div class="priceing_area">
                        <h2>Price</h2>
                        <div class="info_widget">
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    <input type="submit"  value="Search"/>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catagory_area">
                        <h2>COLOR</h2>
                        <ul class="catagory">
                            <li><a href="#"><i class="fa fa-angle-right"></i>BLACK</a> <span>(1)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>BLUE</a><span>(2)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>GREEN</a><span>(8)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>GREY</a><span>(4)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>RED</a><span>(8)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>WHITE</a><span>(6)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End clothing product area -->
<!--Start Branding area -->
@include('frontend.pageparts.brand')
<!--End Branding area -->
@endsection