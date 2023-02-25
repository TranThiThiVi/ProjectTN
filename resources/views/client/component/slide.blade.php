<!-- banner-section -->
<section class="banner-style-two">
    <div class="auto-container">
        <div class="banner-carousel-2 owl-carousel owl-theme owl-nav-none">
            @foreach ($sanPham as $key => $value )
                @php
                    $hinh_anh = explode(',', $value->hinh_anh)
                @endphp
                <div class="content-box" style="background-image: url({{$hinh_anh[0]}});">
                    <div class="inner-box">
                        <h3>{{ $value->ten_san_pham }}</h3>
                        <hr>
                        <a href="index-2.html" class="theme-btn-two">Xem Chi Tiết<i class="flaticon-right-1"></i></a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="content-box" style="background-image: url(/assets_client/images/resource/slider-bg-2.jpg);">
                <div class="inner-box">
                    <h1>Discover & <span>Shop</span> The Trend</h1>
                    <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                    <a href="index-2.html" class="theme-btn-two">Explore Now<i class="flaticon-right-1"></i></a>
                </div>
            </div>
            <div class="content-box" style="background-image: url(/assets_client/images/resource/slider-bg-3.jpg);">
                <div class="inner-box">
                    <h1>Discover & <span>Shop</span> The Trend</h1>
                    <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                    <a href="index-2.html" class="theme-btn-two">Explore Now<i class="flaticon-right-1"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- banner-section end -->
