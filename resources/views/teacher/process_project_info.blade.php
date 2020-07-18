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
                <div class="row form-group m-0 d-flex p20">
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Tên đề tài</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->topic->name ?? "Chưa có đề tài" }}" readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Tên sinh viên</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->profile->user_name }}" readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <div id="select-role-code">Lớp</div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <input type="text" class="form-control m5t m5b fs14"
                                           value="{{ $teacherStudent->student->profile->class }}" readonly>
                                    <p class="error-message m0" data-error=""></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row">
                                <div class="col-12 form-control col-xl-4 border-0">
                                    <span>Đánh giá của giảng viên</span>
                                </div>
                                <div class="col-12 col-xl-8">
                                                <textarea readonly type="text" class="form-control m5t m5b fs14"
                                                          rows="6">{{ $teacherStudent->status_topic == STATUS_TOPIC_DONE ? $teacherStudent->rate_note : "Chưa có đánh giá" }}</textarea>
                                    <p class="error-message m0" data-error="address"></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-6 m15b">
                    <h3>Tiến độ đã báo cáo</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td class="text-center font-weight-bold" style="width: 15%">Tiêu đề</td>
                        <td class="text-center font-weight-bold" style="width: 25%">Nội dung</td>
                        <td class="text-center font-weight-bold" style="width: 10%">Link file đính kèm</td>
                        <td class="text-center font-weight-bold" style="width: 20%">Ghi chú thêm</td>
                        <td class="text-center font-weight-bold" style="width: 5%">Ngày tạo</td>
                        <td class="text-center font-weight-bold" style="width: 25%">Nhận xét</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($processProject as $item)
                        <tr>
                            <td>{{ $item['title'] }}</td>
                            <td style="padding: 0!important;">
                                <textarea class="form-control" style="width: 100%;" class="border-0" rows="5"
                                          readonly>{{ $item['content'] }}</textarea>
                            </td>
                            <td>
                                <a href="{{ $item['link_file'] }}"> Truy cập link </a>
                            </td>
                            <td style="padding: 0!important;">
                                <textarea class="form-control" style="width: 100%;" class="border-0" rows="5"
                                          readonly>{{ $item['note'] }}</textarea>
                            </td>
                            <td>{{ date('d/m/Y', strtotime($item['created_at'] ))}}</td>
                            <td style="padding: 0!important;">
                                 <textarea class="form-control" style="width: 100%;" class="border-0" rows="5"
                                           readonly>{{ $item['note_by_teacher'] ?? " Chưa có nhận xét từ giảng viên" }}</textarea>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary border-0 btn-rate-process-project-student" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Nhận xét"><i class="fas fa-star-half-alt"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="7">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.modal_process_project_student')
@endsection

@section('js')
    <script src="{{ asset('js/teacher.js') }}"></script>
@endsection

