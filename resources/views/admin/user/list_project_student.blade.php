@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Danh sách đồ án sinh viên</h3>
                </div>
                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <div class="m10r">
                        <input type="text" class="form-control m10r" placeholder="Mã giảng viên">
                    </div>
                    <div class="m10r">
                        <select class="form-control" name="role" id="select-role">
                            <option value="{{ STUDENT }}">Tất cả trạng thái</option>
                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[0] }}</option>
                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[1] }}</option>
                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[2] }}</option>
                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[3] }}</option>
                        </select>
                    </div>
                    <form action="" method="GET" id="">
                        <button class="btn btn-primary border-0 text-white m10r" id="export-file" style="min-width: 100px">
                            Lọc
                        </button>
                    </form>
                    <form action="" method="GET" id="">
                        <button class="btn btn-warning border-0 text-white" id="export-file">
                            In danh sách
                        </button>
                    </form>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Mã giảng viên</td>
                        <td>Tên giảng viên</td>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Đề tài</td>
                        <td>Trạng thái</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>20166760</td>
                        <td>Vũ Minh Bính</td>
                        <td>20165772</td>
                        <td>Vương Minh Anh</td>
                        <td>Xây dựng phần mềm quản lý quy trình kiểm thử của dự án phần mềm</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>20166760</td>
                        <td>Vũ Minh Bính</td>
                        <td>20165831</td>
                        <td>Trịnh Thành Công</td>
                        <td>Giải pháp tóm tắt trích rút một văn bản Tiếng Việt và ứng dụng</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>20166381</td>
                        <td>Lý Bảo Long</td>
                        <td>20165986</td>
                        <td>Bùi Văn Đức</td>
                        <td>Deep Learning và ứng dụng</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>20166866</td>
                        <td>Tăng Thị Huyền</td>
                        <td>20166020</td>
                        <td>Nguyễn Trường Giang</td>
                        <td>Hệ sinh thái phòng trọ cho sinh viên thuê</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>20166866</td>
                        <td>Tăng Thị Huyền</td>
                        <td>120166265</td>
                        <td>Đỗ Thị Lan</td>
                        <td>Phân tích dữ liệu chuỗi thời gian cho bài toán dự báo</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>20167014</td>
                        <td>Đặng Thị Mai</td>
                        <td>20166329</td>
                        <td>Mai Khánh Linh</td>
                        <td>Các đề tài liên quan đến công nghệ web hiện đại</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    
{{--                    @forelse($data as $user)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $user['email'] }}</td>--}}
{{--                            <td>{{ $user['password_show'] }}</td>--}}
{{--                            <td>{{ $user['profile']['user_name'] }}</td>--}}
{{--                            <td>{{ ROLES[$user['role']] }}</td>--}}
{{--                            <td>{{ $user['profile']['subject'] ? SUBJECTS[$user['profile']['subject']] : "" }}</td>--}}
{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td class="text-center" colspan="5">--}}
{{--                                Không có dữ liệu--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
