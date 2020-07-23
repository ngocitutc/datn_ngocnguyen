@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Danh sách đồ án sinh viên</h3>
                </div>

                <div class="col-6 m15b text-right ml-auto" style="display: inline-flex; justify-content: flex-end;">
                    <form action="{{ route(USER_LIST_PROJECT_STUDENT) }}" method="GET" id="">
                        <div class="row m0">
                            <div class="m10r">
                                <input type="text" class="form-control m10r" value="{{ request()->ma_sv ?? '' }}" name="ma_sv" placeholder="Mã sinh viên">
                            </div>

                            <button type="submit" class="btn btn-primary border-0 text-white m10r" id="export-file" style="min-width: 100px">
                                Lọc
                            </button>
                        </div>

    {{--                    <div class="m10r">--}}
    {{--                        <select class="form-control" name="role" id="select-role">--}}
    {{--                            <option value="{{ STUDENT }}">Tất cả trạng thái</option>--}}
    {{--                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[0] }}</option>--}}
    {{--                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[1] }}</option>--}}
    {{--                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[2] }}</option>--}}
    {{--                            <option value="{{ STUDENT }}">{{ STATUS_STEP_TEXT[3] }}</option>--}}
    {{--                        </select>--}}
    {{--                    </div>--}}

                    </form>
{{--                    <form action="" method="GET" id="">--}}
{{--                        <button class="btn btn-warning border-0 text-white" id="export-file">--}}
{{--                            In danh sách--}}
{{--                        </button>--}}
{{--                    </form>--}}
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white; overflow-x: auto">
                <table class="table table-bordered table-striped border-0 m0" style="min-width: 1300px;">
                    <thead>
                    <tr>
                        <td>Mã giảng viên</td>
                        <td>Tên giảng viên</td>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td class="td-table-teacher">Đề tài</td>
                        <td class="td-table-teacher">Link báo cáo</td>
                        <td class="td-table-teacher">Link source code</td>
                        <td>Trạng thái</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as  $data)
                        <tr>
                            <td>{{ $data['teacher']['email'] }}</td>
                            <td>{{ $data['teacher']['profile']['user_name'] }}</td>
                            <td>{{ $data['student']['email'] }}</td>
                            <td>{{ $data['student']['profile']['user_name'] }}</td>
                            <td class="td-table-teacher">{{ $data['topic']['name'] }}</td>
                            <td class="td-table-teacher"><a href="{{ $data['project']['link_word'] }}">{{ $data['project']['link_word'] }}</a></td>
                            <td class="td-table-teacher"><a href="{{ $data['project']['link_code'] }}">{{ $data['project']['link_code'] }}</a></td>
                            <td>{{ STATUS_TOPIC_TEXT[$data['status_topic'] ?? '1'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
