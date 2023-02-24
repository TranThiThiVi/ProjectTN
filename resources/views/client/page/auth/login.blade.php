@extends('client.share.master')
@section('content')
<div class="row d-flex justify-content-center">
        <section class="myaccount-section" id="formLogin">
            <div class="col-md-12 inner-column">
                <div class="inner-box signup-inner">
                    <div class="upper-inner">
                        <h3>Đăng Nhập</h3>
                    </div>
                    <form id="loginCustomer" class="default-form">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn-two">Sign In<i class="flaticon-right-1"></i></button>
                        </div>
                    </form>
                    <div class="lower-inner centred">
                        <span>or</span>
                        <ul class="social-links clearfix">
                            <li><a href="my-account.html"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li><a href="my-account.html"><i class="fab fa-google-plus-g"></i>Google</a></li>
                        </ul>
                         <a href="/customer/view-signup" class="btn btn-info text-white">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection

