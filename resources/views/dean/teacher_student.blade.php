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
                        <td>Trạng thái</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($teacherStudent as $item)
                    <tr>
                        <td>{{ $item->teacher->email }}</td>
                        <td>{{ $item->teacher->profile->user_name }}</td>
                        <td>{{ SUBJECTS[$item->teacher->profile->subject] }}</td>
                        <td>{{ $item->student->email }}</td>
                        <td>{{ $item->student->profile->user_name }}</td>
                        <td>{{ $item->student->profile->class }}</td>
                        <td>{{ $item->student->profile->period }}</td>
                        <td>{{ $item->topic->name ?? "Chưa chọn đề tài" }}</td>
                        <td>{{ STATUS_TOPIC_TEXT[$item->status_topic] ?? "Chưa chọn đề tài" }}</td>
                        <td>
                            <button class="btn btn-success border-0 btn-topic-custom btn-accept-topic-student" @if($item->status_topic == STATUS_TOPIC_WAITING_DEAN) @else disabled @endif data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Phê duyệt"><i class="fas fa-check"></i></button>
                            <button class="btn btn-danger border-0 btn-topic-custom btn-remove-topic-student" @if($item->status_topic == STATUS_TOPIC_WAITING_DEAN) @else disabled @endif data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Huỷ"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.modal_accept_topic_student')
    @include('layouts.modal_remove_topic_student')
@endsection
@section('js')
    <script src="{{ asset('js/dean_topic.js') }}"></script>
@endsection
