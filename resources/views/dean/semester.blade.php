@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Quản lý đợt đăng ký</h3>
                </div>
{{--                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">--}}
{{--                    <form action="" method="" id="export-form" style="margin-right: 15px">--}}
{{--                        <button type="button" class="btn btn-success border-0">--}}
{{--                           Import file--}}
{{--                        </button>--}}
{{--                    </form>--}}

{{--                    <form action="{{ route(USER_EXPORT_FILE, STUDENT) }}" method="GET" id="export-form">--}}
{{--                        <button class="btn btn-warning border-0 text-white" id="export-file">--}}
{{--                            Tải bản mẫu--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Kỳ học</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <select class="form-control" name="role" id="select-role">
                                        <option value="{{ STUDENT }}">Kỳ 1</option>
                                        <option value="{{ TEACHER }}">Kỳ 2</option>
                                    </select>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Năm học</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <select class="form-control" name="role" id="select-role">
                                        <option value="{{ STUDENT }}">2022</option>
                                        <option value="{{ STUDENT }}">2021</option>
                                        <option value="{{ STUDENT }}">2020</option>
                                        <option value="{{ TEACHER }}">2019</option>
                                        <option value="{{ TEACHER }}">2018</option>
                                    </select>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Bắt đầu</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <input type="date" class="form-control m5t m5b fs14" name="user_code">
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Kết thúc</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <input type="date" class="form-control m5t m5b fs14" name="user_code">
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-3 border-0" >
                                    <span>Số sinh viên</span>
                                </div>
                                <div class="col-12 col-xl-9">
                                    <input type="number" class="form-control m5t m5b fs14" name="birthday" placeholder="Số sinh viên tối đa hướng dẫn (Mặc định : 10 sinh viên)">
                                    <p class="error-message m0" data-error="birthday"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-3 border-0" >
                                    <span>Ghi chú</span>
                                </div>
                                <div class="col-12 col-xl-9">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="address" rows="4"></textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">

                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-create-user" class="btn btn-primary border-0">
                        Áp dụng
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection

