@extends('layouts.login-base')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
@endsection
@section('title', 'Quên mật khẩu')
@section('content')
    <main class="reset-password-form">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-md-5 custom-center">
                    <div class="card border-0" style="background-color: #f0f1f2;">
                        <div class="card-header border-bottom-0 text-info text-center font-weight-bold" style="font-size: 20px; background-color: #f0f1f2; margin-top: 40px;">
                            QUÊN MẬT KHẨU
                        </div>
                        <div class="card-body" style="padding: 30px 40px 60px 40px">
                            <div class="content-card bg-light w-100 h-100" style="padding: 20px 20px">
                                <label for="email_address" class="col-md-12 col-form-label text-secondary text-center">Vui lòng nhập email</label>
                                <form>
                                    @csrf
                                    <div class="form-group row" style="margin-top: 20px">
                                        <div class="col-10 offset-1 position-relative">
                                            <input type="text" id="email" class="form-control" name="email" placeholder="Email" autofocus>
                                            <i class="fas fa-user position-absolute" style="top: 30%; right: 7%; color: #7d7b7b;"></i>
                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 p-0" style="margin-top: 25px">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Gửi email reset lại mật khẩu
                                        </button>
                                    </div>
                                    <div class="col-10 offset-1 p-0" style="margin-top: 30px">
                                        <a href="{{ route(SHOW_LOGIN) }}"><i class="fas fa-chevron-left" style="margin-right: 7px; font-size: 12px"></i>Quay lại</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection