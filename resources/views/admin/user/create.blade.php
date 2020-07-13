@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thêm mới tài khoản</h3>
                </div>
                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <form action="" method="" id="export-form" style="margin-right: 15px">
                        <button type="button" class="btn btn-success border-0">
                           Import file
                        </button>
                    </form>

                    <form action="{{ route(USER_EXPORT_FILE, STUDENT) }}" method="GET" id="export-form">
                        <button class="btn btn-warning border-0 text-white" id="export-file">
                            Tải bản mẫu
                        </button>
                    </form>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-user" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Thông tin đăng nhập
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mã đăng nhập</span><span style="color: red">&nbsp;*</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="email">
                                    <p class="error-message m0" data-error="email"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mật khẩu</span><span style="color: red">&nbsp;*</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="password">
                                    <p class="error-message m0" data-error="password"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Quyền</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="role" id="select-role">
                                        <option value="{{ STUDENT }}">Sinh viên</option>
                                        <option value="{{ TEACHER }}">Giảng viên</option>
                                        <option value="{{ DEAN }}">Lãnh đạo khoa</option>
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
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code"> Mã sinh viên<span style="color: red">&nbsp;*</span></div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Tên sinh viên<span style="color: red">&nbsp;*</span></div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name">
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div id="select-class" class="row" style="">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Lớp</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="class" id="">
                                        <option value="CNTT-1">CNTT-1</option>
                                        <option value="CNTT-2">CNTT-2</option>
                                        <option value="CNTT-3">CNTT-3</option>
                                    </select>
                                    <p class="error-message m0" data-error="gender"></p>
                                </div>
                            </div>
                            <div id="select-class-2" class="row" style="">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Khoá</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="period" id="">
                                        <option value="K59">K59</option>
                                        <option value="K58">K58</option>
                                        <option value="K57">K57</option>
                                        <option value="K56">K56</option>
                                        <option value="K55">K55</option>
                                        <option value="K54">K54</option>
                                    </select>
                                    <p class="error-message m0" data-error="gender"></p>
                                </div>
                            </div>
                            <div id="subject" class="row" style="display: none">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Bộ môn</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="subject" id="">
                                        @foreach(SUBJECTS as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    <p class="error-message m0" data-error="gender"></p>
                                </div>
                            </div>
                            <div id="select-level" class="row" style="display: none">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Trình độ</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="level" id="">
                                        <option value="Thạc sỹ">Thạc sỹ</option>
                                        <option value="Tiến sỹ">Tiến sỹ</option>
                                        <option value="Giáo sư">Giáo sư</option>
                                    </select>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Ngày sinh</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="date" class="form-control m5t m5b fs14" name="birthday">
                                    <p class="error-message m0" data-error="birthday"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Giới tính</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="gender" id="">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                    <p class="error-message m0" data-error="gender"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Điện thoại</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="phone_number">
                                    <p class="error-message m0" data-error="phone_number"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Email</span><span style="color: red">&nbsp;*</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_email" placeholder="example@gmail.com">
                                    <p class="error-message m0" data-error="user_email"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Địa chỉ</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="address"></textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-create-user" class="btn btn-primary border-0">
                        Thêm mới
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection

