<div class="modal fade" id="show-modal-active" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="form-delete-sub-user" action="{{ route(DEAN_TOPIC_ACTIVE) }}" method="POST" class="form-data-submit">
            @csrf
            <input id="id-topic" name="id" type="hidden" value="">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận duyệt đề tài này</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row" style="padding: 20px">
                <div style="padding: 10px">Nhận xét</div>
                <textarea name="note" rows="10" style="width: 100%"></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Duyệt</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Đóng</button>
            </div>
        </div>
        </form>
    </div>
</div>
