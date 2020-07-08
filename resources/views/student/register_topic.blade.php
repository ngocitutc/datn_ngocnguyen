@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Đăng ký đề tài</h3>
                </div>
                @if(isset($teacherStudent) && $teacherStudent->status == STATUS_STEP_LEANING && $teacherStudent->topic_id == null)
                <div class="col-6 m15b text-right">
                    <button class="btn btn-primary border-0">
                        Đề xuất đề tài
                    </button>
                </div>
                @endif
            </div>

            <div class="content-wrapper" style="background-color: white;">
                @if(isset($teacherStudent))
                    @if($teacherStudent->status == STATUS_STEP_WAITING)
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                Đang chờ giảng viên hướng dẫn xác nhận
                            </div>
                            <div class="col-12 text-center" style="justify-content: center">
                                <a href="{{ route(STUDENT_TEACHER_INFO, $teacherStudent->teacher_id) }}" class="btn btn-primary border-0">
                                    Thông tin giảng viên hướng dẫn
                                </a>
                            </div>
                        </div>
                    @else
                    <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Bộ môn</td>
                        <td>Ngày bắt đầu</td>
                        <td>Hạn báo cáo</td>
                        <td>Kỳ học</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ SUBJECTS[$item['subject']] }}</td>
                            <td>01/01/2020</td>
                            <td>01/06/2020</td>
                            <td>Kỳ 2 / Năm 2020</td>
                            <td class="text-center">
                                <a href="{{ route(STUDENT_TOPIC_INFO, $item['id']) }}" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fas fa-eye"></i></a>
                                <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
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
        </div>
    </div>
@endsection
