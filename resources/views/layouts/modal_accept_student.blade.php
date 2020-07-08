<div class="modal fade" id="modal-accept-student" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route(TEACHER_STUDENT_ACCEPT_OFFER) }}" method="POST" class="form-data-submit">
            @csrf
            <input id="id-record" name="id" type="hidden" value="">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận nhận hướng dẫn sinh viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Hoàn tất</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Đóng</button>
            </div>
        </div>
        </form>
    </div>
</div>
