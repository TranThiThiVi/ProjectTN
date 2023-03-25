<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CauHinhController;
use App\Http\Controllers\ChiTietBanHangController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TinTucController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomePageController::class, 'viewHomePage']);
Route::get('/register', [HomePageController::class, 'viewRegister']);
Route::post('/register', [ClientController::class, 'actionRegister']);
Route::get('/login', [HomePageController::class, 'viewLogin']);
Route::post('/login', [ClientController::class, 'actionLogin']);
Route::get('/active/{hash}', [ClientController::class, 'activeClient']);

Route::get('/product/{id}', [SanPhamController::class, 'chiTiet']);

Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'actionLogin']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::get('/client/logout', [ClientController::class, 'logout']);
Route::get('/client/danh-muc/{id}', [HomePageController::class, 'sanPhamDanhMuc']);
Route::get('/san-pham/chi-tiet/{id}', [HomePageController::class, 'chitietSanPham']);
Route::get('/cart', [HomePageController::class, 'Cart']);



Route::group(['middleware' => 'check'], function() {
    Route::get('/client/logout', [ClientController::class, 'logout']);

    Route::post('/add-to-cart', [ChiTietBanHangController::class, 'addToCart']);

    Route::get('/list-cart', [ChiTietBanHangController::class, 'listCart']);
    Route::get('/list-cart/data', [ChiTietBanHangController::class, 'listCartData']);

    Route::post('/update-cart', [ChiTietBanHangController::class, 'updateCart']);
    Route::post('/delete-cart', [ChiTietBanHangController::class, 'deleteCart']);

    Route::get('/checkout', [DonHangController::class, 'checkout']);
    Route::post('/process', [DonHangController::class, 'process']);


});


Route::group(['prefix' => '/admin'], function() { //, 'middleware' => 'adminmiddleware'
    Route::group(['prefix' => '/danh-muc'], function() {
        Route::get('/index', [DanhMucController::class, 'index']);
        Route::post('/create', [DanhMucController::class, 'store']);
        Route::get('/change-status/{id}', [DanhMucController::class, 'changeStatus']);
        Route::get('/data', [DanhMucController::class, 'data']);
        Route::post('/update', [DanhMucController::class, 'update']);
        Route::post('/delete', [DanhMucController::class, 'destroy']);

    });
    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [SanPhamController::class, 'index']);
        Route::post('/create', [SanPhamController::class, 'store']);
        Route::get('/data', [SanPhamController::class, 'data']);
        Route::post('/delete', [SanPhamController::class, 'destroy']);
        Route::post('/update', [SanPhamController::class, 'update']);
        Route::get('/change-status/{id}', [SanPhamController::class, 'changeStatus']);
    });
    Route::group(['prefix' => '/tai-khoan'], function() {
        Route::get('/index', [AdminController::class, 'index']);
        Route::post('/create', [AdminController::class, 'store']);
        Route::get('/data', [AdminController::class, 'data']);
        Route::post('/delete', [AdminController::class, 'destroy']);
        Route::post('/update', [AdminController::class, 'update']);
    });
    Route::group(['prefix' => '/tin-tuc'], function() {
        Route::get('/index', [TinTucController::class, 'index']);
        Route::post('/create', [TinTucController::class, 'store']);
        Route::get('/data', [TinTucController::class, 'data']);
        Route::post('/delete', [TinTucController::class, 'destroy']);
        Route::post('/update', [TinTucController::class, 'update']);
        Route::get('/change-status/{id}', [TinTucController::class, 'changeStatus']);
    });
    Route::group(['prefix' => '/nhap-kho'], function() {
        Route::get('/index', [NhapKhoController::class, 'index']);
        Route::get('/datasp', [NhapKhoController::class, 'dataSP']);
        Route::get('/data', [NhapKhoController::class, 'dataDetail']);
        Route::post('/createDetail', [NhapKhoController::class, 'createDetail']);
        Route::post('/updateDetail', [NhapKhoController::class, 'updateDetail']);
        Route::post('/deleteDetail', [NhapKhoController::class, 'deleteDetail']);
        Route::post('/acceptNhapKho', [NhapKhoController::class, 'acceptNhapKho']);
        Route::get('/view-qlhd', [NhapKhoController::class, 'viewQLHD']);
        Route::get('/data-hd', [NhapKhoController::class, 'dataHoaDon']);
        Route::get('/data-chitiet/{id}', [NhapKhoController::class, 'dataChiTiet']);
        Route::post('/delete-hd', [NhapKhoController::class, 'deleteHD']);
    });
    Route::group(['prefix' => '/client'], function() {
        Route::get('/quan-ly-khach-hang', [ClientController::class, 'ViewKH']);
        Route::get('/getData', [ClientController::class, 'getData']);
        Route::post('/delete', [ClientController::class, 'destroy']);
        Route::post('/update', [ClientController::class, 'update']);


    });
    Route::group(['prefix' => '/cau-hinh'], function() {
        Route::get('/', [CauHinhController::class, 'index']);
        Route::get('/data', [CauHinhController::class, 'getData']);
        Route::post('/create', [CauHinhController::class, 'store']);
        Route::get('/getChuyenMuc', [CauHinhController::class, 'getChuyenMuc']);
        Route::get('/getSanPham', [CauHinhController::class, 'getSanPham']);
    });

    Route::group(['prefix' => '/don-hang'], function() {
        Route::get('/', [DonHangController::class, 'viewDH']);
        Route::get('/data', [DonHangController::class, 'getDataDonHang']);
        Route::get('/chi-tiet/{id}', [DonHangController::class, 'chiTietDonHangAdmin']);
        Route::post('/giao-hang', [DonHangController::class, 'changeGiaoHang']);

    });

});
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
