@extends('client.share.master')
@section('content')
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(/assets_client/images/background/page-title.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Chi Tiết </h1>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="/">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->
<!-- product-details -->
<section class="product-details product-details-4">
    <div class="auto-container">
        <div class="product-details-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="bxslider">
                        @php
                            $hinh_anh = explode(',', $sanPham->hinh_anh)
                        @endphp
                            <div class="slider-content">
                                <div class="product-image">
                                    <figure class="image">
                                        <img src="{{$hinh_anh[0]}}" alt="">
                                        <a href="#" class="lightbox-image"><i class="flaticon-search-2"></i></a>
                                    </figure>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="product-info">
                        <h3>{{$sanPham->ten_san_pham}}</h3>
                        <div class="customer-review clearfix">
                            <ul class="rating-box clearfix">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                        <span class="item-price">{{ number_format($sanPham->gia_ban, 0) }} VNĐ</span>
                        <div class="text">
                            <p>{!!$sanPham->mo_ta_ngan!!}</p>
                        </div>
                        <div class="othre-options clearfix">
                            @if (Auth::guard('client')->check())
                            <div class="btn-box"><a href="/customer/cart/{{$sanPham->id}}"><button type="button" class="theme-btn-two thuetro">Thuê Ngay</button></a></div>
                            @else
                            <div class="btn-box"><button type="button" class="theme-btn-two thuetro"  data-toggle="modal" data-target="#dangnhap">Thuê Ngay</button></div>
                            @endif
                            <ul class="info clearfix">
                                @if (Auth::guard('client')->check())
                                    <li><a href="#"><i class="flaticon-heart yeuThich" data-id="{{$sanPham->id}}"></i></a></li>
                                @else
                                    <li><a href="#"><i class="flaticon-heart" data-toggle="modal" data-target="#dangnhap"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="other-links">
                            <ul class="clearfix">
                                <li>SKU: 05</li>
                                <li>Category: <a href="product-details.html">Accessories</a></li>
                                <li>Tags: <a href="product-details.html">glasses</a>,<a href="product-details.html">t-shirts</a>,<a href="product-details.html">watches</a></li>
                            </ul>
                        </div>
                        <ul class="share-option clearfix">
                            <li><h5>Follow Us:</h5></li>
                            <li><a href="shop-details.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="shop-details.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="shop-details.html"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="shop-details.html"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-discription">
            <div class="tabs-box">
                <div class="tab-btn-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn" data-tab="#tab-1">Mô Tả Chi Tiết</li>
                        <li class="tab-btn active-btn" data-tab="#tab-2">Nhận Xét</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab" id="tab-1">
                        <div class="text">
                            <p>{!!$sanPham->mo_ta!!}</p>
                        </div>
                    </div>
                    <div class="tab active-tab" id="tab-2">
                        <div class="review-box">
                            <h5>1 Review for Multi-Way Ultra Crop Top</h5>
                            <div class="review-inner">
                                <figure class="image-box"><img src="/assets_client/images/resource/review-1.png" ></figure>
                                <div class="inner">
                                    <ul class="rating clearfix">
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                    </ul>
                                    <h6>Eileen Alene <span>- May 1, 2020</span></h6>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus error sit voluptatem accusa dolore mque laudant totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi arch tecto beatae vitae dicta.</p>
                                </div>
                            </div>
                            <div class="replay-inner">
                                <h5>Be First to Review For “Multi-Way Ultra Crop Top”</h5>
                                <div class="rating-box clearfix">
                                    <h6>Your Rating</h6>
                                    <ul class="rating clearfix">
                                        <li><i class="flaticon-star-1"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <form action="contact.html" method="post" class="review-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Your Review</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Your Emai</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">Save my name, email, and website in this browser for the next time I comment</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn-two">Submit Your Review<i class="flaticon-right-1"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="related-product">
            <div class="sec-title style-two">
                <h2>Những Phòng Trọ Liên Quan</h2>
                <span class="separator" style="background-image: url(/assets_client/images/icons/separator-2.png);"></span>
            </div>
            <div class="row clearfix">
                @if (isset($phongTroMoi))
                    @foreach ($phongTroMoi as $value )
                        @php
                            $hinh_anhs = explode(',', $value->hinh_anh)
                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="/customer/product/{{$value->id}}"><img src="{{$hinh_anhs[0]}}" style="height: 100%"></a>
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart yeuThich" data-id="{{$value->id}}"></i></a></li>
                                                <li><a href="product-details.html">Add to cart</a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/customer/product/{{$value->id}}"><b>{{$value->tieu_de}}</b></a>
                                        <span class="price">{{ number_format($value->gia_thang, 0) }} VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div> --}}
    </div>
</section>
@endsection
@section('js')

@endsection
