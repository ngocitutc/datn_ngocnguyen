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
                    <tr>
                        <td>20165772</td>
                        <td>Vương Minh Anh</td>
                        <td>CNTT-2</td>
                        <td>K61</td>
                        <td>10/10/1996</td>
                        <td>Nữ</td>
                        <td>0820165772</td>
                    </tr>
                    <tr>
                        <td>20165831</td>
                        <td>Trịnh Thành Công</td>
                        <td>CNTT-1</td>
                        <td>K56</td>
                        <td>14/01/1998</td>
                        <td>Nam</td>
                        <td>0820165831</td>
                    </tr>
                    <tr>
                        <td>20165986</td>
                        <td>Bùi	Văn	Đức</td>
                        <td>CNTT-2</td>
                        <td>K59</td>
                        <td>10/05/1996</td>
                        <td>Nam</td>
                        <td>0820165986</td>
                    </tr>
                    <tr>
                        <td>20166020</td>
                        <td>Nguyễn Trường Giang</td>
                        <td>CNTT-2</td>
                        <td>K59</td>
                        <td>04/06/1997</td>
                        <td>Nam</td>
                        <td>0820166020</td>
                    </tr>
                    <tr>
                        <td>20166265</td>
                        <td>Đỗ Thị Lan</td>
                        <td>CNTT-1</td>
                        <td>K60</td>
                        <td>11/12/1995</td>
                        <td>Nữ</td>
                        <td>0920166265</td>
                    </tr>
                    <tr>
                        <td>20166329</td>
                        <td>Mai	Khánh Linh</td>
                        <td>CNTT-1</td>
                        <td>K57</td>
                        <td>21/10/1997</td>
                        <td>Nữ</td>
                        <td>0920166329</td>
                    </tr>
                    
{{--                    @forelse($data as $user)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $user['email'] }}</td>--}}
{{--                            <td>{{ $user['password_show'] }}</td>--}}
{{--                            <td>{{ $user['profile']['user_name'] }}</td>--}}
{{--                            <td>{{ ROLES[$user['role']] }}</td>--}}
{{--                            <td>{{ $user['profile']['subject'] ? SUBJECTS[$user['profile']['subject']] : "" }}</td>--}}
{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td class="text-center" colspan="5">--}}
{{--                                Không có dữ liệu--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
