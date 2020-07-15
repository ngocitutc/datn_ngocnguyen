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
                @if(isset($teacherStudent))
                    @if($teacherStudent->status == STATUS_STEP_WAITING)
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                Đang chờ giảng viên hướng dẫn xác nhận
                            </div>
                            <div class="col-12 text-center" style="justify-content: center">
                                <a href="{{ route(STUDENT_TEACHER_INFO, $teacherStudent->teacher_id) }}"
                                   class="btn btn-primary border-0">
                                    Thông tin giảng viên hướng dẫn
                                </a>
                            </div>
                        </div>
                    @else
                        @if(isset($teacherStudent->topic) && $teacherStudent->status_topic == STATUS_TOPIC_DOING)
                            @if($teacherStudent->project)
                                <div style="min-height: 400px">
                                    <div class="text-center"
                                         style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                        Bạn đã báo cáo đồ án
                                    </div>
                                    <div class="col-12 text-center" style="justify-content: center">
                                        <a href="{{ route(STUDENT_PROJECT_INFO) }}"
                                           class="btn btn-primary border-0">
                                            Xem thông tin đồ án
                                        </a>
                                    </div>
                                </div>
                            @else
                                <form id="form-project-add" action="">
                                <input type="hidden" name="id_teacher_student" value="{{ $teacherStudent->id }}">
                                <div class="row form-group m-0 d-flex p20">
                                    <div class="col-12 col-xl-6" style="padding-right: 25px !important;">
                                        <div class="row">
                                            <div class="col-12 form-control border-0"
                                                 style="font-size: 23px; margin-bottom: 20px">
                                                Thông tin sinh viên
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Mã sinh viên</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ $teacherStudent->student->email }}" readonly>
                                                <p class="error-message m0" data-error="email"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Tên sinh viên</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ $teacherStudent->student->profile->user_name }}"
                                                       readonly>
                                                <p class="error-message m0" data-error="password"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Lớp</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" value="CNTT2"
                                                       readonly>
                                                <p class="error-message m0" data-error="password"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Khoá</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" value="K56"
                                                       readonly>
                                                <p class="error-message m0" data-error="password"></p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 40px">
                                            <div class="col-12 form-control border-0"
                                                 style="font-size: 23px; margin-bottom: 20px">
                                                Thông tin giảng viên hướng dẫn
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Tên giảng viên</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ $teacherStudent->teacher->profile->user_name }}"
                                                       readonly>
                                                <p class="error-message m0" data-error="email"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Bộ môn</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ SUBJECTS[$teacherStudent->teacher->profile->subject] }}"
                                                       readonly>
                                                <p class="error-message m0" data-error="password"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6" style="padding-left: 25px !important;">
                                        <div class="row">
                                            <div class="col-12 form-control border-0"
                                                 style="font-size: 23px; margin-bottom: 20px">
                                                Thông tin đồ án
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-code">Tên đề tài</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ $teacherStudent->topic->name }}" readonly>
                                                <p class="error-message m0" data-error=""></p>
                                            </div>
                                        </div>
                                        {{--                            <div class="row">--}}
                                        {{--                                <div class="col-12 form-control col-xl-4 border-0" >--}}
                                        {{--                                    <div id="select-role-name">Kỳ học</div>--}}
                                        {{--                                </div>--}}
                                        {{--                                <div class="col-12 col-xl-8">--}}
                                        {{--                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="Kỳ 2 / Năm 2020" readonly>--}}
                                        {{--                                    <p class="error-message m0" data-error="user_name"></p>--}}
                                        {{--                                </div>--}}
                                        {{--                            </div>--}}
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Ngôn ngữ lập trình</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" name="program_lan"
                                                       placeholder="MySQL, C#, Java, PHP, ...">
                                                <p class="error-message m0" data-error="program_lan"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Công cụ sử dụng</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" name="program_tool"
                                                       placeholder="Visual Studio, PHP Storm, ...">
                                                <p class="error-message m0" data-error="program_tool"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Link file báo cáo</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" name="link_word"
                                                       placeholder="https://drive.google.com/drive/folders/example">
                                                <p class="error-message m0" data-error="link_word"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Link source code</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14" name="link_code"
                                                       placeholder="https://drive.google.com/drive/folders/example">
                                                <p class="error-message m0" data-error="link_code"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Mô tả</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <textarea type="text" class="form-control m5t m5b fs14" rows="4"
                                                          name="description"></textarea>
                                                <p class="error-message m0" data-error="description"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endif
                        @elseif(isset($teacherStudent->topic) && $teacherStudent->status_topic == STATUS_TOPIC_WAITING)
                            <div style="min-height: 400px">
                                <div class="text-center"
                                     style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                    Liên hệ với giảng viên hướng dẫn để xác nhận đề tài
                                </div>
                                <div class="col-12 text-center" style="justify-content: center">
                                    <a href="{{ route(STUDENT_TEACHER_INFO, $teacherStudent->teacher_id) }}"
                                       class="btn btn-primary border-0">
                                        Thông tin giảng viên hướng dẫn
                                    </a>
                                </div>
                            </div>
                        @elseif(isset($teacherStudent->topic) && $teacherStudent->status_topic == STATUS_TOPIC_DONE)
                            <div style="min-height: 400px">
                                <div class="text-center"
                                     style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                    Giảng viên đã đánh giá đồ án
                                </div>
                                <div class="col-12 text-center" style="justify-content: center">
                                    <a href="{{ route(STUDENT_PROJECT_INFO) }}"
                                       class="btn btn-primary border-0">
                                        Xem thông tin đồ án
                                    </a>
                                </div>
                            </div>
                        @else
                            <div style="min-height: 400px">
                                <div class="text-center"
                                     style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                    Bạn chưa đăng ký đề tài
                                </div>
                                <div class="col-12 text-center" style="justify-content: center">
                                    <a href="{{ route(STUDENT_REGISTER_TOPIC) }}" class="btn btn-primary border-0">
                                        Đăng ký đề tài
                                    </a>
                                </div>
                            </div>
                        @endif
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
            @if(isset($teacherStudent) && $teacherStudent->status == STATUS_STEP_LEANING
            && $teacherStudent->topic_id != null && $teacherStudent->status_topic == STATUS_TOPIC_DOING && (!$teacherStudent->project))
                <div class="row">
                    <div class="col-12 m15b text-right">
                        <button id="submit-project-add" class="btn btn-primary border-0">
                            Hoàn tất
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/student.js') }}"></script>
@endsection

