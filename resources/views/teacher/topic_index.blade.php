@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Quản lý đề tài</h3>
                </div>
                <div class="col-6 m15b text-right">
                    <a href="{{ route(TEACHER_TOPIC_CREATE) }}" class="btn btn-primary">
                        Thêm đề tài
                    </a>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Người tạo</td>
                        <td>Chức vụ</td>
                        <td>Trạng thái</td>
                        <td>Ngày phê duyệt</td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $user)
                        <tr>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['password_show'] }}</td>
                            <td>{{ $user['profile']['user_name'] }}</td>
                            <td>{{ ROLES[$user['role']] }}</td>
                            <td>{{ $user['profile']['subject'] ? SUBJECTS[$user['profile']['subject']] : "" }}</td>
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
