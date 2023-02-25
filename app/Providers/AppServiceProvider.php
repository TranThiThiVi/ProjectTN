<?php

namespace App\Providers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhMuc = DanhMuc::where('is_open',1)->get();
        $SanPham = SanPham::where('is_open',1)->take(4)->get();
        View()->share('danhMuc', $danhMuc);
        View()->share('SanPham', $SanPham);
    }
}
