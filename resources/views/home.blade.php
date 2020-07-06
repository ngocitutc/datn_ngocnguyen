@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
        <div class="row">
            <div class="col-6 m15b">
                <h3>Quản lý tài khoản</h3>
            </div>
            <div class="col-6 m15b text-right">
                <a href="{{ route(USER_CREATE) }}" class="btn btn-primary">
                    Thêm tài khoản
                </a>
            </div>
        </div>

        <div class="content-wrapper" style="background-color: white;">
            <table class="table table-bordered table-striped border-0 m0">
                <thead>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td>Mật khẩu</td>
                    <td>Email</td>
                    <td>Quyền</td>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>

                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr><tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                <tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr><tr>
                    <td>ngocnguyen123</td>
                    <td>123456789</td>
                    <td>ngocnt@deha-soft.com</td>
                    <td>Sinh viên</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
