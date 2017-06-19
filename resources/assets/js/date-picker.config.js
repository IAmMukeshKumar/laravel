(function ($) {

    // Set default options for bootstrap datetimepicker
    // @link https://eonasdan.github.io/bootstrap-datetimepicker/

    var overrides = {
        // See http://momentjs.com/ for formats
        allowInputToggle: true,
        debug: false,
        format: 'MM/DD/YYYY hh:mm A',
        showClose: true,
        sideBySide: false,
        useCurrent: false,
    };

    $.extend(true, $.fn.datetimepicker.defaults, overrides);

})(jQuery);
