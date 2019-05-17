$(document).ready(function () {
    var array = $('#my-timeline').data('duration');
    $('#my-timeline').roadmap(array);
});
$(document).ready(function () {
    var current_phase = $('#current_phase').val();
    var days_left = $('#days_left').val();
    if (current_phase == '') {
        $('#my-timeline').css('color', 'red');
    } else {
        current_phase = parseInt(current_phase) + 1;
        $('.roadmap__events__event:nth-child(' + current_phase + ')').css('color', 'red');
    }
});
