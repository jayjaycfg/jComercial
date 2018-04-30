+function ($) {

    $(document).ready(function() {
        $('.js-dropdown-toggle').on('click',function (e) {
            e.preventDefault();
            $(this).dropdown();
        })
    });

}(jQuery);
