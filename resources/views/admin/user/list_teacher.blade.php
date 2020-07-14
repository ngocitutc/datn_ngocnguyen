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
                    <form action="{{ route(USER_LIST_TEACHER) }}" method="GET" id="">
                        <div class="m10r">
                            <select class="form-control" name="subject" id="select-role">
                                <option value="4">Tất cả bộ môn</option>
                                <option value="1">{{ SUBJECTS[1] }}</option>
                                <option value="2">{{ SUBJECTS[2] }}</option>
                                <option value="3">{{ SUBJECTS[3] }}</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-primary border-0 text-white m10r" id="export-file" style="min-width: 100px">
                                Lọc
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-warning border-0 text-white" id="export-file">
                                In danh sách
                            </button>
                        </div>
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
                        @forelse ($datas as $data)
                            <tr>
                                <td>{{ $data->profile->user_code }}</td>
                                <td>{{ $data->profile->user_name ?? "" }}</td>
                                <td>{{ $data->profile->subject ? SUBJECTS[$data->profile->subject] : ""}}</td>
                                <td>{{ $data->profile->level ?? "" }}</td>
                                <td>{{ $data->profile->birthday ?? "" }}</td>
                                <td>{{ GENDER[$data->profile->gender] }}</td>
                                <td>{{ $data->profile->phone_number ?? "" }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">
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
