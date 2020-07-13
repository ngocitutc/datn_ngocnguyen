@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Danh sách sinh viên</h3>
                </div>
                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <div class="m10r">
                        <select class="form-control" name="role" id="select-role">
                            <option value="{{ STUDENT }}">Tất cả lớp</option>
                            <option value="{{ STUDENT }}">CNTT-1</option>
                            <option value="{{ STUDENT }}">CNTT-2</option>
                            <option value="{{ STUDENT }}">CNTT-3</option>
                        </select>
                    </div>
                    <div class="m10r">
                        <select class="form-control" name="role" id="select-role">
                            <option value="{{ STUDENT }}">Tất cả khoá</option>
                            <option value="{{ STUDENT }}">K59</option>
                            <option value="{{ STUDENT }}">K58</option>
                            <option value="{{ STUDENT }}">K57</option>
                            <option value="{{ STUDENT }}">K56</option>
                            <option value="{{ STUDENT }}">K55</option>
                            <option value="{{ STUDENT }}">K54</option>
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
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Lớp</td>
                        <td>Khoá</td>
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
                                <td>{{ $data->profile->class ?? ""}}</td>
                                <td>{{ $data->profile->period ?? "" }}</td>
                                <td>{{ $data->profile->birthday ?? "" }}</td>
                                <td>{{ $data->profile->gender ? GENDER[$data->profile->gender] : "" }}</td>
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
