<!-- main header -->
<header class="main-header style-two">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="top-left pull-left">
                    <ul class="info clearfix">
                        <li><i class="flaticon-email"></i><a href="mailto:support@example.com">support@example.com</a></li>
                        <li><i class="flaticon-global"></i> Kleine Pierbard 8-6 2249 KV Vries</li>
                    </ul>
                    <ul class="social-links clearfix">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    @if (Auth::guard('client')->check())
                    <div class="price-box">
                        <span>Chào bạn, {{Auth::guard('client')->user()->ho_va_ten}}</span>
                        <ul class="price-list clearfix">
                            <li><a href="/client/logout">Đăng Xuất</a></li>
                        </ul>
                    </div>
                    @else
                    <a href="/login"><span class="text-dark">Đăng Nhập</span></a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="auto-container">
            <div class="upper-inner">
                <figure class="logo-box"><a href="/"><img src="/assets_client/images/logo.png" alt=""></a></figure>
                <div class="search-info">
                    <div class="select-box">
                        <select class="wide">
                           <option data-display="All Categories">All Categories</option>
                           <option value="1">Bags & Shoes</option>
                           <option value="2">Man Fashion</option>
                           <option value="4">Kid’s Clothing</option>
                           <option value="5">Toys & Kids</option>
                        </select>
                    </div>
                    <form action="index-2.html" method="post" class="search-form">
                        <div class="form-group">
                            <input type="search" name="search-field" placeholder="Search Product..." required="">
                            <button type="submit"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="menu-right-content clearfix">
                    <li><a href="index.html"><i class="flaticon-like"></i></a></li>
                    <li><a href="index.html"><i class="flaticon-user"></i></a></li>
                    @if (Auth::guard('client')->check())
                    <li class="shop-cart">
                        <a href="/cart"><i class="flaticon-shopping-cart-1"></i><span>3</span></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="category-box pull-left">
                    <p>All Categories</p>
                    <ul class="category-content">
                        <li class="dropdown-option"><i class="flaticon-dress"></i>
                            <a href="index-2.html">Women’s Clothing</a>
                            <ul>
                               <li><a href="index-2.html">Categories 01</a></li>
                               <li><a href="index-2.html">Categories 02</a></li>
                               <li><a href="index-2.html">Categories 03</a></li>
                               <li><a href="index-2.html">Categories 04</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-option"><i class="flaticon-t-shirt"></i>
                            <a href="index-2.html">Man Fashion</a>
                            <ul>
                               <li><a href="index-2.html">Categories 01</a></li>
                               <li><a href="index-2.html">Categories 02</a></li>
                               <li><a href="index-2.html">Categories 03</a></li>
                               <li><a href="index-2.html">Categories 04</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-option"><i class="flaticon-woman"></i>
                            <a href="index-2.html">Kid’s Clothing</a>
                            <ul>
                               <li><a href="index-2.html">Categories 01</a></li>
                               <li><a href="index-2.html">Categories 02</a></li>
                               <li><a href="index-2.html">Categories 03</a></li>
                               <li><a href="index-2.html">Categories 04</a></li>
                            </ul>
                        </li>
                        <li><i class="flaticon-necklace-1"></i><a href="index-2.html">Jewelry & Watches</a></li>
                        <li><i class="flaticon-backpack"></i><a href="index-2.html">Bags & Shoes</a></li>
                        <li><i class="flaticon-rocking-horse"></i><a href="index-2.html">Toys & Kids</a></li>
                        <li class="dropdown-option"><i class="flaticon-lightbulb-1"></i>
                            <a href="index-2.html">Electronics</a>
                            <ul>
                               <li><a href="index-2.html">Categories 01</a></li>
                               <li><a href="index-2.html">Categories 02</a></li>
                               <li><a href="index-2.html">Categories 03</a></li>
                               <li><a href="index-2.html">Categories 04</a></li>
                            </ul>
                        </li>
                        <li><i class="flaticon-laptop"></i><a href="index-2.html">Computers</a></li>
                        <li><i class="flaticon-plus-1"></i><a href="index-2.html">Others</a></li>
                    </ul>
                </div>
                <div class="menu-area pull-left">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                @if (isset($danhMucCha))
                                @foreach ($danhMucCha as $key => $value )
                                <li class="current dropdown"><a href="/client/danh-muc/{{$value->id}}">{{$value->ten_danh_muc}}</a>
                                    @foreach ($danhMucCon as $k => $v )
                                        @if ($v->id_danh_muc_cha == $value->id)
                                        <ul>
                                            <li><a href="/client/danh-muc/{{$v->id}}">{{$v->ten_danh_muc}}</a></li>
                                        </ul>
                                        @endif
                                    @endforeach
                                </li>
                                @endforeach
                                @endif

                                {{-- @if (isset($danhMucCha))
                                @foreach ($danhMucCha as $key => $value )
                                <li><a href="/client/danh-muc/{{$value->id}}">{{$value->ten_danh_muc}}</a></li>
                                @endforeach
                                @endif
                                <li><a href="contact.html">Liên Lạc</a></li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="/assets_client/images/small-logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="/assets_client/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
