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
                    <tr>
                        <td>Trần Thị Bích</td>
                        <td>Công nghệ thông tin</td>
                        <td>Thạc sỹ</td>
                        <td>8/10</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Trần Thị Bích</td>
                        <td>Công nghệ thông tin</td>
                        <td>Thạc sỹ</td>
                        <td>8/10</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Trần Thị Bích</td>
                        <td>Công nghệ thông tin</td>
                        <td>Thạc sỹ</td>
                        <td>8/10</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết giảng viên"><i class="fas fa-chalkboard-teacher"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                        </td>
                    </tr>
{{--                    @forelse($data as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $item['name'] }}</td>--}}
{{--                            <td>{{ SUBJECTS[$item['subject']] }}</td>--}}
{{--                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>--}}
{{--                            <td>{{ ROLES[$item['user_created']['role']] }}</td>--}}
{{--                            <td>{{ STATUS_TOPIC[$item['status']] }}</td>--}}
{{--                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>--}}
{{--                            <td>{{ $item['date_active'] ? date('d/m/Y', strtotime($item['date_active'])) : "Đang chờ kiểm duyệt" }}</td>--}}
{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td colspan="5">Không có dữ liệu</td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection