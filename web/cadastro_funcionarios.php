<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Cadastro de Veículo</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"></a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="#"></a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Cadastro de Funcionários</h1>
                <div class="row center">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="nome" type="text" class="validate">
                                    <label for="nome">NOME</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="rg" type="text" class="validate">
                                    <label for="rg">RG</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="cpf" type="text" class="validate">
                                    <label for="cpf">CPF</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="endereco" type="text" class="validate">
                                    <label for="endereco">ENDEREÇO</label>
                                </div>

                                <div class="input-field col s6">
                                    <input id="data_admicao" type="text" class="datepicker">
                                    <label for="data_admicao">Data de Admição</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="camp1" type="text" class="validate">
                                    <label for="camp1">camp1</label>
                                </div>

                                <div class="input-field col s6">
                                    <input id="camp2" type="text" class="validate">
                                    <label for="camp2">camp2</label>
                                </div>


                                <!-- Botao -->

                                <div class="switch">
                                    <label>
                                        Inativo
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        Ativo
                                    </label>
                                </div>








                            </div>
                            <div class="row center">
                                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Salvar</a>
                            </div>
                            <br><br>

                            </div>
                            </div>

                            <h1 class="header center orange-text">Tabela</h1>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>nome</th>
                                        <th>nome</th>
                                        <th>nome</th>
                                        <th>nome</th>
                                        <th>nome</th>
                                        <th>Cor</th>
                                        <th> Status Ativo/Inativo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                            <!-- <td></td>
                                          <td></td>
                                          <td></td>
                                    </tr> -->

                                </tbody>
                            </table>



                            <div class="container">
                                <div class="section">




                                </div>
                            </div>
                    </div>

                </div>
                <br><br>
            </div>
            <!--rodape-->	
            <footer class="page-footer orange">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text"></h5>
                            <p class="grey-text text-lighten-4"></p>


                        </div>
                        <div class="col l3 s12">
                            <h5 class="white-text"></h5>
                            <ul>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                            </ul>
                        </div>
                        <div class="col l3 s12">
                            <h5 class="white-text"></h5>
                            <ul>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                                <li><a class="white-text" href="#!"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <a class="orange-text text-lighten-3" href="http://materializecss.com"></a>
                    </div>
                </div>
            </footer>


            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>
