@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thêm mới đề tài</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <form id="form-create-topic" action="">
                    <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6 offset-3">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Tên đề tài</span><span style="color: red">*</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14" name="name">
                                    <p class="error-message m0" data-error="name"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Bộ môn</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <select class="form-control" name="subject" id="select-subject">
                                        <option value="{{ 1 }}">{{ SUBJECTS[1] }}</option>
                                        <option value="{{ 2 }}">{{ SUBJECTS[2] }}</option>
                                        <option value="{{ 3 }}">{{ SUBJECTS[3] }}</option>
                                    </select>
                                    <p class="error-message m0" data-error="subject"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0" >
                                    <span>Mô tả</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <textarea type="text" class="form-control m5t m5b fs14" name="description"></textarea>
                                    <p class="error-message m0" data-error="description"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 m15b text-right">
                    <button id="submit-create-topic" class="btn btn-primary border-0">
                        Thêm đề tài
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/topic.js') }}"></script>
@endsection

