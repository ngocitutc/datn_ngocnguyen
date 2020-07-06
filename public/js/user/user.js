var createUser = (function () {
    let modules = {};

    modules.createUser = function () {
        var formdata = new FormData($('#form-create-user')[0]);
        formdata.append("_token", $('meta[name="csrf-token"]').attr('content'));
        var submitAjax = $.ajax({
            type: "POST",
            url: '/user/store',
            data: formdata,
            processData: false,
            contentType: false
        });
        submitAjax.done(function (response) {

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
   $('input[name=email]').on('change', function () {
       $('input[name=user_code]').val($(this).val());
   });

    $('select[name=role]').on('change', function () {
        console.log(1111, $(this).val());
        switch ($(this).val()) {
            case '1':
                $('#select-role-code').html('Mã lãnh đạo khoa');
                $('#select-role-name').html('Tên lãnh đạo khoa');
                break;
            case '2':
                $('#select-role-code').html('Mã giảng viên');
                $('#select-role-name').html('Tên giảng viên');
                break;
            case '3':
                $('#select-role-code').html('Mã sinh viên');
                $('#select-role-name').html('Tên sinh viên');
                break;
        }
    });

    $('#submit-create-user').on('click', function () {
        createUser.createUser();
    })
});