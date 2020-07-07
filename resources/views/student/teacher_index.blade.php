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
                                <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></button>
                                <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
