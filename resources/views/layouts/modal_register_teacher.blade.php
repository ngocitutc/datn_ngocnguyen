<div class="modal fade" id="modal-register_teacher" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route(STUDENT_TEACHER_REGISTER) }}" method="POST" class="form-data-submit">
            @csrf
            <input id="id-student" name="student_id" type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
            <input id="id-teacher" name="teacher_id" type="hidden" value="">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận đăng ký giảng viên hướng dẫn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Đăng ký</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Đóng</button>
            </div>
        </div>
        </form>
    </div>
</div>
