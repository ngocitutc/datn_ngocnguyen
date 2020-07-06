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
                <div class="row form-group m-0 d-flex p20">
                    <div class="col-12 col-xl-6">
                        <div class="row">
                            <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                Thông tin đăng nhập
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Mã đăng nhập</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="email" placeholder="12345678">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Mật khẩu</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="password" placeholder="abc12345">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Email</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name" placeholder="example@gmail.com">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Quyền</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <select class="form-control" name="role" id="">
                                    <option value="1">Lãnh đạo khoa</option>
                                    <option value="2">Giảng viên</option>
                                    <option value="3">Sinh viên</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="row">
                            <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                Thông tin cá nhân
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Mã sinh viên</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="email" placeholder="12345678">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Tên sinh viên</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="password" placeholder="abc12345">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Ngày sinh</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name" placeholder="example@gmail.com">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Giới tính</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <select class="form-control" name="role" id="">
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-control col-xl-5 border-0" >
                                <span>Điện thoại</span>
                            </div>
                            <div class="col-12 col-xl-7">
                                <input type="text" class="form-control m5t m5b fs14" name="house_name" placeholder="example@gmail.com">
                                <p class="error-message m0" data-error="house_name"></p>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-12 form-control col-xl-5 border-0" >--}}
{{--                                <span>Địa chỉ</span>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-7">--}}
{{--                                <textarea type="text" class="form-control m5t m5b fs14" name="house_name" placeholder="example@gmail.com">--}}
{{--                                    --}}
{{--                                </textarea>--}}
{{--                                <p class="error-message m0" data-error="house_name"></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

