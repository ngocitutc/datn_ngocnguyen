@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Đánh giá đồ án sinh viên</h3>
                </div>
            </div>
            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-rate-project" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-12">
                            <div class="row">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Thông tin sinh viên
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Mã sinh viên</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->email }}" readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Tên sinh viên</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->profile->user_name }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Lớp</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->profile->class }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Khoá</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->profile->period }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
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
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Ngày báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ isset($project) ? date('d/m/Y', strtotime($project['created_at'])) : "Chưa báo cáo đồ án" }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Ngôn ngữ lập trình</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ isset($project) ? $project['program_lan'] : "Chưa báo cáo đồ án" }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Công cụ</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ isset($project) ? $project['program_tool'] : "Chưa báo cáo đồ án" }}"
                                           readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Đường dẫn file báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <a type="text" class="form-control m5t m5b fs14 border-0" style="color: blue"
                                       href="{{ isset($project) ? $project['link_word'] : "#" }}">
                                        {{ isset($project) ? $project['link_word'] : "Chưa báo cáo đồ án" }}
                                    </a>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Đường dẫn source code</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <a type="text" class="form-control m5t m5b fs14 border-0" style="color: blue"
                                       href="{{ isset($project) ? $project['link_code'] : "#" }}">
                                        {{ isset($project) ? $project['link_code'] : "Chưa báo cáo đồ án" }}</a>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <span>Mô tả</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                                <textarea type="text" class="form-control m5t m5b fs14" rows="4"
                                                          readonly>{{ isset($project) ? $project['description'] : "Chưa báo cáo đồ án" }}</textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12">
                            <div class="row">
                                <div class="col-12 form-control border-0" style="font-size: 23px; margin-bottom: 20px">
                                    Đánh giá của giảng viên
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12">
                            <div class="row">
                                <div class="col-12 form-control col-xl-2 border-0">
                                    <span>Nhận xét</span>
                                </div>
                                <div class="col-12 col-xl-10">
                                    <textarea name="rate_note" type="text" class="form-control m5t m5b fs14" rows="6">{{ $teacherStudent->rate_note ?? "" }}</textarea>
                                    <p class="error-message m0" data-error="rate_note"></p>
                                </div>
                                <input name="id_teacher_student" type="hidden" value="{{ $teacherStudent->id }}">
                                <input name="id_project" type="hidden" value="{{ $project->id }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-rate-project" class="btn btn-primary border-0">
                        Đánh giá
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/teacher.js') }}"></script>
@endsection

