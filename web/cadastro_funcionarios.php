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

        <?php
        require_once('./nav.php');
        ?>


        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Cadastro de Funcionários</h1>
                <div class="row center">
                    <form id="formFuncionarios" action="cadastro_funcionarios_salvar.php"  method="POST" class="col s12">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="nome" name ="nome" type="text" class="validate">
                                    <label for="nome">NOME</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="rg" name ="rg" type="text" class="validate">
                                    <label for="rg">RG</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="cpf" name ="cpf" type="text" class="validate">
                                    <label for="cpf">CPF</label>
                                </div>


                                <div class="input-field col s6">
                                    <input id="endereco" name ="endereco" type="text" class="validate">
                                    <label for="endereco">ENDEREÇO</label>
                                </div>

                                <div class="input-field col s6">
                                    <input id="data_admissao" name ="data_admissao" type="text" class="datepicker">
                                    <label for="data_admissao">Data de Admissão</label>
                                </div>

                                <div class="input-field col s6">
                                    <input id="data_demissao" name ="data_demissao" type="text" class="datepicker">
                                    <label for="data_demissao">Data de Demissão</label>
                                </div>




                                <!-- Botao -->

                                <div class="switch">
                                    <label>
                                        Inativo
                                        <input type="status">
                                        <span class="lever"></span>
                                        Ativo
                                    </label>
                                </div>



                            </div>
                            <div class="row center">
                                 <button  id="botao_salvar" name ="botao_salvar" class="btn-large waves-effect waves-light orange">Salvar</button>
                                <button type="submit" id="botao_editar" value="1" name ="botao_editar" class="btn-large waves-effect waves-light orange">Editar</button>

                            </div>
                            <br><br>

                            </div>
                            </div>

                            <h1 class="header center orange-text">Tabela De Funcionários</h1>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Endereço</th>
                                        <th>Admição</th>
                                        <th>Demição</th>

                                        <th> Status Ativo/Inativo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                   <?php
                                   //mudar para pessoa/funcionario
                        $sql = "SELECT * FROM carro where 1";//mudar para pessoa
                        $result = $conn->query($sql);//executa o SQL
                        
                        if($result->num_rows>0){//verifica se o SQL retornou alguma linha
                        while($linha = $result->fetch_assoc()){//percorre todo o resultado do SQL
                            echo "<tr data-id='".$linha['id']."' class='linhas'>";
                            echo '<td>' . $linha['nome'] . '</td>';// procura a coluna da tabela escolhida
                            echo '<td>' . $linha['rg'] . '</td>';
                            echo '<td>' . $linha['cpf'] . '</td>';
                            echo '<td>' . $linha['endereco'] . '</td>';
                            echo '<td>' . $linha['data_admissao'] . '</td>';
                            echo '<td>' . $linha['data_demissao'] . '</td>';
                            echo '<td>' . $linha['status'] . '</td>';
  
                            echo '</tr>';
                        }
                        }
                        ?>

                                </tbody>
                            </table>

                    </div>
                    <div class="row center">
                       

                    </div>
                    <br><br>

                </div>
            </div>



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
