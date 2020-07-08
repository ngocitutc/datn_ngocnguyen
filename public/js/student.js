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

    modules.createProject = function () {
        var formdata = new FormData($('#form-project-add')[0]);
        formdata.append("_token", $('meta[name="csrf-token"]').attr('content'));
        var submitAjax = $.ajax({
            type: "POST",
            url: '/student/project/store',
            data: formdata,
            processData: false,
            contentType: false
        });
        submitAjax.done(function (response) {
            window.location.reload();
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
        $.each(messageList, function (key, value) {
            $('p.error-message[data-error=' + key + ']').text(value).css('padding-top', 4).show();
            $('input[name=' + key + ']').addClass('input-error');
            $('select[name=' + key + ']').parent().addClass('input-error');
        });
        $('html, body').animate({
            scrollTop: (
                $(document).find('p.error-message[data-error=' + Object.keys(messageList)[0] + ']').offset().top - 300
            )
        }, 0);
    };

    return modules;
}(window.jQuery, window, document));

$(document).ready(function () {
    $('.btn-register-teacher').on('click', function () {
        student.showModalRegisterTeacher(this.dataset.id);
    });

    $('.register-topic').on('click', function () {
        student.showModalRegisterTopic(this.dataset.id);
    });

    $('#submit-project-add').on('click', function () {
        student.createProject();
    });
});
