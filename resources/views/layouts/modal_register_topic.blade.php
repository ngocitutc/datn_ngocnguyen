<div class="modal fade" id="register_topic" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route(STUDENT_REGISTER_TOPIC_STORE) }}" method="POST" class="form-data-submit">
            @csrf
            <input id="id-topic" name="id_topic" type="hidden" value="">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận đăng ký đề tài này</h5>
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
