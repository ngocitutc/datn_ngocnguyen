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
                        <td>Bộ môn</td>
                        <td>Người tạo</td>
                        <td>Chức vụ</td>
                        <td>Ngày tạo</td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ SUBJECTS[$item['subject']] }}</td>
                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>
                            <td>{{ ROLES[$item['user_created']['role']] }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
