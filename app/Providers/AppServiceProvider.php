<?php

namespace App\Providers;

use App\Models\DanhMuc;
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
        View()->share('danhMuc', $danhMuc);
    }
}
