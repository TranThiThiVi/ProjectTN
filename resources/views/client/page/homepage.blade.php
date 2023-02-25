@extends('client.share.master')
@section('content')
    @include('client.component.slide')
    <section class="shop-section pa-0">
        <div class="auto-container">
            <div class="inner-container sec-pad">
                <div class="sec-title">
                    <h2>Sản Phẩm Bán Chạy</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix" style="position: relative; height: 914px;">
                        @foreach ($sanPham as $key => $value)
                        @php
                            $hinh_anh = explode(',', $value->hinh_anh)
                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate" style="position: absolute; left: 0px; top: 0px;">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{$hinh_anh[0]}}">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Add to cart</a></li>
                                            <li><a href="/assets_client/images/resource/shop/shop-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/san-pham/chi-tiet/{{$value->id}}">{{$value->ten_san_pham}}</a>
                                        <span class="price">{{$value->gia_ban}} vnd</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
