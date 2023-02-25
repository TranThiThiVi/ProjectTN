<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function actionRegister(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Client::create($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo tài khoản thành công',
        ]);
    }

    public function actionLogin(Request $request)
    {
        $data['email']      = $request->email;
        $data['password']   = $request->password;

        $check = Auth::guard('client')->attempt($data);

        return response()->json([
            'status'    => $check,
        ]);
    }

    public function logout()
    {
        Auth::guard('client')->logout();

        toastr()->success('Bạn đã đăng xuất tài khoản !');
        return redirect('/');

    }
}
