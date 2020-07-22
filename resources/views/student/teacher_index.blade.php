@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Đăng ký giảng viên hướng dẫn</h3>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                @if(isset($teacherStudent))
                    <div style="min-height: 400px">
                        <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 25px">
                            Đã đăng ký giảng viên hướng dẫn
                        </div>
                        <div class="text-center" style="font-size: 22px; margin-bottom: 25px; padding-bottom: 25px">
                            Thông tin giảng viên hướng dẫn
                        </div>
                        <div class="col-6 offset-3">
                            @php
                            $data = $teacherStudent->teacher->load('profile')->toArray();
                            @endphp
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
                @else
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên giảng viên</td>
                        <td>Bộ môn</td>
                        <td>Trình độ</td>
                        <td>Số lượng sinh viên hướng dẫn</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{$item['profile']['user_name']}}</td>
                            <td>{{SUBJECTS[$item['profile']['subject']]}}</td>
                            <td>Thạc sỹ</td>
                            <td>{{ $item['teacher_student_count'] . '/' . $limitedStudent }}</td>
                            <td>
                                <a href="{{ route(STUDENT_TEACHER_INFO, $item['id']) }}" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></a>
                                <button @if($item['teacher_student_count'] >= $limitedStudent) disabled @endif class="btn btn-success border-0 btn-topic-custom btn-register-teacher" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
    @include('layouts.modal_register_teacher')
@endsection

@section('js')
    <script src="{{ asset('js/student.js') }}"></script>
@endsection
