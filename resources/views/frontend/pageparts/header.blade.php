<body>
<!--Start Header Top area -->
    <div class="header_area_top"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <!--Start Search area -->
            {{-- <form action="#" name="myForm">
              <div class="search_box">
                <input name="Name" id="itp" class="input_text" type="text" value="Search"/>
                <button type="submit" class="btn-search">
                  <span><i class="fa fa-search"></i></span>
                </button>
              </div>
            </form>  --}}
            <!--End Search area -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!--Start Logo area -->
            <div class="logo"> 
              <a href="{{route('index')}}">
                <img src="{{asset($sitedetail->logo)}}" width="120px"   alt="" />
              </a>
            </div> 
            <!--End Logo area -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!--Start Header Right Cart area -->
            <div class="account_card_area"> 
              <ul id="account_nav">
                {{-- <li><a href="#"><i class="fa fa-key"></i>Account</a>
                  <div class="account_menu_list">
                    <div class="account_single_item">
                      <h2>Currency</h2>
                      <ul id="account_single_nav_1">
                        <li><a href="#">Euro</a></li>
                        <li><a href="#">US Dollor</a></li>
                      </ul>
                    </div>
                    <div class="account_single_item">
                      <h2>Language</h2>
                      <ul id="account_single_nav_2">
                        <li><a href="#">English</a></li>
                        <li><a href="#">France</a></li>
                        <li><a href="#">Germany</a></li>
                      </ul>
                    </div>
                    <div class="account_single_item">
                      <h2>Setting</h2>
                      <ul id="account_single_nav_3">
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Log In</a></li>
                      </ul>
                    </div>
                  </div>
                </li> --}}
                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Cart <span class="cart_zero">2</span></a>
                  <div class="cart_down_area">
              @foreach(session('cart') as $id => $details)
                    <div class="cart_single">
                      <a href="{{ route('singleProduct',$details['slug']) }}"><img src="{{ $details['image'] }}" width="80px" /></a>
                      <h2><a href="{{ route('singleProduct',$details['slug']) }}">{{$details['title']}}</a>
                         <a data-id="{{ $id }}"><span><i class="fa fa-trash"></i></span></a></h2>
                      <p>{{$details['quantity'] }} x {{ $details['price'] }}</p>
                    </div>
            @endforeach
                    
                    <div class="cart_shoptings">
                      <a href="{{route('checkout')}}">Checkout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div> 
            <!--End Header Right Cart area -->
          </div>
        </div>
      </div>
    </div> 
    <!--End Header Top area -->
    <!--Start Main Menu area -->
    <div class="header_botttom_area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!--Start desktop menu area -->
            <div class="main_menu">
              <ul id="nav_menu" class="active_cl">
                <li><a href="{{route('index')}}"><span class="Home">Home</span></a>
                </li>
                <li><a href="{{route('about')}}"><span class="Home">About</span></a>
                </li>
                <li><a href="{{route('calli')}}"><span class="Home">UNLM X Calli</span></a>
                </li>
                <li><a href="{{route('artistCollective')}}"><span class="Home">Artist Collective</span></a>
                </li>
                <li><a href="{{route('gallery')}}"><span class="Home">Gallery</span></a>
                </li>
                <li><a href="{{route('shop')}}"><span class="Clothings">Shop</span></a>
                </li>
                <li><a href="{{route('contact')}}"><span class="Clothings">Contact</span></a>
                </li>
              </ul>
            </div>
            <!--End desktop menu area -->
          </div>
        </div>
      </div>
      <!--start Mobile Menu area -->
      <div class="mobile-menu-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mobile-menu">
                <nav id="dropdown">
                  <ul>
                    <li><a href="{{route('index')}}">Home</a>
                      <ul>
                        <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>
                      </ul>
                    </li>
                    <li><a href="shop.html">Clothings</a>
                      <ul>                    
                        <li><a href="shop.html">Learning</a>
                          <ul>                    
                            <li><a href="shop.html">Devenport</a></li>
                            <li><a href="shop.html">Door Bazar</a></li>
                            <li><a href="shop.html">Digital Software</a></li>
                            <li><a href="shop.html">Dental Care</a></li>
                          </ul>
                        </li>
                        <li><a href="shop.html">Lighting</a>
                          <ul>                    
                            <li><a href="shop.html">Devenport</a></li>
                            <li><a href="shop.html">Door Bazar</a></li>
                            <li><a href="shop.html">Digital Software</a></li>
                            <li><a href="shop.html">Dental Care</a></li>
                          </ul>
                        </li>
                        <li><a href="shop.html">Living Room</a></li>
                        <li><a href="shop.html">Lamp</a></li>
                      </ul>
                    </li>
                    <li><a href="shop.html">Lookbook</a>
                      <ul>
                        <li><a href="shop.html">Gold Ring</a></li>
                        <li><a href="shop.html">Games & Software</a></li>
                      </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                      <ul>
                        <li><a href="single-blog.html">Single Blog</a></li>
                      </ul>
                    </li>
                    <li><a href="shop.html">Shop</a>
                      <ul>                    
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                      </ul>
                    </li>
                    <li><a href="about-us.html">Pages</a>
                      <ul>                    
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>          
            </div>
          </div>
        </div>
      </div>
      <!--End Mobile Menu area -->
    </div>
    <!--End Main Menu area -->