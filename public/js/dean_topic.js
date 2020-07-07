var deanTopic = (function () {
    let modules = {};
    modules.showModalActive = function (id) {
        $('#id-topic').val(id);
        $('#show-modal-active').modal('show');
    };
    return modules;
}(window.jQuery, window, document));

$(document).ready(function () {
    $('.btn-topic-active').on('click', function () {
        console.log(this.dataset.id)
        deanTopic.showModalActive(this.dataset.id);
    })
});
