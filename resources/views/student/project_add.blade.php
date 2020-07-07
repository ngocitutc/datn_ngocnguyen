@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Báo cáo đồ án</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-user" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6" style="padding-right: 25px !important;">
                            <div class="row">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Thông tin sinh viên
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mã sinh viên</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="email" value="961010" readonly>
                                    <p class="error-message m0" data-error="email"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Tên sinh viên</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="password" value="Đỗ Phú Cường" readonly>
                                    <p class="error-message m0" data-error="password"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Lớp</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="password" value="CNTT2-K56" readonly>
                                    <p class="error-message m0" data-error="password"></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 40px">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Thông tin giảng viên hướng dẫn
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Tên giảng viên</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" value="Nguyễn Thị Giảng Viên" name="email" readonly>
                                    <p class="error-message m0" data-error="email"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Bộ môn</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" value="Khoa học máy tính" name="password" readonly>
                                    <p class="error-message m0" data-error="password"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6" style="padding-left: 25px !important;">
                            <div class="row">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Thông tin đồ án
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code">Tên đề tài</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" value="Phần mềm nhận diện khuôn mặt" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Ngày bắt đầu</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="01/01/2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Hạn báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="01/06/2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Kỳ học</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="Kỳ 2 / Năm 2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Link file báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" placeholder="https://drive.google.com/drive/folders/example">
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Link source code</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" placeholder="https://drive.google.com/drive/folders/example">
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mô tả</span>
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
                        Hoàn tất
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection

