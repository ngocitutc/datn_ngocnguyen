@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Danh sách giảng viên</h3>
                </div>
                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <div class="m10r">
                        <select class="form-control" name="role" id="select-role">
                            <option value="{{ STUDENT }}">Tất cả bộ môn</option>
                            <option value="{{ STUDENT }}">{{ SUBJECTS[1] }}</option>
                            <option value="{{ STUDENT }}">{{ SUBJECTS[2] }}</option>
                            <option value="{{ STUDENT }}">{{ SUBJECTS[3] }}</option>
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
                        <td>Trình độ</td>
                        <td>Ngày sinh</td>
                        <td>Giới tính</td>
                        <td>Điện thoại</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
                    </tr>
                    <tr>
                        <td>14785236</td>
                        <td>Vũ Minh Bính</td>
                        <td>{{ SUBJECTS[1] }}</td>
                        <td>Thạc sỹ</td>
                        <td>10/10/1996</td>
                        <td>Nam</td>
                        <td>0999999999</td>
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
