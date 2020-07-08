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
                        <div class="text-center" style="font-size: 28px; padding-top: 50px">
                            Đã đăng ký giảng viên hướng dẫn
                        </div>
                        <div class="col-12">
                            <div class="row text-center" style="justify-content: center">
                                <div class="" style="padding-top: 30px">
                                    <input type="text" class="form-control m5t m5b fs14 border-0 text-center" name="password" style="font-size: 20px" value="{{ STATUS_STEP_TEXT[$teacherStudent->status] }}">
                                    <p class="error-message m0" data-error="password"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center" style="justify-content: center">
                            <a href="{{ route(STUDENT_TEACHER_INFO, $teacherStudent->teacher_id) }}" class="btn btn-primary border-0">
                                Xem thông tin giảng viên
                            </a>
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
                            <td>{{ $item['teacher_student_count'] . '/10' }}</td>
                            <td>
                                <a href="{{ route(STUDENT_TEACHER_INFO, $item['id']) }}" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></a>
                                <button class="btn btn-success border-0 btn-topic-custom btn-register-teacher" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Không có dữ liệu</td>
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
