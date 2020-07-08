var student = (function () {
    let modules = {};
    modules.showModalRegisterTeacher = function (idTeacher) {
        $('#id-teacher').val(idTeacher);
        $('#modal-register_teacher').modal('show');
    };

    modules.showModalRegisterTopic = function (idTopic) {
        $('#id-topic').val(idTopic);
        $('#register_topic').modal('show');
    };

    return modules;
}(window.jQuery, window, document));

$(document).ready(function () {
    $('.btn-register-teacher').on('click', function () {
        student.showModalRegisterTeacher(this.dataset.id);
    });

    $('.register-topic').on('click', function () {
        student.showModalRegisterTopic(this.dataset.id);
    })
});
