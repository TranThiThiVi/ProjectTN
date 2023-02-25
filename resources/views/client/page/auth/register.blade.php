@extends('client.share.master')
@section('content')
<div class="row d-flex justify-content-center" id="app">
    <section class="myaccount-section">
        <div class="col-md-12 inner-column">
            <div class="inner-box signup-inner">
                <div class="upper-inner">
                    <h3>Đăng Ký Tài Khoản</h3>
                </div>
                <form id="formDangKy" class="default-form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" v-model="add.email">
                    </div>
                    <div class="form-group">
                        <label>Họ Và Tên</label>
                        <input type="text" v-model="add.ho_va_ten">
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" v-model="add.password">
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Mật Khẩu</label>
                        <input type="password" v-model="add.re_password">
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="text" v-model="add.phone">
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input class="form-control form-control-lg" type="date" v-model="add.ngay_sinh">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" v-model="add.gioi_tinh" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Nam</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" v-model="add.gioi_tinh" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Nữ</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <button type="button" v-on:click="dangKy()" class="theme-btn-two">Đăng Ký<i class="flaticon-right-1"></i></button>
                    </div>
                </form>
                <div class="lower-inner centred">
                    <span>or</span>
                    <ul class="social-links clearfix">
                        <li><a href="my-account.html"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                        <li><a href="my-account.html"><i class="fab fa-google-plus-g"></i>Google</a></li>
                    </ul>
                        <a href="/customer/view-login" class="btn btn-danger text-white">Log In Now</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('js')
<script>
    new Vue({
        el      :   '#app',
        data    :   {
            add      :  {},
        },
        created()   {
            console.log(123);
        },
        methods :   {
            dangKy() {
                axios
                    .post('/register', this.add)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            setTimeout(() => {
                                window.location.href = '/login';
                            }, 2000);
                        }
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
