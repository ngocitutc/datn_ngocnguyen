var teacher = (function () {
    let modules = {};
    modules.showModalAccept = function (id) {
        $('#id-record').val(id);
        $('#modal-accept-student').modal('show');
    };

    modules.showModalAcceptTopic = function (id) {
        $('#id-record-teacher-student').val(id);
        $('#teacher-accept-topic').modal('show');
    };

    modules.showModalRemoveTopic = function (id) {
        $('#id-record-teacher-student-remove').val(id);
        $('#teacher-remove-topic').modal('show');
    };

    return modules;
}(window.jQuery, window, document));

$(document).ready(function () {
    $('.btn-accept-student').on('click', function () {
        teacher.showModalAccept(this.dataset.id);
    });

    $('.teacher-accept-topic-student').on('click', function () {
        teacher.showModalAcceptTopic(this.dataset.id);
    });
    $('.teacher-remove-topic-student').on('click', function () {
        teacher.showModalRemoveTopic(this.dataset.id);
    });
});
