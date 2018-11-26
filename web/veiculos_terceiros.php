<?php
session_start();
include_once ('conexao.php');
$result_table = "SELECT * FROM terceiros";
$resultado_table = mysqli_query($conn, $result_table);
?>
<html>
    <head>
        <title>Veiculos terceiros</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <!--HEADER-->
        <?php require_once('nav.php'); ?>
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="left-align">Veículos de Terceiros</h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
                <!-- Modal Triger Para Terceiros -->
                <a class="waves-effect waves-light btn modal-trigger orange white-text" href="#modalTerceiro"><i class="material-icons left">add</i>Cadastrar</a>

                <!-- Modal Cadastro de Terceiros -->
                <div id="modalTerceiro" class="modal">
                    <div class="modal-content">
                        <h3>Cadastro Veículo terceiro</h3>
                        <p>Cadastro de Veículos de terceiros.</p>
                        <div class="row">
                            <!--DADOS PROPRIETARIO-->
                            <form class="col s12" method="POST" action='salvarTerceiro.php'>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name='nomeTerceiro' placeholder="Insira o Nome completo do Terceiro" id="nomeTerceio" type="text" class="validate" required="">
                                        <label for="nomeTerceiro">Nome Proprietário</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='rgTerceiro' placeholder="Insira o RG do Terceiro" id="rgTerceiro" type="text" class="validate" required="">
                                        <label for="rgTerceiro">RG Proprietário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name='enderecoTerceiro' placeholder="Insira o Endereço do Terceiro" id="enderecoTerceiro" type="text" class="validate" required="">
                                        <label for="enderecoTerceiro">Endereco Proprietário</label>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="cpfTerceiro" placeholder="Insira o CPF do Terceiro" id="cpfTerceiro" type="text" class="validate" required="">
                                        <label for="cpfTerceiro">CPF Proprietário</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="placaVeiculo" placeholder="Insira a placa do veículo do terceiro" id="placaVeiculo" type="text" class="validate" required="">
                                        <label for="placaVeiculo">Placa Veículo</label>
                                    </div>
                                </div>
                                <!--DADOS DO VEÍCULO DO TERCEIRO-->
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="nomeVeiculo" placeholder="Insira o nome do veículo" id="nomeVeiculo" type="text" class="validate" required="">
                                        <label for="nomeVeiculo">Nome do Veículo</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="modeloVeiculo" placeholder="Insira o modelo do veículo do terceiro" id="modeloVeiculo" type="text" class="validate" required="">
                                        <label for="modeloVeiculo">Modelo do Veículo</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="seguroVeiculo" placeholder="Insira o valor do seguro" id="seguroVeiculo" type="text" class="validate" required="">
                                        <label for="seguroVeiculo">Valor do seguro</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="locacaoVeiculo" placeholder="Insira valor de locação do veículo" id="locacaoVeiculo" type="text" class="validate" required="">
                                        <label for="locacaoVeiculo">Valor de locação</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name='corVeiculo' placeholder="Insira a cor do veículo" id="corVeiculo" type="text" class="validate" required="">
                                        <label for="corVeiculo">Cor Veículo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='marcaVeiculo' placeholder="Insira a Marca do veículo" id="marcaVeiculo" type="text" class="validate" required="">
                                        <label for="marcaVeiculo">Marca do Veículo</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <div class="input-field col s12">
                                            <select name="locado" id="locado">
                                                <option value="" disabled selected>Escolha a Opção</option>
                                                <option value="Sim">Sim</option>
                                                <option value="Não">Não</option>

                                            </select>
                                            <label>Locado?</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <br>


                                <div class="row">
                                    <div class="right-align col-s12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>

            <div class="div-teste">sdfwe</div>
            <div class="row">
                <table class="centered highlight">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>Endereco</th>
                            <th>CPF</th>
                            <th>Placa Veículo</th>
                            <th>Nome Veículo</th>
                            <th>Modelo</th>
                            <th>Valor Seguro</th>
                            <th>Valor Locação</th>
                            <th>Cor</th>
                            <th>Locado</th>
                            <th>Marca</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($rows_table = mysqli_fetch_assoc($resultado_table)) { ?>
                            <?php
                            echo "<tr data-id=" . $rows_table['id'] . " class='linha'>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['id'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['nomeT'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['rgT'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['enderecoT'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['cpfT'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['placaV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['nomeV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['modeloV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['seguroV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['locacaoV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['corV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['locadoV'] . "</a></td>";
                            echo "<td><a class='modal-trigger' href='edit_terceiro.php?id=" . $rows_table['id'] . "'>" . $rows_table['marcaV'] . "</a></td>";
                            ?>

                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>



        <!--SCRIPTS-->[
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/preencherModal.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>