<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateTaiKhoanRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.tai_khoan.index');
    }
    public function store(CreateTaiKhoanRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        Admin::create($data);

        return response()->json([
            'status'    => true
        ]);
    }
    public function data()
    {
        $data = Admin::get();

        return response()->json([
            'data'  => $data,
        ]);
    } public function viewLogin()
    {
        return view('admin.login');
    }
    public function actionLogin(Request $request)
    {

        $data['email']      = $request->email;
        $data['password']   = $request->password;

        $check = Auth::guard('admin')->attempt($data);

        return response()->json([
            'status'    => $check,
        ]);
    }

}
