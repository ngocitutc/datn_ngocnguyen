@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thông tin đề tài</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-topic" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Tên đề tài</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="name" value="{{ $data['name'] }}" readonly>
                                    <p class="error-message m0" data-error="name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Bộ môn</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="name" value="{{ SUBJECTS[$data['subject']] }}" readonly>
                                    <p class="error-message m0" data-error="subject"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Người tạo</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="name" value="{{ $data['user_created']['profile']['user_name'] }}" readonly>
                                    <p class="error-message m0" data-error="subject"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
{{--                            <div class="row">--}}
{{--                                <div class="col-12 form-control col-xl-4 border-0" >--}}
{{--                                    <span>Số sinh viên đăng ký</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-xl-8">--}}
{{--                                    <input type="text" class="form-control m5t m5b fs14" name="name" value="1000" readonly>--}}
{{--                                    <p class="error-message m0" data-error="subject"></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Ngày tạo</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="name" value="{{ date('d/m/Y', strtotime($data['created_at'])) }}" readonly>
                                    <p class="error-message m0" data-error="subject"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mô tả</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <textarea rows="5" type="text" class="form-control m5t m5b fs14" name="description" readonly>{{ $data['description'] }}</textarea>
                                    <p class="error-message m0" data-error="description"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 m15b text-right">
                    <a class="btn btn-primary border-0" href="{{ route(STUDENT_TOPIC) }}">Về trang đinh hướng đề tài</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/topic.js') }}"></script>
@endsection

