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
                    <form action="{{ route(USER_LIST_STUDENT) }}" method="GET" id="">

                        <div class="m10r">
                            <select class="form-control" name="class" id="select-role">
                                <option value="all">Tất cả lớp</option>
                                <option value="CNTT-1">CNTT-1</option>
                                <option value="CNTT-2">CNTT-2</option>
                                <option value="CNTT-3">CNTT-3</option>
                            </select>
                        </div>
                        <div class="m10r">
                            <select class="form-control" name="period" id="select-role">
                                <option value="all">Tất cả khoá</option>
                                <option value="K59">K59</option>
                                <option value="K58">K58</option>
                                <option value="K57">K57</option>
                                <option value="K56">K56</option>
                                <option value="K55">K55</option>
                                <option value="K54">K54</option>
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
