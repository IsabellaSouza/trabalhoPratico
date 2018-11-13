
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Locação</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <!-- BARRA DE NAVEGAÇÃO PADRÃO-->
        <?php require_once('./nav.php'); ?>
        <!--FIM DA BARRA DE NAVEGAÇÃO PADRÃO-->
         <!--SLIDER-->
                <div class="slider">
                    <ul class="slides">
                       
                        <li>
                            <img src="img/corsa.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h3>Corsa</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/gol.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h3>Gol</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/onix.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>Onix</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
        <div class="section no-pad-bot" id="index-banner">
            
            <div class="container">
                <br><br>
                <h1 class="header left orange-text">Reserva de Carros</h1>
                <div class="row LEFT">
                    <h5 class="header col s12 light">Fazer reserva do veículo</h5>
                </div>

                <br><br>
               
                <br><br>
                <!--FORMULARIO DE BUSCA DE VEICULOS-->
                
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="material-icons prefix">location_on</i>
                                <input id="local" type="text" class="validate">
                                <label for="local">Local</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="dataDeLocacao" type="text" class="datepicker">
                                <label for="dataDeLocacao">Data de retirada</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="horaLocacao"type="text" class="timepicker">
                                <label for="horaLocacao">Hora de retirada do veículo</label>
                            </div>

                        </div>
                        <!-- Modal Trigger -->
                        <button data-target="modal1" class="btn modal-trigger orange">Buscar</button>

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4>Veículos Disponíveis</h4>
                                <div>
                                    <table class="striped highlight centered responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Modelo</th>
                                                <th>Local</th>
                                                <th>Valor diária</th>
                                                <th>Placa</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="#">0</a></td>
                                                <td><a href="#">Gol</a></td>
                                                <td><a href="#">Locatel</a></td>
                                                <td><a href="#">$0.87</a></td>
                                                <td><a href="#">AAA-0000</a></td>

                                            </tr>
                                            <tr>
                                                <td><a href="#">1</a></td>
                                                <td><a href="#">Corsa</a></td>
                                                <td><a href="#">Locauto</a></td>
                                                <td><a href="#">$3.76</a></td>
                                                <td><a href="#">AAA-0002</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">2</a></td>
                                                <td><a href="#">Onix</a></td>
                                                <td><a href="#">Locatur</a></td>
                                                <td><a href="#">$7.00</a></td>
                                                <td><a href="#">AAA-0003</a></td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>







        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <?php
        require_once('./footer.php');
        ?>

    </body>
</html>
