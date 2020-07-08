@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thông tin đồ án</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                @if(isset($teacherStudent))
                    @if($teacherStudent->topic_id != null)
                        @if($teacherStudent->status_topic == STATUS_TOPIC_DOING)
                        <form id="form-create-user" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
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
                                    <div id="select-role-name">Đường dẫn file báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="https://drive.google.com/drive/folders/example" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Đường dẫn source code</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="https://drive.google.com/drive/folders/example" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mô tả</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="address" readonly>Mô tả đồ án</textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>
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
                    </div>
                </form>
                            @else
                            <div style="min-height: 400px">
                                <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                    Liên hệ với giảng viên hướng dẫn để xác nhận đề tài
                                </div>
                                <div class="col-12 text-center" style="justify-content: center">
                                    <a href="{{ route(STUDENT_TEACHER_INFO, $teacherStudent->teacher_id) }}" class="btn btn-primary border-0">
                                        Thông tin giảng viên hướng dẫn
                                    </a>
                                </div>
                            </div>
                            @endif
                    @else
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                Bạn chưa đăng ký đề tài
                            </div>
                            <div class="col-12 text-center" style="justify-content: center">
                                <a href="{{ route(STUDENT_REGISTER_TOPIC) }}" class="btn btn-primary border-0">
                                    Đăng ký đề tài
                                </a>
                            </div>
                        </div>
                    @endif
                @else
                    <div style="min-height: 400px">
                        <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                            Bạn chưa đăng ký giảng viên hướng dẫn
                        </div>
                        <div class="col-12 text-center" style="justify-content: center">
                            <a href="{{ route(STUDENT_TEACHER) }}" class="btn btn-primary border-0">
                                Đăng ký giảng viên hướng dẫn
                            </a>
                        </div>
                    </div>
                @endif
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

