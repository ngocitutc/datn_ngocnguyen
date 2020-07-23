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
                        <td>Khoá</td>
                        <td>Ngày đề xuất</td>
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
                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>
                            <td class="text-center">
                                <button class="btn btn-success border-0 btn-topic-custom btn-accept-student" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Phê duyệt"><i class="fas fa-check"></i></button>
                                <button class="btn btn-danger border-0 btn-topic-custom btn-remove-student" data-toggle="tooltip" data-placement="top" title="Huỷ"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">Không có dữ liệu</td>
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
