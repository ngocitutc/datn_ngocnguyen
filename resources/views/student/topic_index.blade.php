@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Định hướng đề tài</h3>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Bộ môn</td>
                        <td>Người tạo</td>
                        <td>Chức vụ</td>
                        <td>Ngày tạo</td>
                        <td>Ngày phê duyệt</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Phần mềm chỉnh sửa ảnh</td>
                        <td>Công nghệ phần mềm</td>
                        <td>

                        </td>
                        <td>Sinh viên</td>
                        <td>30/03/1998</td>
                        <td>01/01/2000</td>
                        <td>
                            <button class="btn btn-primary border-0">Xem chi tiết</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Phần mềm chỉnh sửa ảnh</td>
                        <td>Công nghệ phần mềm</td>
                        <td>Trần Thị Bích</td>
                        <td>Sinh viên</td>
                        <td>30/03/1998</td>
                        <td>01/01/2000</td>
                        <td>
                            <button class="btn btn-primary border-0">Xem chi tiết</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Phần mềm chỉnh sửa ảnh</td>
                        <td>Công nghệ phần mềm</td>
                        <td>Nguyễn Thị Ngọc</td>
                        <td>Giảng viên</td>
                        <td>30/03/1998</td>
                        <td>01/01/2000</td>
                        <td>
                            <button class="btn btn-primary border-0">Xem chi tiết</button>
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
