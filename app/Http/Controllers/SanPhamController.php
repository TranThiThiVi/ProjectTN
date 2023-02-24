<?php

namespace App\Http\Controllers;

use App\Http\Requests\SanPham\CreateSanPhamRequest;
use App\Http\Requests\SanPham\DeleteSanPhamRequest;
use App\Http\Requests\SanPham\UpdateSanPhamRequest;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{

    public function index()
    {
        return view('admin.page.san_pham.index');
    }
    public function store(CreateSanPhamRequest $request)
    {
        $data = $request->all();

        SanPham::create($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã thêm mới sản phẩm thành công!',
        ]);
    }
    public function data()
    {
        $data = SanPham::join('danh_mucs', 'san_phams.id_danh_muc', 'danh_mucs.id')
                       ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
                       ->get();

        return response()->json([
            'data'  => $data,
        ]);
    }
    public function update(UpdateSanPhamRequest $request)
    {
        $data    = $request->all();
        $sanPham = SanPham::find($request->id);
        $sanPham->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật phẩm thành công!',
        ]);
    }
    public function destroy(DeleteSanPhamRequest $request)
    {
        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Đã xóa sản phẩm thành công!',
        ]);

    }
    public function changeStatus($id)
    {
        $sanPham = SanPham::where('id', $id)->first();
        if($sanPham){
            $sanPham->is_open = !$sanPham->is_open;
            $sanPham->save();
            return response()->json([
                'status'    => true,
                'message'   => 'Đã đổi trạng thái thành công'
            ]);
        }else{
            return response()->json([
                'status'     => false,
                'message'    => 'Đã có lỗi hệ thống!'
            ]);
        }
    }
}
