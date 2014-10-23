$(function () {    

    //BEGIN PLUGINS DATE PICKER
    $('.datepicker-default').datepicker();
    $('.datepicker-years').datepicker({
        startView: 1,
        minViewMode: 2
    });
    $('.input-daterange').datepicker({
        format: "dd-mm-yyyy"
    });
    $('.datepicker-inline').datepicker({
        format: "dd-mm-yyyy",
        startView: 2,
        minViewMode: 1
    });
    //END PLUGINS DATE PICKER

    //BEGIN PLUGINS DATETIME PICKER
    $('.datetimepicker-default').datetimepicker(
            {
                format: "YYYY-MM-DD HH:mm"
            }
            );
    
    $('.datetimepicker-disable-date').datetimepicker({
        pickDate: false
    });
    $('.datetimepicker-disable-time').datetimepicker({
        pickTime: false
    });
    $('.datetimepicker-start').datetimepicker();
    $('.datetimepicker-end').datetimepicker();
    $('.datetimepicker-start').on("change.dp",function (e) {
        $('.datetimepicker-end').data("DateTimePicker").setStartDate(e.date);
    });
    $('.datetimepicker-end').on("change.dp",function (e) {
        $('.datetimepicker-start').data("DateTimePicker").setEndDate(e.date);
    });
    //END PLUGINS DATETIME PICKER

    
});
