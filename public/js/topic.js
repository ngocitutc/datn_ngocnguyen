var createTopic = (function () {
    let modules = {};

    modules.createTopic = function () {
        var formdata = new FormData($('#form-create-topic')[0]);
        formdata.append("_token", $('meta[name="csrf-token"]').attr('content'));
        var submitAjax = $.ajax({
            type: "POST",
            url: '/teacher/topic/store',
            data: formdata,
            processData: false,
            contentType: false
        });
        submitAjax.done(function (response) {
            if (response.save == true) {
                window.location.href = '/teacher/topic';
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
    $('#submit-create-topic').on('click', function () {
        createTopic.createTopic();
    })
});
