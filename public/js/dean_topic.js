var deanTopic = (function () {
    let modules = {};
    modules.showModalActive = function (id) {
        $('#id-topic').val(id);
        $('#show-modal-active').modal('show');
    };

    modules.showModalActive = function (idTeacherStudent) {
        $('#id-teacher-student').val(idTeacherStudent);
        $('#show-accept-topic-student').modal('show');
    };

    modules.showModalRemove = function (idTeacherStudent) {
        $('#id-teacher-student-remove').val(idTeacherStudent);
        $('#show-remove-topic-student').modal('show');
    };
    return modules;
}(window.jQuery, window, document));

$(document).ready(function () {
    $('.btn-topic-active').on('click', function () {
        console.log(this.dataset.id)
        deanTopic.showModalActive(this.dataset.id);
    });

    $('.btn-accept-topic-student').on('click', function () {
        deanTopic.showModalActive(this.dataset.id);
    });

    $('.btn-remove-topic-student').on('click', function () {
        deanTopic.showModalRemove(this.dataset.id);
    })
});
