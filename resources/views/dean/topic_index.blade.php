@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="justify-content-center" style="padding: 45px 60px 60px 60px;">
            @include('layouts/notification')
            <div class="row">
                <div class="col-6 m15b">
                    <h3>Phê duyệt đề tài</h3>
                </div>
            </div>

            <div class="content-wrapper" style="background-color: white;">
                <table class="table table-bordered table-striped border-0 m0">
                    <thead>
                    <tr>
                        <td>Tên đề tài</td>
                        <td>Người tạo</td>
                        <td>Chức vụ</td>
                        <td>Ngày tạo</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['user_created']['profile']['user_name'] }}</td>
                            <td>{{ ROLES[$item['user_created']['role']] }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>
                            <td>
                                <a href="" class="btn btn-primary border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Chi tiết đề tài"><i class="fas fas fa-eye"></i></a>
                                <button class="btn btn-success border-0 btn-topic-custom btn-topic-active" data-id="{{ $item['id'] }}" data-toggle="tooltip" data-placement="top" title="Duyệt đề tài"><i class="fas fa-check"></i></button>
                                <button class="btn btn-danger border-0 btn-topic-custom" data-toggle="tooltip" data-placement="top" title="Huỷ đề tài"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.modal')
@endsection
@section('js')
    <script src="{{ asset('js/dean_topic.js') }}"></script>
@endsection
