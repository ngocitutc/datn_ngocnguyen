@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            @php
            $user = \Illuminate\Support\Facades\Auth::user();
            @endphp
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thông tin giảng viên</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-user" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-code">Tên giảng viên</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_code" value="{{ $data['profile']['user_name'] }}" readonly>
                                    <p class="error-message m0" data-error="user_code"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Bộ môn</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ SUBJECTS[$data['profile']['subject']] }}" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Trình độ</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['level'] }}" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Số điện thoại</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['phone_number'] }}" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Địa chỉ</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['address'] }}" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <div id="select-role-name">Email</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['user_email'] }}" readonly>
                                    <p class="error-message m0" data-error="user_name"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if(!$user->getTeacherLastByStudent())
            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-create-user" class="btn btn-primary border-0 btn-register-teacher" data-id="{{ $data['id'] }}">
                        Đăng ký hướng dẫn
                    </button>
                </div>
            </div>
            @endif
        </div>
    </div>
    @include('layouts.modal_register_teacher')
@endsection

@section('js')
    <script src="{{ asset('js/student.js') }}"></script>
@endsection

