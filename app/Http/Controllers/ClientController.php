<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\CreateClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Http\Requests\RegisterRequest;
use App\Jobs\SendMailCreateClientJob;
use App\Models\BinhLuan;
use App\Models\Client;
use App\Models\SanPham;
use App\Models\YeuThich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function actionRegister(CreateClientRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['hash'] = Str::uuid();
        Client::create($data);

        SendMailCreateClientJob::dispatch($data);

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
        if($check) {
            if(Auth::guard('client')->user()->is_active == 0){
                Auth::guard('client')->logout();
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Tài khoản chưa được kích hoạt!',
                ]);
            }
            return response()->json(['status' => true]);
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

    public function activeClient($hash)
    {
        $client = Client::where('hash', $hash)->first();
        if($client){
            if($client->is_active == 1){
                toastr()->warning('Tài khoản đã được kích hoạt trước đó!');
                return redirect('/login');
            }
            $client->is_active = 1;
            $client->save();

            toastr()->success('Đã kích hoạt tài khoản thành công!');

            return redirect('/login');
        }
    }

    public function yeuThich($id)
    {
        $KhachHang = Auth::guard('client')->user();

        $yeuThich = YeuThich::where('id_san_pham', $id)
                            ->where('id_khach_hang', $KhachHang->id)
                            ->first();
        if($yeuThich){
            toastr()->error('Đã thêm vào yêu thích trước đó!');
            return redirect()->back();
        }else{
            YeuThich::create([
                'id_san_pham'       => $id,
                'id_khach_hang'     => $KhachHang->id,
                'is_yeu_thich'      => 0,
            ]);

            toastr()->success('Đã thêm vào yêu thích!');

            return redirect()->back();
        }


    }

    public function comment(Request $request)
    {
        $KhachHang = Auth::guard('client')->user();

        $data = $request->all();

        BinhLuan::create([
            'id_san_pham'   =>   $request->id_san_pham,
            'id_khach_hang' =>   $KhachHang->id,
            'noi_dung'      =>   $request->noi_dung,
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Đã bình luận bài viết!',
        ]);
    }

    public function viewYeuthich()
    {
        $KhachHang = Auth::guard('client')->user();
        $yeuThich = YeuThich::where('id_khach_hang', $KhachHang->id)
                            ->join('san_phams', 'yeu_thiches.id_san_pham', 'san_phams.id')
                            ->select('san_phams.*', 'yeu_thiches.id as id_yeu_thich')
                            ->get();
        return view('client.yeuthich', compact('yeuThich'));
    }

    public function huyYeuThich($id)
    {
        $KhachHang = Auth::guard('client')->user();

        $yeuThich = YeuThich::where('id_san_pham', $id)
                            ->where('id_khach_hang', $KhachHang->id)
                            ->first();
        if($yeuThich){
            $yeuThich->delete();
            toastr()->error('Đã hủy yêu thích!');
            return redirect()->back();
        }
    }

    public function viewCapNhatThongTin()
    {
        $KhachHang = Auth::guard('client')->user();

        $client = Client::find($KhachHang->id);
        return view('client.capnhatClient', compact('client'));
    }

    public function updateInfoClient(UpdateClientRequest $request)
    {
        $client = Client::find($request->id);
        $client->update($request->all());

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã cập nhật thông tin thành công',
        ]);
    }

    public function searchSanPham($keySearch)
    {
        $sanPham = SanPham::where('is_open', 1)
                          ->where('ten_san_pham', 'like', '%' . $keySearch . '%')
                          ->get();
        return view('client.search_san_pham', compact('sanPham', 'keySearch'));
    }
}
