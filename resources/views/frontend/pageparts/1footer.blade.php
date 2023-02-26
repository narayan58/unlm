<section class="features">
      <div class="container">
            <div class="row">
                  <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center feature p-4 w-100">
                              <i class="las la-shipping-fast"></i>
                              <div class="ms-3">
                                    <h6 class="mb-1 text-uppercase">Free shipping </h6>
                                    <p class="small text-muted mb-0">For all orders over {{ $currency_code }} {{ $freeOrderCharge }}</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center feature p-4 w-100">
                              <i class="las la-undo-alt"></i>
                              <div class="ms-3">
                                    <h6 class="mb-1 text-uppercase">7 days return </h6>
                                    <p class="small text-muted mb-0">If goods have problems</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center feature p-4 w-100">
                              <i class="las la-money-bill-wave-alt"></i>
                              <div class="ms-3">
                                    <h6 class="mb-1 text-uppercase">Secure payment </h6>
                                    <p class="small text-muted mb-0">100% secure payment</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center feature p-4 w-100">
                              <i class="las la-headset"></i>
                              <div class="ms-3">
                                    <h6 class="mb-1 text-uppercase">24/7 support </h6>
                                    <p class="small text-muted mb-0">Dedicated support</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>
<footer class="bg-dark mainFooter" id="footer">
      <!-- Newsletter section-->
      <section class="">
            <div class="container discount">
                  <div class="row align-items-center">
                        <div class="col-lg-6  mb-lg-0">
                              <h3>Get up to <span class="text_w">50% </span>off discount</h3>
                              {{-- <p class="text-small mb-sm-3 mb-md-0 text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                              elit.</p> --}}
                        </div>
                        <div class="col-lg-6">
                              Here you shop more <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                        </div>
                  </div>
            </div>
      </section>
      <!-- Features-->
      <div class="container pb-3">
            <div class="row">
                  <div class="col-md-4 col-sm-12 mb-3 mb-md-0"><img class="img-fluid mb-3" src="{{ asset($sitedetail->logo) }}"
                        alt="{{ $sitedetail->title }}" title="{{ $sitedetail->title }}" width="120">
                        <p class="text-muted">We are Hario.</p>
                        <ul class="list-inline">
                              <li class="list-inline-item"><i class="las la-money-bill text-gray"></i></li>
                              <li class="list-inline-item"><i class="lab la-cc-mastercard text-gray"></i></li>
                              <li class="list-inline-item"><i class="las la-truck text-gray"></i></li>
                        </ul>
                  </div>
                  <div class="col-md-2 col-sm-12 mb-3 mb-md-0">
                        <h6 class="text-white">Menus</h6>
                        <ul class="list-unstyled text-muted mb-0">
                              <li class="mb-2"> <a class="reset-anchor" href="{{ route('singlePage','about-us') }}">About</a></li>
                              <li class="mb-2"><a class="reset-anchor" href="{{ route('blog') }}">Blog</a></li>
                              <li class="mb-2"><a class="reset-anchor" href="{{ route('contact') }}">Contact</a></li>
                              <li class="mb-2"><a class="reset-anchor" href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                  </div>
                  <div class="col-md-2 col-sm-12 mb-3 mb-md-0">
                        <h6 class="text-white">Menus</h6>
                        <ul class="list-unstyled text-muted mb-0">
                              <li class="mb-2"> <a class="reset-anchor" href="{{ route('singlePage','privacy-policy') }}">Privancy Policy</a></li>
                              <li class="mb-2"> <a class="reset-anchor" href="{{ route('singlePage','terms-and-conditions') }}">Terms and Conditions</a></li>
                              {{--                               <li class="mb-2"> <a class="reset-anchor" href="{{ route('cartList') }}">Cart</a></li>
                              --}}                              <li class="mb-2"> <a class="reset-anchor" href="">Cart</a></li>
                        </ul>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                        <p class="lead mb-1 text-white"><a class="reset-anchor" href="tel:+1 123 456 789">{{ $sitedetail->mobile_no }}</a></p>
                        <p class="text-muted">{{ $sitedetail->address }}</p>
                        <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="social-icon" href="{{ $sitedetail->facebook }}" target="_blank"><i class="lab la-facebook"></i></a></li>
                              <li class="list-inline-item"><a class="social-icon" href="{{ $sitedetail->twitter }}" target="_blank"><i class="lab la-twitter"></i></a></li>
                              <li class="list-inline-item"><a class="social-icon" href="{{ $sitedetail->youtube }}" target="_blank"><i class="lab la-youtube"></i></a></li>
                              <li class="list-inline-item"><a class="social-icon" href="{{ $sitedetail->instagram }}" target="_blank"><i class="lab la-instagram"></i></a></li>
                        </ul>
                  </div>
            </div>
      </div>
      <div class="container">
            <div class="border-top py-4" style="border-color: rgba(255,255,255,0.1) !important">
                  <div class="row">
                        <div class="col-lg-6">
                              <p class="small text-muted mb-0">© <?php echo date("Y");?> All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                              <p class="small text-muted mb-0">Designed by<a target="_blank" class="text-white reset-anchor"
                              href="">Your Name</a></p>
                        </div>
                  </div>
            </div>
      </div>
</footer>
<!-- //footer -->
<input type="hidden" value="{{ url('/') }}" id="baseurl" name="">