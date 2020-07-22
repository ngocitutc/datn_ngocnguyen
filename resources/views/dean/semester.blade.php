@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Quản lý đợt đăng ký</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-semester" action="">
                    <input name="user_created_id" type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Kỳ học</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <select class="form-control" name="period" id="select-role">
                                        <option value="1">Kỳ 1</option>
                                        <option value="2">Kỳ 2</option>
                                    </select>
                                    <p class="error-message m0" data-error="period"></p>
                                </div>
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Năm học</span>
                                </div>
                                @php
                                $year = date('Y');
                                @endphp
                                <div class="col-12 col-xl-4">
                                    <select class="form-control" name="period_year" id="select-role">
                                        <option value="{{ $year + 2 }}">{{ $year + 2 }}</option>
                                        <option value="{{ $year + 1 }}">{{ $year + 1 }}</option>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                        <option value="{{ $year - 1 }}">{{ $year - 1 }}</option>
                                        <option value="{{ $year - 2 }}">{{ $year - 2 }}</option>
                                    </select>
                                    <p class="error-message m0" data-error="period_year"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Bắt đầu</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <input type="date" class="form-control m5t m5b fs14" name="date_start">
                                    <p class="error-message m0" data-error="date_start"></p>
                                </div>
                                <div class="col-12 form-control col-xl-2 border-0" >
                                    <span>Kết thúc</span>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <input type="date" class="form-control m5t m5b fs14" name="date_end">
                                    <p class="error-message m0" data-error="date_end"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-3 border-0" >
                                    <span>Số sinh viên</span>
                                </div>
                                <div class="col-12 col-xl-9">
                                    <input type="number" class="form-control m5t m5b fs14" name="sum_student" placeholder="Số sinh viên tối đa hướng dẫn (Mặc định : 10 sinh viên)">
                                    <p class="error-message m0" data-error="sum_student"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-3 border-0" >
                                    <span>Ghi chú</span>
                                </div>
                                <div class="col-12 col-xl-9">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="note" rows="4"></textarea>
                                    <p class="error-message m0" data-error="note"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">

                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-create-semester" class="btn btn-primary border-0">
                        Áp dụng
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/dean_topic.js') }}"></script>
@endsection

