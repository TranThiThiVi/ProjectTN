@extends('admin.master')
@section('content')
<div class="row" id="app">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Quản Lý Hóa Đơn Nhập Kho
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">#</th>
                                <td class="text-center align-middle">Mã Hóa Đơn</td>
                                <td class="text-center align-middle">Tổng Tiền Hóa Đơn</td>
                                <td class="text-center align-middle">Ghi Chú</td>
                                <td class="text-center align-middle">Tên Người Nhập</td>
                                <td class="text-center align-middle">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value , key) in dataHD ">
                                <th class="align-middle text-center">@{{ key + 1 }}</th>
                                <td class="align-middle">@{{ value.ma_hoa_don}}</td>
                                <td class="align-middle">@{{ value.tong_tien_hoa_don}}</td>
                                <td class="align-middle">@{{ value.ghi_chu}}</td>
                                <td class="align-middle">@{{ value.ho_va_ten}}</td>
                                <td class="align-middle text-center">
                                    <button class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" v-on:click="chiTiet(value.id)" >Chi Tiết</button>
                                    <button v-on:click="delete_hd = value" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" >Xóa Bỏ</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Chi Tiết Hóa Đơn</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">#</th>
                                    <td class="text-center align-middle">Tên Sản Phẩm</td>
                                    <td class="text-center align-middle">Số Lượng Nhập</td>
                                    <td class="text-center align-middle">Đơn Giá Nhập</td>
                                    <td class="text-center align-middle">Thành Tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v , k) in dataCT ">
                                    <th class="align-middle text-center">@{{ k + 1 }}</th>
                                    <td class="align-middle">@{{ v.ten_san_pham }}</td>
                                    <td class="align-middle">@{{ v.so_luong_nhap }}</td>
                                    <td class="align-middle">@{{ v.don_gia_nhap }}</td>
                                    <td class="align-middle">@{{ v.thanh_tien}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="deleteHoaDon()">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</div>
@endsection
@section('js')
<script>
    new Vue({
    el      :   '#app',
    data    :   {
        dataHD    : [],
        dataCT    : [],
        delete_hd : {},
    },
    created()   {

        this.loadData();
    },
    methods :   {
        loadData(){
            axios
                .get('/admin/nhap-kho/data-hd')
                .then((res) => {
                    this.dataHD = res.data.datahd;
                });
        },
        chiTiet(value){
            axios
                .get('/admin/nhap-kho/data-chitiet/' + value)
                .then((res) => {
                    this.dataCT = res.data.dataChiTiet;
                });

        },
        deleteHoaDon() {
                axios
                    .post('/admin/nhap-kho/delete-hd', this.delete_hd)
                    .then((res) => {
                        toastr.success(res.data.message);
                        this.loadData();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
        },
    },
});
</script>
@endsection
