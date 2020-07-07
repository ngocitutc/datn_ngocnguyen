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
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ SUBJECTS[$item['subject']] }}</td>
                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>
                            <td>{{ ROLES[$item['user_created']['role']] }}</td>
                            <td>{{ date('m/d/Y', strtotime($item['created_at'])) }}</td>
                            <td>{{ date('m/d/Y', strtotime($item['date_active'])) }}</td>
                            <td>
                                <a href="{{ route(STUDENT_TOPIC_INFO, $item['id']) }}" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
