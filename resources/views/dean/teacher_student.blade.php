@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Giảng viên - Sinh viên</h3>
                </div>
                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <div class="m10r">
                        <input type="text" class="form-control m10r" placeholder="Mã giảng viên">
                    </div>
                    <div class="m10r">
                        <select class="form-control" name="role" id="select-role">
                            <option value="{{ STUDENT }}">Tất cả các kỳ học</option>
                            <option value="{{ STUDENT }}">Kỳ 2 / Năm 2020</option>
                            <option value="{{ STUDENT }}">Kỳ 1 / Năm 2020</option>
                            <option value="{{ STUDENT }}">Kỳ 2 / Năm 2019</option>
                            <option value="{{ STUDENT }}">Kỳ 1 / Năm 2019</option>
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
                        <td>Bộ môn</td>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Khoá</td>
                        <td>Đề tài</td>
                        <td>Kỳ học</td>
                        <td>Trạng thái</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>Khoa học máy tính</td>
                        <td>25896321</td>
                        <td>Nguyễn Thị Ngọc</td>
                        <td>CNTT-2</td>
                        <td>K57</td>
                        <td>Quản lý thư viện</td>
                        <td>Kỳ 2 / Năm 2020</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
                    <tr>
                        <td>96325874</td>
                        <td>Trần Thị Bích</td>
                        <td>Khoa học máy tính</td>
                        <td>85236987</td>
                        <td>Lê Xuân Trường</td>
                        <td>CNTT-1</td>
                        <td>K56</td>
                        <td>Chưa đăng ký</td>
                        <td>Kỳ 2 / Năm 2020</td>
                        <td>Đang chờ phê duyệt</td>
                    </tr>
                    <tr>
                        <td>54123698</td>
                        <td>Nguyễn Văn Toàn</td>
                        <td>Hệ thống thông tin</td>
                        <td>52369874</td>
                        <td>Nguyễn Thị Ngọc</td>
                        <td>CNTT-2</td>
                        <td>K56</td>
                        <td>Quản lý bán hàng</td>
                        <td>Kỳ 2 / Năm 2020</td>
                        <td>Đã đánh giá</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>Khoa học máy tính</td>
                        <td>25896321</td>
                        <td>Nguyễn Thị Ngọc</td>
                        <td>CNTT-2</td>
                        <td>K56</td>
                        <td>Quản lý thư viện</td>
                        <td>Kỳ 2 / Năm 2020</td>
                        <td>Đang hướng dẫn</td>
                    </tr>
{{--                    @forelse($data as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $item['name'] }}</td>--}}
{{--                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>--}}
{{--                            <td>{{ ROLES[$item['user_created']['role']] }}</td>--}}
{{--                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết đề tài"><i class="fas fas fa-eye"></i></a>--}}
{{--                                <button class="btn btn-success border-0 btn-topic-custom btn-topic-active" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Duyệt đề tài"><i class="fas fa-check"></i></button>--}}
{{--                                <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ đề tài"><i class="fas fa-trash-alt"></i></button>--}}
{{--                            </td>--}}
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
    @include('layouts.modal')
@endsection
@section('js')
    <script src="{{ asset('js/dean_topic.js') }}"></script>
@endsection
