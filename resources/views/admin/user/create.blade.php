@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thêm mới tài khoản</h3>
                </div>
                <div class="col-6 m15b text-right">
                    <button class="btn btn-primary">
                        Thêm tài khoản
                    </button>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <div class="row m-0 d-flex p15t">
                    <div class="col-6">
                        <div class="row form-group">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Tên đăng nhập</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Mật khẩu</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Email</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Quyền</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

