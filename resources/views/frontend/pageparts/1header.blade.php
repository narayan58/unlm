<body>
  <section class="catmenu">
    <nav class="navbar main_header navbar-expand-lg navbar-light  bg-white shadow-sm ">
      <div class="container">
        <!-- Navbar toggler-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryMenu"
        aria-controls="categoryMenu" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
        <!-- Navbar collapse-->
        <div class="collapse navbar-collapse d-lg-flex align-items-lg-center justify-content-lg-between"
          id="categoryMenu">
          <!-- Navbar menu right-->
          <ul class="navbar-nav mb-lg-0">
            <li class="nav-item">
              <a href="" class="nav-link">
                Offers
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                Promo Codes
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('singlePage','why-us') }}" class="nav-link">
                Why Us
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item text_w d-flex f14 align-items-center">
              Follow us:
            </li>
            <li class="nav-item">
              <a href="{{ $sitedetail->facebook }}" target="_blank" class="nav-link">
                <i class="lab la-facebook"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ $sitedetail->twitter }}" target="_blank" class="nav-link">
                <i class="lab la-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ $sitedetail->instagram }}" target="_blank" class="nav-link">
                <i class="lab la-instagram"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ $sitedetail->youtube }}" target="_blank" class="nav-link">
                <i class="lab la-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>
<!-- NAVBAR-->
<header class="mainHeader">
  <nav class="navbar main_header navbar-expand-lg navbar-light  bg-white shadow-sm ">
    <div class="container orderManage">
      <!-- Navbar brand--><a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset($sitedetail->logo) }}"
    alt="{{ $sitedetail->title }}" title="{{ $sitedetail->title }}" width="100"></a>
    <!-- Navbar toggler-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="las la-bars"></i>
    </button>
    <div class="searchForm">
      <form action="{{ route('product.search') }}" class="formwrapper d-flex align-items-stretch">
        <input type="text" autofocus="true" name="product" class="form-control" id="" placeholder="Search Products">
        <button type="submit" class="btn btn_trigger">
        <i class="las la-search"></i>
        </button>
      </form>
    </div>
    <!-- Navbar collapse-->
    <div class="collapse navbar-collapse d-lg-flex align-items-lg-center justify-content-lg-between"
      id="navbarSupportedContent">
      <!-- Navbar menu right-->
      @foreach($allProductCategory as $category)
      <?php $subCategory = \App\Model\admin\ProductSubCategory::where('product_category_id',$category->id)->get(); ?>
      <ul class="navbar-nav mb-2 ml-3 mb-lg-0 categiriesatMenu">
        <li class="nav-item dropdown me-lg-3"><a class="nav-link text-uppercase dropdown-toggle" id="navbarDropdown"
        href="{{ route('productCategory',$category->slug) }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $category->title }}</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($subCategory as $key=>$sub)
          <li>
            <div class="labelarea d-flex justify-content-between align-items-center">
              <div class="categotry-label"><a href="{{ route('productSubCategory',[$category->slug,$sub->slug]) }}">{{ $sub->title }}</a></div> <i class="las la-angle-right"></i>
            </div>
          </li>
          @endforeach
        </ul>
      </li>
    </ul>
    @endforeach
    <!-- Navbar menu left-->
    <ul class="navbar-nav ms-auto nav_user mb-2 mb-lg-0 flex-row">
      <li class="nav-item me-3"><a class="nav-link text-uppercase position-relative" href="{{ route('cartList') }}">
        <i class="las la-shopping-cart"></i><span class="badge rounded-pill">{{ count((array) session('cart')) }}</span></a></li>
        {{-- <li class="nav-item me-3"><a class="nav-link text-uppercase position-relative" href="#"><i
          class="lar la-heart"></i><span class="badge rounded-pill">0</span></a></li> --}}
          @if($customer)
          <li class="nav-item dropdown d-flex align-items-center">
            <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ $customer->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('customer.dashboard') }}"> <i class="las la-tachometer-alt me-2"></i> Dashboard</a>
              <div class="dropdown-divider bg_p_dim"></div>
              <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
              <a class="dropdown-item" href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="las la-sign-in-alt me-2"></i> Logout</a>
            </div>
          </li>
          @else
            <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('customer.login') }}">
            <i class="las la-user"></i> </a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>