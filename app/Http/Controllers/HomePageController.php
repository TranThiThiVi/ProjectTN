<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function viewHomePage()
    {
        // $sanPham = SanPham::where('is_open', 1)->get();
        return view('client.homepage');
    }

    public function viewRegister()
    {
        return view('client.page.register');
    }

    public function viewLogin()
    {
        return view('client.page.login');
    }

    public function tinTuc()
    {
        $tinTuc = TinTuc::get();
        return view('client.tintuc', compact('tinTuc'));
    }

    public function chiTiettinTuc($id)
    {
        $tinTuc = TinTuc::find($id);
        $tinTuc2 = TinTuc::orderBy('created_at')
                            ->get();
        return view('client.chitiettintuc', compact('tinTuc', 'tinTuc2'));
    }

    public function viewListProduct($id)
    {
        $danhMuc = DanhMuc::where('id', $id)->first();
        if($danhMuc->id_danh_muc_cha == 0) {
            $list_id_danh_muc = DanhMuc::where('id_danh_muc_cha', $id)
                                        ->select('id')
                                        ->get();
        } else {
            $list_id_danh_muc = DanhMuc::where('id', $id)
                                        ->select('id')
                                        ->get();
        }

        $data = SanPham::whereIn('id_danh_muc', $list_id_danh_muc)->get();
        return view('client.list_product', compact('data', 'danhMuc'));
    }
    // public function sanPhamDanhMuc($id)
    // {
    //     $sanPham = SanPham::where('id_danh_muc', $id)->get();

    //     return view('client.page.sanphandanhmuc', compact('sanPham'));

    // }

    // public function chitietSanPham($id)
    // {
    //     $sanPham = SanPham::find($id);
    //     return view('client.page.chitietsanpham', compact('sanPham'));
    // }

    // public function Cart()
    // {
    //     return view('client.page.cart');
    // }
}
