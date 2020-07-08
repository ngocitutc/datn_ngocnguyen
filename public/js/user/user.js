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
            if (response.save == true) {
                window.location.href = window.location.origin + '/user';
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
   $('input[name=email]').on('change', function () {
       $('input[name=user_code]').val($(this).val());
   });

    $('select[name=role]').on('change', function () {
        switch ($(this).val()) {
            case '1':
                $('#subject').show();
                $('#select-role-code').html('Mã lãnh đạo khoa<span style="color: red">*</span>');
                $('#select-role-name').html('Tên lãnh đạo khoa<span style="color: red">*</span>');
                break;
            case '2':
                $('#subject').show();
                $('#select-role-code').html('Mã giảng viên<span style="color: red">*</span>');
                $('#select-role-name').html('Tên giảng viên<span style="color: red">*</span>');
                break;
            case '3':
                $('#subject').hide();
                $('#select-role-code').html('Mã sinh viên<span style="color: red">*</span>');
                $('#select-role-name').html('Tên sinh viên<span style="color: red">*</span>');
                break;
        }
    });

    $('#submit-create-user').on('click', function () {
        createUser.createUser();
    });

    $(document).on('submit', '#export-form', function (event) {
        event.preventDefault();
        let url = $(this).attr('action');
        $(this).attr('action', url.slice(0, url.lastIndexOf('/')) + '/' + $('#select-role').val());
        event.currentTarget.submit();
    })
});
