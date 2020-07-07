@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row content-wrapper">
                <div class="col-6 m15b">
                    <h3>Duyệt sinh viên hướng dẫn</h3>
                </div>
                <div class="col-6 m15b text-right">
                            <input type="text" class="form-control" style="" placeholder="Mã sinh viên">
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Đề tài</td>
                        <td>Ngày đề xuất</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>961010</td>
                        <td>Đỗ Phú Cường</td>
                        <td>CNTT2-K56</td>
                        <td>Quản lý thư viện</td>
                        <td>10/10/1996</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết sinh viên"><i class="far fa-address-book"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Nhận hướng dẫn"><i class="fas fa-check"></i></button>
                            <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>961010</td>
                        <td>Đỗ Phú Cường</td>
                        <td>CNTT2-K56</td>
                        <td>Quản lý thư viện</td>
                        <td>10/10/1996</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết sinh viên"><i class="far fa-address-book"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Nhận hướng dẫn"><i class="fas fa-check"></i></button>
                            <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>961010</td>
                        <td>Đỗ Phú Cường</td>
                        <td>CNTT2-K56</td>
                        <td>Quản lý thư viện</td>
                        <td>10/10/1996</td>
                        <td class="text-center">
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết sinh viên"><i class="far fa-address-book"></i></button>
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Nhận hướng dẫn"><i class="fas fa-check"></i></button>
                            <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ"><i class="fas fa-trash-alt"></i></button>
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
{{--                            <td>--}}
{{--                                <button class="btn btn-primary">Sửa</button>--}}
{{--                                <button class="btn btn-primary">Đánh giá</button>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td colspan="8">Không có dữ liệu</td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
