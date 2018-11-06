
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
        <?php
        require_once('./nav.php');
        ?>

        <!--FIM DA BARRA DE NAVEGAÇÃO PADRÃO-->
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header left orange-text">Aluguel de Carros</h1>
                <div class="row LEFT">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>

                <br><br>

                <!--FORMULARIO DE BUSCA DE VEICULOS-->
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="material-icons prefix">location_on</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Local</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="dataDeLocacao" type="text" class="datepicker">
                                <label for="dataDeLocacao">Data de Locação</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="horaLocacao"type="text" class="timepicker">
                                <label for="horaLocacao">Hora da Locação</label>
                            </div>

                        </div>
                        <!-- Modal Trigger -->
                        <button data-target="modal1" class="btn modal-trigger orange">Buscar</button>

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4>Escolha seu veículo</h4>
                                <div>
                                    <table class="striped highlight centered responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Valor do Aluguel</th>
                                        
                                        </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="#">0</a></td>
                                                <td><a href="#">Eclair</a></td>
                                                <td><a href="#">$0.87</a></td>
                                             
                                            </tr>
                                            <tr>
                                                <td><a href="#">1</a></td>
                                                <td><a href="#">Jellybean</a></td>
                                                <td><a href="#">$3.76</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">2</a></td>
                                                <td><a href="#">Lollipop</a></td>
                                                <td><a href="#">$7.00</a></td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceitar</a>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>




        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>


    </body>
</html>
