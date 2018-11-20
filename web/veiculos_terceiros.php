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
                    if(isset($_SESSION['msg'])){
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
                                        <input name='nomeTerceiro' placeholder="Insira o Nome completo do Terceiro" id="nomeTerceio" type="text" class="validate">
                                        <label for="nomeTerceiro">Nome Proprietário</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='rgTerceiro' placeholder="Insira o RG do Terceiro" id="rgTerceiro" type="text" class="validate">
                                        <label for="rgTerceiro">RG Proprietário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name='enderecoTerceiro' placeholder="Insira o Endereço do Terceiro" id="enderecoTerceiro" type="text" class="validate">
                                        <label for="enderecoTerceiro">Endereco Proprietário</label>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="cpfTerceiro" placeholder="Insira o CPF do Terceiro" id="cpfTerceiro" type="text" class="validate">
                                        <label for="cpfTerceiro">CPF Proprietário</label>
                                    </div>
                                </div>
                                <!--DADOS DO VEÍCULO DO TERCEIRO-->
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="placaVeiculo" placeholder="Insira a placa do veículo do terceiro" id="placaVeiculo" type="text" class="validate">
                                        <label for="placaVeiculo">Placa Veículo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="nomeVeiculo" placeholder="Insira o nome do veículo" id="nomeVeiculo" type="text" class="validate">
                                        <label for="nomeVeiculo">Nome do Veículo</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="modeloVeiculo" placeholder="Insira o modelo do veículo do terceiro" id="modeloVeiculo" type="text" class="validate">
                                        <label for="modeloVeiculo">Modelo do Veículo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="seguroVeiculo" placeholder="Insira o valor do seguro" id="seguroVeiculo" type="text" class="validate">
                                        <label for="seguroVeiculo">Valor do seguro</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input name="locacaoVeiculo" placeholder="Insira valor de locação do veículo" id="locacaoVeiculo" type="text" class="validate">
                                        <label for="locacaoVeiculo">Valor de locação</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='corVeiculo' placeholder="Insira a cor do veículo" id="corVeiculo" type="text" class="validate">
                                        <label for="corVeiculo">Cor Veículo</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <label>
                                            <input name='locado' type="checkbox" id="locado" />
                                            <span>Locado?</span>
                                        </label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='marcaVeiculo' placeholder="Insira a Marca do veículo" id="marcaVeiculo" type="text" class="validate">
                                        <label for="marcaVeiculo">Marca do Veículo</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>



                            </form>
                        </div>
                    </div>



                </div>
            </div>
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
                       <?php while($rows_table = mysqli_fetch_assoc($resultado_table)){?>
                           <tr>
                                <td><?php echo $rows_table['id']?></td>
                                <td><?php echo $rows_table['nomeT']?></td>
                                <td><?php echo $rows_table['rgT']?></td>
                                <td><?php echo $rows_table['enderecoT']?></td>
                                <td><?php echo $rows_table['cpfT']?></td>
                                <td><?php echo $rows_table['placaV']?></td>
                                <td><?php echo $rows_table['nomeV']?></td>
                                <td><?php echo $rows_table['modeloV']?></td>
                                <td><?php echo $rows_table['seguroV']?></td>
                                <td><?php echo $rows_table['locacaoV']?></td>
                                <td><?php echo $rows_table['corV']?></td>
                                <td><?php echo $rows_table['locadoV']?></td>
                                <td><?php echo $rows_table['marcaV']?></td>
                                
                           </tr>
                       <?php
                       }
                       ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!--FOOTER-->
        <?php require_once('footer.php'); ?>

        <!--SCRIPTS-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>