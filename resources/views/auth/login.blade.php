@extends('layouts.login-base')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
@endsection
@section('title', 'Đăng nhập')
@section('content')
    <main class="login-form">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-md-5 custom-center">
                    @include('layouts/notification')
                    <div class="card">
                        <div class="card-header">Đăng nhập</div>
                        <div class="card-body">
                            <form action="{{ route(LOGIN) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Tên đăng nhập</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email"
                                                autofocus required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4 m10b">
                                    <a href="{{ route(FORGOT_PASSWORD_INDEX) }}" class="m10b">
                                        Quên mật khẩu ?
                                    </a>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng nhập
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
