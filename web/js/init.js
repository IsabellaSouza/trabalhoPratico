(function ($) {

    $(function () {

        $('.sidenav').sidenav();

    }); // end of document ready


    //FUNÇÃO PARA DATAPICKER
    $(document).ready(function () {
        $('.datepicker').datepicker();
    });

    //FUNÇÃO PARA TIMEPICKER
    $(document).ready(function () {
        $('.timepicker').timepicker();
    });

    $(document).ready(function () {
        $('select').formSelect();
    });
    $(document).ready(function () {
        $('.modal').modal();
    });




})(jQuery); // end of jQuery name space

