@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Duyệt đề tài sinh viên</h3>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Bộ môn</td>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Ngày tạo</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Phần mềm nhận diện khuôn mặt</td>
                        <td>Công nghệ phần mềm</td>
                        <td>961010</td>
                        <td>Đỗ Phú Cường</td>
                        <td>CNTT2-K56</td>
                        <td>10/10/1996</td>
                        <td class="text-center">
                            <button class="btn btn-success border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Duyệt đề tài"><i class="fas fa-check"></i></button>
                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ bỏ để tài"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
{{--                    @forelse($data as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $item['name'] }}</td>--}}
{{--                            <td>{{ SUBJECTS[$item['subject']] }}</td>--}}
{{--                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>--}}
{{--                            <td>{{ ROLES[$item['user_created']['role']] }}</td>--}}
{{--                            <td>{{ STATUS_TOPIC[$item['status']] }}</td>--}}
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
