@extends('client.share.master')
@section('content')
@include('client.component.slide')
    {{-- <section class="shop-section pa-0">
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
                                        <img src="{{$hinh_anh[0]}}" style="max-width: 300px; max-height: 300px">
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="#">Add to cart</a></li>
                                            <li><a href="#" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
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
    </section> --}}
    <section class="sidebar-page-container home-4">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar shop-sidebar">
                        <div class="post-widget sidebar-widget">
                            <div class="widget-title">
                                <h2>Sản Phẩm Bán Chạy</h2>
                            </div>
                            <div class="post-inner">
                                @foreach ($sanPham as $key => $value)
                                @php
                                    $hinh_anh = explode(',', $value->hinh_anh)
                                @endphp
                                    <div class="post">
                                        <figure class="image-box"><a href="product-details.html"><img src="{{$hinh_anh[0]}}"></a></figure>
                                        <div class="inner">
                                            <a href="/san-pham/chi-tiet/{{$value->id}}">{{$value->ten_san_pham}}</a>
                                            <p>{{number_format($value->gia_ban, 0)}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="advice-box sideber-widget">
                            <figure class="image"><img src="/assets_client/images/resource/men-1.png" alt=""></figure>
                            <div class="pattern" style="background-image: url(/assets_client/images/shape/shape-7.png);"></div>
                            <div class="text">
                                <h2>Upto 70% Sale Off</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="sidebar-content">
                        <div class="sortable-masonry">
                            <div class="filters">
                                <ul class="filter-tabs filter-btns clearfix">
                                    <li class="active filter" data-role="button" data-filter=".best_seller">Best Seller</li>
                                    <li class="filter" data-role="button" data-filter=".new_arraivals">New Arraivals</li>
                                    <li class="filter" data-role="button" data-filter=".top_rate">Top Rate</li>
                                </ul>
                            </div>
                            <div class="items-container row clearfix" style="position: relative; height: 1371px;">
                            @foreach ($sanPham as $key => $value)
                            @php
                                $hinh_anh = explode(',', $value->hinh_anh)
                            @endphp
                                @if ($key < 6)
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{$hinh_anh[0]}}" alt="">
                                                <ul class="info-list clearfix">
                                                    <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                                    <li><a href="product-details.html">Add to cart</a></li>
                                                    <li><a href="/assets_client/images/resource/shop/shop-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                                </ul>
                                            </figure>
                                            <div class="lower-content">
                                                <a href="/san-pham/chi-tiet/{{$value->id}}">{{$value->ten_san_pham}}</a>
                                                <span class="price">{{number_format($value->gia_ban, 0)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @elseif($key < 11)
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block masonry-item small-column new_arraivals" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{$hinh_anh[0]}}" alt="">
                                                <ul class="info-list clearfix">
                                                    <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                                    <li><a href="product-details.html">Add to cart</a></li>
                                                    <li><a href="/assets_client/images/resource/shop/shop-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                                </ul>
                                            </figure>
                                            <div class="lower-content">
                                                <a href="/san-pham/chi-tiet/{{$value->id}}">{{$value->ten_san_pham}}</a>
                                                <span class="price">{{number_format($value->gia_ban, 0)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block masonry-item small-column top_rate" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{$hinh_anh[0]}}" alt="">
                                                <ul class="info-list clearfix">
                                                    <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                                    <li><a href="product-details.html">Add to cart</a></li>
                                                    <li><a href="/assets_client/images/resource/shop/shop-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                                </ul>
                                            </figure>
                                            <div class="lower-content">
                                                <a href="/san-pham/chi-tiet/{{$value->id}}">{{$value->ten_san_pham}}</a>
                                                <span class="price">{{number_format($value->gia_ban, 0)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
