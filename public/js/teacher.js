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

    modules.rateProject = function (id) {
        var formdata = new FormData($('#form-rate-project')[0]);
        formdata.append("_token", $('meta[name="csrf-token"]').attr('content'));
        var submitAjax = $.ajax({
            type: "POST",
            url: '/teacher/project/rate',
            data: formdata,
            processData: false,
            contentType: false
        });
        submitAjax.done(function (response) {
            if (response.save == true) {
                window.location.href = window.location.origin + '/teacher/student';
            } else {
                window.location.reload();
            }
        });
        submitAjax.fail(function (response) {
            let messageList = response.responseJSON.errors;
            modules.showMessageValidate(messageList);
        });
    };

    modules.showMessageValidate = function (messageList) {
        $('body').find('p.error-message').text('');
        $("body").find('input').removeClass('input-error');
        $("body").find('select').parent().removeClass('input-error');
        $("body").find('textarea').parent().removeClass('input-error');
        $.each(messageList, function (key, value) {
            $('p.error-message[data-error=' + key + ']').text(value).css('padding-top', 4).show();
            $('input[name=' + key + ']').addClass('input-error');
            $('select[name=' + key + ']').parent().addClass('input-error');
            $('textarea[name=' + key + ']').addClass('input-error');
        });
        $('html, body').animate({
            scrollTop: (
                $(document).find('p.error-message[data-error=' + Object.keys(messageList)[0] + ']').offset().top - 300
            )
        }, 0);
    };

    modules.showProcessProject = function (id) {
        window.location.href = '/teacher/student/process-project-student/' + id;
    };

    modules.showFormRateProcessProject = function (id) {
        $('#id-teacher-student').val(id);
        $('#modal-process-project-student').modal('show');
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
    $('#submit-rate-project').on('click', function () {
        teacher.rateProject();
    });
    $('.btn-process-project-student').on('click', function () {
        teacher.showProcessProject(this.dataset.id);
    });
    $('.btn-rate-process-project-student').on('click', function () {
        teacher.showFormRateProcessProject(this.dataset.id);
    });
});
