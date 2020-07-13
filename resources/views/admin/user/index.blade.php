@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Quản lý tài khoản</h3>
                </div>
                <div class="col-6 m15b text-right">
                    <a href="{{ route(USER_CREATE) }}" class="btn btn-primary">
                        Thêm tài khoản
                    </a>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đăng nhập</td>
                        <td>Họ tên</td>
                        <td>Quyền</td>
                        <td>Bộ môn</td>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $user)
                        <tr>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['profile']['user_name'] }}</td>
                            <td>{{ ROLES[$user['role']] }}</td>
                            <td>{{ $user['profile']['subject'] ? SUBJECTS[$user['profile']['subject']] : "" }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">
                                Không có dữ liệu
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
