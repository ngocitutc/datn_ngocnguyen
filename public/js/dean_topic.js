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

    modules.createSemester = function () {
        var formdata = new FormData($('#form-semester')[0]);
        formdata.append("_token", $('meta[name="csrf-token"]').attr('content'));
        var submitAjax = $.ajax({
            type: "POST",
            url: '/dean/semester',
            data: formdata,
            processData: false,
            contentType: false
        });
        submitAjax.done(function (response) {
            if (response.save == true) {
                window.location.reload();
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
    });

    $('#submit-create-semester').on('click', function () {
        deanTopic.createSemester();
    });
});
