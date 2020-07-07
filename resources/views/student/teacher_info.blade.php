@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thông tin giảng viên hướng dẫn</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-user" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code">Trạng thái</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" value="Đã bảo vệ" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code">Điểm đánh giá</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" value="9" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Xếp loại</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="Giỏi" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Đánh giá của giảng viên</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="address" readonly>Very good
                                    </textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code">Tên giảng viên</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" value="Phần mềm nhận diện khuôn mặt" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Bộ môn</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="01/01/2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Trình độ</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="01/06/2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Số điện thoại</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="Kỳ 2 / Năm 2020" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Địa chỉ</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="https://drive.google.com/drive/folders/example" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Email</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="https://drive.google.com/drive/folders/example" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Facebook</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <div>
                                        <a class="form-control border-0" style="color: blue" href="https://www.youtube.com/">https://www.youtube.com/</a>
                                    </div>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-12 m15b text-right">--}}
{{--                    <button id="submit-create-user" class="btn btn-primary border-0">--}}
{{--                        Hoàn tất--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection

