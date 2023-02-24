<?php

use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [TestController::class, 'index']);
Route::get('/', [HomePageController::class, 'viewHomePage']);
Route::get('/register', [HomePageController::class, 'viewRegister']);
Route::get('/login', [HomePageController::class, 'viewLogin']);

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

});
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
