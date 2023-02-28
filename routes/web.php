<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TinTucController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomePageController::class, 'viewHomePage']);
Route::get('/register', [HomePageController::class, 'viewRegister']);
Route::post('/register', [ClientController::class, 'actionRegister']);
Route::get('/login', [HomePageController::class, 'viewLogin']);
Route::post('/login', [ClientController::class, 'actionLogin']);
Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'actionLogin']);
Route::get('/client/logout', [ClientController::class, 'logout']);
Route::get('/client/danh-muc/{id}', [HomePageController::class, 'sanPhamDanhMuc']);
Route::get('/san-pham/chi-tiet/{id}', [HomePageController::class, 'chitietSanPham']);

Route::group(['prefix' => '/admin'], function() {
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
    });
    Route::group(['prefix' => '/tin-tuc'], function() {
        Route::get('/index', [TinTucController::class, 'index']);
        Route::post('/create', [TinTucController::class, 'store']);
        Route::get('/data', [TinTucController::class, 'data']);
        Route::post('/delete', [TinTucController::class, 'destroy']);
        Route::post('/update', [TinTucController::class, 'update']);
        Route::get('/change-status/{id}', [TinTucController::class, 'changeStatus']);
    });

});
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
