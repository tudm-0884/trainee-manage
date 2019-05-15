$(document).ready ( function () {
    var new_phase_id = "";
    var new_phase_name = "";
    $(".bootstrap-duallistbox-container .box1, .bootstrap-duallistbox-container .box2 ").on('change', function () {
        var selected_phase = $('.bootstrap-duallistbox-container .box2 option');
        var all_new_phases_id = "";
        var all_new_phases_name = "";
        selected_phase.each(function () {
            new_phase_id = $(this).val();
            all_new_phases_id = all_new_phases_id + "-" + new_phase_id;
            new_phase_name = $(this).text();
            all_new_phases_name = all_new_phases_name + "-" + new_phase_name;
        });
        $('#selected_phases_id').val(all_new_phases_id);
        $('#selected_phases_name').val(all_new_phases_name);
    });
});

$(document).ready ( function () {
    var new_phase_id = "";
    var new_phase_name = "";
    $(".bootstrap-duallistbox-container .box1 .moveall, .bootstrap-duallistbox-container .box2 .removeall ").on('click', function () {
        var selected_phase = $('.bootstrap-duallistbox-container .box2 option');
        var all_new_phases_id = "";
        var all_new_phases_name = "";
        selected_phase.each(function () {
            new_phase_id = $(this).val();
            all_new_phases_id = all_new_phases_id + "-" + new_phase_id;
            new_phase_name = $(this).text();
            all_new_phases_name = all_new_phases_name + "-" + new_phase_name;
        });
        $('#selected_phases_id').val(all_new_phases_id);
        $('#selected_phases_name').val(all_new_phases_name);
    });
});

$(document).ready (function () {
    $("[href='#next']").click(function () {
        var selected_phases_id = $('#selected_phases_id').val();
        var selected_phases_name = $('#selected_phases_name').val();
       if (selected_phases_id == "") {
           return false;
       } else {
           $('#step3').empty();
           var selected_phases_id_edited = selected_phases_id.replace(/^-|-$/g,'');
           var selected_phases_name_edited = selected_phases_name.replace(/^-|-$/g,'');
           selected_phases_id_edited = selected_phases_id_edited.split('-');
           selected_phases_name_edited = selected_phases_name_edited.split('-');
           for (var i = 0; i < selected_phases_id_edited.length; i++) {
               $('#step3').append("" +
                   "<div class='form-group row'>" +
                   "<label class='col-sm-4'>" + selected_phases_name_edited[i] + "</label>" +
                   "<input type='number' class='form-control col-sm-4' name='time_duration_" + i + "'>" +
                   "<span class='col-sm-4'> day(s)</span>" +
                   "<input type='hidden' name='phase_" + i + "' value='" + selected_phases_id_edited[i] + "'>" +
                   "</div>" +
                   "<br>")
           }
       }
    });
});

$(document).ready(function () {
    $("[href='#finish']").click(function () {
        $('#schedule_form').submit();
    });
});
