@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Thông tin đồ án</h3>
                </div>
            </div>

            <div class="content-wrapper m15b" style="background-color: white;">
                @if(isset($teacherStudent))
                    @if($teacherStudent->topic_id != null)
                        @if($teacherStudent->status_topic == STATUS_TOPIC_DOING || $teacherStudent->status_topic == STATUS_TOPIC_DONE )
                            @php
                                $project = $teacherStudent->project
                            @endphp
                            <form id="form-create-user" action="">
                                <div class="row form-group m-0 d-flex p20">
                                    <div class="col-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-code">Tên đề tài</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ $teacherStudent->topic->name }}" readonly>
                                                <p class="error-message m0" data-error=""></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Ngày báo cáo</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ isset($project) ? date('d/m/Y', strtotime($project['created_at'])) : "Chưa báo cáo đồ án" }}"
                                                       readonly>
                                                <p class="error-message m0" data-error=""></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Ngôn ngữ lập trình</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ isset($project) ? $project['program_lan'] : "Chưa báo cáo đồ án" }}"
                                                       readonly>
                                                <p class="error-message m0" data-error=""></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Công cụ</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ isset($project) ? $project['program_tool'] : "Chưa báo cáo đồ án" }}"
                                                       readonly>
                                                <p class="error-message m0" data-error=""></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Đường dẫn file báo cáo</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <a type="text" class="form-control m5t m5b fs14 border-0"
                                                   style="color: blue"
                                                   href="{{ isset($project) ? $project['link_word'] : "#" }}">
                                                    {{ isset($project) ? $project['link_word'] : "Chưa báo cáo đồ án" }}
                                                </a>
                                                <p class="error-message m0" data-error="user_name"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-name">Đường dẫn source code</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <a type="text" class="form-control m5t m5b fs14 border-0"
                                                   style="color: blue"
                                                   href="{{ isset($project) ? $project['link_code'] : "#" }}">
                                                    {{ isset($project) ? $project['link_code'] : "Chưa báo cáo đồ án" }}</a>
                                                <p class="error-message m0" data-error="user_name"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <span>Mô tả</span>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <textarea type="text" class="form-control m5t m5b fs14" rows="4"
                                                          readonly>{{ isset($project) ? $project['description'] : "Chưa báo cáo đồ án" }}</textarea>
                                                <p class="error-message m0" data-error="address"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-12 form-control col-xl-4 border-0">
                                                <div id="select-role-code">Trạng thái</div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <input type="text" class="form-control m5t m5b fs14"
                                                       value="{{ STATUS_TOPIC_TEXT[$teacherStudent->status_topic] }}"
                                                       readonly>
                                                <p class="error-message m0" data-error="user_code"></p>
                                            </div>
                                        </div>
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
                            </form>
                        @else
                            <div style="min-height: 400px">
                                <div class="text-center"
                                     style="font-size: 28px; padding-top: 50px; margin-bottom: 25px">
                                    Liên hệ với giảng viên hướng dẫn để xác nhận đề tài
                                </div>
                                <div class="text-center" style="font-size: 22px; margin-bottom: 25px; padding-bottom: 25px">
                                    Thông tin giảng viên hướng dẫn
                                </div>
                                <div class="col-6 offset-3">
                                    @php
                                        $data = $teacherStudent->teacher->load('profile')->toArray();
                                    @endphp
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-code">Tên giảng viên</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_code" value="{{ $data['profile']['user_name'] }}" readonly>
                                            <p class="error-message m0" data-error="user_code"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-name">Bộ môn</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ SUBJECTS[$data['profile']['subject']] }}" readonly>
                                            <p class="error-message m0" data-error="user_name"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-name">Trình độ</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['level'] }}" readonly>
                                            <p class="error-message m0" data-error="user_name"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-name">Số điện thoại</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['phone_number'] }}" readonly>
                                            <p class="error-message m0" data-error="user_name"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-name">Địa chỉ</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['address'] }}" readonly>
                                            <p class="error-message m0" data-error="user_name"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <div id="select-role-name">Email</div>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="user_name" value="{{ $data['profile']['user_email'] }}" readonly>
                                            <p class="error-message m0" data-error="user_name"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                Bạn chưa đăng ký đề tài
                            </div>
                            <div class="col-12 text-center" style="justify-content: center">
                                <a href="{{ route(STUDENT_REGISTER_TOPIC) }}" class="btn btn-primary border-0">
                                    Đăng ký đề tài
                                </a>
                            </div>
                        </div>
                    @endif
                @else
                    <div style="min-height: 400px">
                        <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                            Bạn chưa đăng ký giảng viên hướng dẫn
                        </div>
                        <div class="col-12 text-center" style="justify-content: center">
                            <a href="{{ route(STUDENT_TEACHER) }}" class="btn btn-primary border-0">
                                Đăng ký giảng viên hướng dẫn
                            </a>
                        </div>
                    </div>
                @endif
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
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection

