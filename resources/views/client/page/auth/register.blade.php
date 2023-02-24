@extends('client.share.master')
@section('content')
<div class="row d-flex justify-content-center">
    <section class="myaccount-section" id="formSignup">
        <div class="col-md-12 inner-column">
            <div class="inner-box signup-inner">
                <div class="upper-inner">
                    <h3>Đăng Ký Tài Khoản</h3>
                </div>
                <form id="dangkyCustomer"class="default-form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label>Họ Và Tên</label>
                        <input type="text" name="full_name">
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Mật Khẩu</label>
                        <input type="password" name="re_password">
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="text" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input class="form-control form-control-lg" type="date" name="dob">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="sex" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Nam</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="sex" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Nữ</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn-two">Sign Up<i class="flaticon-right-1"></i></button>
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
