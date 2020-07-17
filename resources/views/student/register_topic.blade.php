@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Đăng ký đề tài</h3>
                </div>
                @if(isset($teacherStudent) && $teacherStudent->status == STATUS_STEP_LEANING && $teacherStudent->topic_id == null)
                <div class="col-6 m15b text-right">
                    <button class="btn btn-primary border-0">
                        Đề xuất đề tài
                    </button>
                </div>
                @endif
            </div>

            <div class="content-wrapper" style="background-color: white;">
                @if(isset($teacherStudent))
                    @if($teacherStudent->status == STATUS_STEP_WAITING)
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 25px">
                                Liên hệ với giảng viên hướng dẫn để xác nhận đề tài
                            </div>
                            <div class="text-center" style="font-size: 25px; margin-bottom: 25px; padding-bottom: 25px">
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
                    @elseif($teacherStudent->status == STATUS_STEP_LEANING && $teacherStudent->topic_id)
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 25px">
                                Bạn đã đăng ký đề tài
                            </div>
                            <div class="text-center" style="font-size: 22px; margin-bottom: 25px">
                                {{ STATUS_TOPIC_TEXT[$teacherStudent->status_topic] }}
                            </div>
                            <div class=" row col-12 text-center" style="justify-content: center">
                                @php
                                $data = $teacherStudent->topic->load('userCreated.profile')->toArray();
                                @endphp
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
                                            <textarea type="text" class="form-control m5t m5b fs14" name="description" readonly>{{ $data['description'] }}</textarea>
                                            <p class="error-message m0" data-error="description"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 form-control col-xl-4 border-0" >
                                            <span>Số sinh viên đăng ký</span>
                                        </div>
                                        <div class="col-12 col-xl-8">
                                            <input type="text" class="form-control m5t m5b fs14" name="name" value="1000" readonly>
                                            <p class="error-message m0" data-error="subject"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($teacherStudent->status == STATUS_TOPIC_DONE && $teacherStudent->topic_id)
                        <div style="min-height: 400px">
                            <div class="text-center" style="font-size: 28px; padding-top: 50px; margin-bottom: 50px">
                                Giảng viên đã đánh giá đề tài của bạn
                            </div>
                            <div class="col-12 text-center" style="justify-content: center">
                                <a href="{{ route(STUDENT_PROJECT_INFO) }}" class="btn btn-primary border-0">
                                    Xem thông tin đồ án
                                </a>
                            </div>
                        </div>
                    @else
                    <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Bộ môn</td>
                        <td>Ngày bắt đầu</td>
                        <td>Hạn báo cáo</td>
                        <td>Kỳ học</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ SUBJECTS[$item['subject']] }}</td>
                            <td>01/01/2020</td>
                            <td>01/06/2020</td>
                            <td>Kỳ 2 / Năm 2020</td>
                            <td class="text-center">
                                <a href="{{ route(STUDENT_TOPIC_INFO, $item['id']) }}" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fas fa-eye"></i></a>
                                <button class="btn btn-success border-0 btn-topic-custom register-topic" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Đăng ký"><i class="far fa-registered"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
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
        </div>
    </div>
    @include('layouts.modal_register_topic')
@endsection

@section('js')
    <script src="{{ asset('js/student.js') }}"></script>
@endsection
