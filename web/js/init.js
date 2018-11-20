(function ($) {

    $(function () {
        $('#save-button').click(function () {
            $('#formVeiculo').submit();
        });
        $('#edit-button').click(function () {

        });

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
    $(document).ready(function () {
        $('.slider').slider();
    });
    $('.linhas').click(function () {
        $('#idVeiculo').val($(this).find(":nth-child(1)").html());
        $('#nome').val($(this).find(":nth-child(2)").html());
        $('#placa').val($(this).find(":nth-child(3)").html());
        $('#marca').val($(this).find(":nth-child(4)").html());
        $('#modelo').val($(this).find(":nth-child(5)").html());
        $('#valorDoSeguro').val($(this).find(":nth-child(6)").html());
        $('#valorDaLocacao').val($(this).find(":nth-child(7)").html());
        $('#cor').val($(this).find(":nth-child(8)").html());
        $('#ativo').val($(this).find(":nth-child(9)").html());
        document.getElementById("save-button").disabled = true;
        document.getElementById("edit-button").disabled = false;

    });


})(jQuery); // end of jQuery name space

