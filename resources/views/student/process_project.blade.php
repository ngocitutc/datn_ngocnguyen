@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Báo cáo tiến độ</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                @if(isset($teacherStudent))
                    <form id="form-process-project" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Ngày báo cáo</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ date('d/m/Y') }}" readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Tiêu đề<span style="color: red">&nbsp;*</span></div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input name="title" type="text" class="form-control m5t m5b fs14"
                                           value="">
                                    <p class="error-message m0" data-error="title"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-name">Nội dung<span style="color: red">&nbsp;*</span></div>
                                </div>
                                <div class="col-12 col-xl-8">
                                      <textarea name="content" type="text" class="form-control m5t m5b fs14" rows="6"></textarea>
                                    <p class="error-message m0" data-error="content"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Link file đính kèm</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input name="link_file" type="text" class="form-control m5t m5b fs14"
                                           value="">
                                    <p class="error-message m0" data-error="link_file"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <span>Ghi chú thêm</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                                <textarea name="note" type="text" class="form-control m5t m5b fs14"
                                                          rows="6"></textarea>
                                    <p class="error-message m0" data-error="note"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="teacher_student_id" value="{{ $teacherStudent->id }}">
                </form>
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
            @if(isset($teacherStudent))
                <div class="row">
                    <div class="col-12 m15b text-right">
                        <button id="submit-process-project" class="btn btn-primary border-0">
                            Hoàn tất
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/process_project.js') }}"></script>
@endsection

