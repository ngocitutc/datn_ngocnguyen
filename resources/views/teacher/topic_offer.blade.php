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
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Khoá</td>
                        <td>Tên đề tài</td>
                        <td>Bộ môn</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item['student']['email'] }}</td>
                        <td>{{ $item['student']['profile']['user_name'] }}</td>
                        <td>{{ $item['student']['profile']['class'] }}</td>
                        <td>{{ $item['student']['profile']['period'] }}</td>
                        <td>{{ $item['topic']['name'] }}</td>
                        <td>{{ SUBJECTS[$item['topic']['subject']] }}</td>
                        <td class="text-center">
                            <button class="btn btn-success border-0 btn-topic-custom teacher-accept-topic-student" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Duyệt đề tài"><i class="fas fa-check"></i></button>
{{--                            <button class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fa-eye"></i></button>--}}
                            <button class="btn btn-danger border-0 btn-topic-custom teacher-remove-topic-student" data-toggle="tooltip" data-id="{{ $item['id'] }}" data-placement="top" title="Huỷ bỏ để tài"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="8">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.modal_teacher_accept_topic')
    @include('layouts.modal_teacher_remove_topic')
@endsection

@section('js')
    <script src="{{ asset('js/teacher.js') }}"></script>
@endsection
