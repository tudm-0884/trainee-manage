$(document).ready(function () {
    var unread = $('.noti').text();
    if (unread == '0') {
        $('.noti').hide();
    }
    var current_user_id = $('#current_user_id').val();
    var token = $('input[name=_token]').val();
    $('.dropdown-notification').click(function () {
        $.ajax({
            url	: '/mark_as_read',
            method : 'POST',
            data: {
                'current_user_id' : current_user_id,
                '_token': token,
            },
            success: function () {
                $('.noti').hide();
            }
        })
    })
});
