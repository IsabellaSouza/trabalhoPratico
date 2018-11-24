<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Cadastro de Cliente</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php
require_once('./nav.php');
require_once('./conexao.php');
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Cadastro de Cliente</h1>
        <div class="row center">
            <div class="row">
                <form id="formCliente" action="clientes_salva.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="nome" name="nome" type="text" class="validate">                                  <!--Nome do Cliente a ser Cadastrado-->
                            <label for="nome">Nome</label>
                        </div>
                        <input type="hidden" id="idCliente" name="idCliente">
                        <div class="input-field col s6">
                            <input id="CNH" name="CNH" type="text" class="validate">                                    <!--CNH do Cliente a ser Cadastrado-->
                            <label for="CNH">CNH</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="RG" name="RG" type="text" class="validate">                                      <!--RG do Cliente a ser Cadastrado-->
                            <label for="RG">RG</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="CPF" name="CPF" type="text" class="validate">                                    <!--CPF do Cliente a ser Cadastrado-->
                            <label for="CPF">CPF</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="endereco" name="endereco" type="text" class="validate">                          <!--Endereço do Cliente a ser Cadastrado-->
                            <label for="endereco">Endereço</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="numeroDependentes" name="numeroDependentes" type="text" class="validate">        <!--Numero de Dependentes do Cliente a ser Cadastrado-->
                            <label for="numeroDependentes">Numero de Dependentes</label>
                        </div>
                        <div class="row center">
                            <button  id="save-button" name ="save-button"
                                     class="btn-large waves-effect waves-light orange">Salvar
                            </button>
                            <button type="submit" id="edit-button" value="1" name="edit-button"
                                    class="btn-large waves-effect waves-light orange">Editar
                            </button>
                        </div>
                </form>
                <br><br>
            </div>
        </div>
        <h1 id="tabela" name="tabela" class="header center orange-text">Clientes Cadastrados</h1>
        <table>                                                                                                         <!--Lista com os Dados Trazidos do Banco-->
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNH</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Numero de Dependentes</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM pessoa INNER JOIN cliente on pessoa.id = cliente.idPessoa";                           //SQL Que Faz a Junção das Tabelas Pessoa e Cliente para Trazer as Informações de Ambas
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {                                                                                //verifica se o SQL retornou alguma linha
                while ($linha = $result->fetch_assoc()) {                                                               //Percorre todo o resultado do SQL
                    echo "<tr data-id='" . $linha['id'] . "' class='linhas'>";
                    echo '<td>' . $linha['id'] . '</td>';                                                               //Linha que Retorna o ID Gravado no Banco
                    echo '<td>' . $linha['nome'] . '</td>';                                                             //Linha que Retorna o Nome Gravado no Banco
                    echo "<td>" . $linha['cnh'] . "</td>";                                                              //Linha que Retorna a CNH Gravado no Banco
                    echo "<td>" . $linha['rg'] . "</td>";                                                               //Linha que Retorna o RG Gravado no Banco
                    echo "<td>" . $linha['cpf'] . "</td>";                                                              //Linha que Retorna o CPF Gravado no Banco
                    echo "<td>" . $linha['endereco'] . "</td>";                                                         //Linha que Retorna o Endereço Gravado no Banco
                    echo "<td>" . $linha['numeroDependentes'] . "</td>";                                                //Linha que Retorna o Numero de Dependentes Gravado no Banco
                    echo '</tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <br><br>
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
<script>document.getElementById("edit-button").disabled = true;</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>
