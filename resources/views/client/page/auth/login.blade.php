@extends('client.share.master')
@section('content')
<div class="row d-flex justify-content-center" id="app">
    <section class="myaccount-section" id="formLogin">
        <div class="col-md-12 inner-column">
            <div class="inner-box signup-inner">
                <div class="upper-inner">
                    <h3>Đăng Nhập</h3>
                </div>
                <form class="default-form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" v-model="add.email">
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" v-model="add.password">
                    </div>
                    <div class="form-group">
                        <button type="button" class="theme-btn-two" v-on:click="dangNhap()">Đăng Nhập<i class="flaticon-right-1"></i></button>
                    </div>
                </form>
                <div class="lower-inner centred">
                    <span>or</span>
                    <ul class="social-links clearfix">
                        <li><a href="my-account.html"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                        <li><a href="my-account.html"><i class="fab fa-google-plus-g"></i>Google</a></li>
                    </ul>
                        <a href="/register" class="btn btn-info text-white">Sign Up Now</a>
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

            },
            methods :   {
                dangNhap() {
                    axios
                        .post('/login', this.add)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success("Đăng nhập thành công!");
                                setTimeout(() => {
                                    window.location.href = '/';
                                }, 2000);
                            } else {
                                toastr.error("Tài khoản hoặc mật khẩu không đúng!");
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

