$(document).ready(function() {
    $('#txthdnPassword').hide();
    $('#txthdnPassword').attr('readonly','readonly');
    $('#txtPassword').blur(function() {
        $('#txthdnPassword').val($(this).val());
    });

    $('#chkShow').change(function() {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            $('#txtPassword').hide();
            $('#txthdnPassword').show();
        }
        else {
            $('#txtPassword').show();
            $('#txthdnPassword').hide();
        }
    });
});