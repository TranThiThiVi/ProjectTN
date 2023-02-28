<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function viewHomePage()
    {
        $sanPham = SanPham::where('is_open', 1)->get();
        return view('client.page.homepage', compact('sanPham'));
    }

    public function viewRegister()
    {
        return view('client.page.auth.register');
    }

    public function viewLogin()
    {
        return view('client.page.auth.login');
    }

    public function sanPhamDanhMuc($id)
    {
        $sanPham = SanPham::where('id_danh_muc', $id)->get();

        return view('client.page.sanphandanhmuc', compact('sanPham'));

    }

    public function chitietSanPham($id)
    {
        $sanPham = SanPham::find($id);
        return view('client.page.chitietsanpham', compact('sanPham'));
    }

    public function Cart()
    {
        return view('client.page.cart');
    }
}
