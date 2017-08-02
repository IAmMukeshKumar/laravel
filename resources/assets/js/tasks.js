(function ($) {
    'use strict';
    // Create task form

    var $form = $('form#create-task-form');

    var $startDate = $form.find('#task-start-date');
    var $endDate = $form.find('#task-end-date');

    $startDate.datetimepicker({
        //minDate: moment().startOf('day')
    });

    $endDate.datetimepicker({});

    $startDate.on('dp.change', function (e) {
        $endDate.data('DateTimePicker').minDate(e.date);
    });

    $endDate.on('dp.change', function (e) {
        $startDate.data('DateTimePicker').maxDate(e.date);
    });
    
    $('#delete-task-modal').on('show.bs.modal', function (e) {
        var $confirmForm = $(this).find('form').first();
        $confirmForm.attr('action', $confirmForm.data('action') + $(e.relatedTarget).data('id'));
    });

})(jQuery);
