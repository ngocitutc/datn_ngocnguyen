@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row content-wrapper">
                <div class="col-6 m15b">
                    <h3>Quản lý sinh viên hướng dẫn</h3>
                </div>
{{--                <div class="col-6 m15b text-right">--}}
{{--                            <input type="text" class="form-control" style="" placeholder="Mã sinh viên">--}}
{{--                </div>--}}
            </div>
            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Khoá</td>
                        <td>Đề tài</td>
                        <td>Trạng thái</td>
                        <td>Báo cáo đồ án</td>
                        <td>Ngày đánh giá</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item['student']['email'] }}</td>
                        <td>{{ $item['student']['profile']['user_name'] }}</td>
                        <td>CNTT2</td>
                        <td>K56</td>
                        <td>{{ isset($item['topic']) ? $item['topic']['name'] : "Chưa đăng ký đề tài" }}</td>
                        <td>{{ STATUS_STEP_TEXT[$item['status']] }}</td>
                        <td>{{ isset($item['project']) ? 'Đã báo cáo đồ án' : 'Chưa báo cáo đồ án' }}</td>
                        <td>{{ $item['rate_date'] ?? "Chưa đánh giá" }}</td>
                        <td class="text-center">
                            <button @if($item['status_topic'] == STATUS_TOPIC_DOING &&  isset($item['project'])) @else disabled @endif class="btn btn-info border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Đánh giá"><i class="fas fa-award"></i></button>
                            <button @if($item['status'] != STATUS_STEP_WAITING) disabled @endif class="btn btn-success border-0 btn-topic-custom btn-accept-student" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Phê duyệt"><i class="fas fa-check"></i></button>
{{--                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="far fa-edit"></i></button>--}}
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="8">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.modal_accept_student')
@endsection

@section('js')
    <script src="{{ asset('js/teacher.js') }}"></script>
@endsection
