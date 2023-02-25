<!-- banner-section -->
<section class="banner-style-two">
    <div class="auto-container">
        <div class="banner-carousel-2 owl-carousel owl-theme owl-nav-none">
            @foreach ($SanPham as $key => $value )
                @php
                    $hinh_anh = explode(',', $value->hinh_anh)
                @endphp
                <div class="content-box" style="background-image: url({{$hinh_anh[0]}});">
                    <div class="inner-box">
                        <h3>{{ $value->ten_san_pham }}</h3>
                        <span>{{ $value->mo_ta_ngan }}</span>
                        <hr>
                        <a href="/san-pham/chi-tiet/{{ $value->id }}" class="theme-btn-two">Xem Chi Tiết<i class="flaticon-right-1"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- banner-section end -->
