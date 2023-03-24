<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function actionRegister(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Client::create($data);

        return response()->json([
            'status'    => true,
            Toastr()->success('Đã tạo tài khoản thành công!'),
            // 'message'   => 'Đã tạo tài khoản thành công',
        ]);
    }

    public function actionLogin(Request $request)
    {
        // dd($request->all());
        $data['email']      = $request->email;
        $data['password']   = $request->password;

        $check = Auth::guard('client')->attempt($data);
        if($check) {

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đăng nhập thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Tài khoản hoặc mật khẩu không đúng!',
            ]);
        }
    }

    public function logout()
    {
        Auth::guard('client')->logout();

        toastr()->success('Bạn đã đăng xuất tài khoản !');
        return redirect('/');

    }

    public function getData()
    {
        $data = Client::get();

        return response()->json([
            'data'  => $data,
        ]);
    }
    public function ViewKH()
    {
        return view('admin.page.quan_ly_khach_hang.index');
    }

    public function destroy(Request $request)
    {
        Client::where('id', $request->id)->first()->delete();

        return response()->json([
            'status'    => true,
        ]);
    }
    public function update(Request $request)
    {
        $data      = $request->all();
        $KhachHang = Client::find($request->id);
        $data['password'] = bcrypt($data['password']);
        $KhachHang->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật khách hàng thành công!',
        ]);

    }

}
