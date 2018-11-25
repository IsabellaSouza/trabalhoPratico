<?php
session_start();
require_once './conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_terceiro = "SELECT * FROM terceiros WHERE id='$id'";
$resultado_terceiro = mysqli_query($conn, $result_terceiro);
$row_terceiro = mysqli_fetch_assoc($resultado_terceiro);
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<!--Modal Edição de Terceiros -->
<div class="container">
    <h3>Edição de terceiro</h3>

    <div class="row">
        <!--DADOS PROPRIETARIO-->
        <form class="col s12" method="POST" action='proc_edit_terceiro.php'>
            <input name='idTerceiro' id="idTerceiro" type="hidden" class="validate" required="" value="<?php echo $row_terceiro['id'] ?>">
            <div class="row">
                <div class="input-field col s6">
                    <input name='nomeTerceiro' placeholder="Insira o Nome completo do Terceiro" id="nomeTerceio" type="text" class="validate" required="" value="<?php echo $row_terceiro['nomeT'] ?>">
                    <label for="nomeTerceiro">Nome Proprietário</label>
                </div>
                <div class="input-field col s6">
                    <input name='rgTerceiro' placeholder="Insira o RG do Terceiro" id="rgTerceiro" type="text" class="validate" required=""value="<?php echo $row_terceiro['rgT'] ?>">
                    <label for="rgTerceiro">RG Proprietário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name='enderecoTerceiro' placeholder="Insira o Endereço do Terceiro" id="enderecoTerceiro" type="text" class="validate" required=""value="<?php echo $row_terceiro['enderecoT'] ?>">
                    <label for="enderecoTerceiro">Endereco Proprietário</label>
                </div>
            </div>

            <div class="row">

                <div class="input-field col s6">
                    <input name="cpfTerceiro" placeholder="Insira o CPF do Terceiro" id="cpfTerceiro" type="text" class="validate" required="" value="<?php echo $row_terceiro['cpfT'] ?>">
                    <label for="cpfTerceiro">CPF Proprietário</label>
                </div>
                <div class="input-field col s6">
                    <input name="placaVeiculo" placeholder="Insira a placa do veículo do terceiro" id="placaVeiculo" type="text" class="validate" required="" value="<?php echo $row_terceiro['placaV'] ?>">
                    <label for="placaVeiculo">Placa Veículo</label>
                </div>
            </div>
            <!--DADOS DO VEÍCULO DO TERCEIRO-->
            <div class="row">

                <div class="input-field col s6">
                    <input name="nomeVeiculo" placeholder="Insira o nome do veículo" id="nomeVeiculo" type="text" class="validate" required="" value="<?php echo $row_terceiro['nomeV'] ?>">
                    <label for="nomeVeiculo">Nome do Veículo</label>
                </div>

                <div class="input-field col s6">
                    <input name="modeloVeiculo" placeholder="Insira o modelo do veículo do terceiro" id="modeloVeiculo" type="text" class="validate" required="" value="<?php echo $row_terceiro['modeloV'] ?>">
                    <label for="modeloVeiculo">Modelo do Veículo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="seguroVeiculo" placeholder="Insira o valor do seguro" id="seguroVeiculo" type="text" class="validate" required=""value="<?php echo $row_terceiro['seguroV'] ?>">
                    <label for="seguroVeiculo">Valor do seguro</label>
                </div>
                <div class="input-field col s6">
                    <input name="locacaoVeiculo" placeholder="Insira valor de locação do veículo" id="locacaoVeiculo" type="text" class="validate" required=""value="<?php echo $row_terceiro['locacaoV'] ?>">
                    <label for="locacaoVeiculo">Valor de locação</label>
                </div>
            </div>
            <div class="row">

                <div class="input-field col s6">
                    <input name='corVeiculo' placeholder="Insira a cor do veículo" id="corVeiculo" type="text" class="validate" required=""value="<?php echo $row_terceiro['corV'] ?>">
                    <label for="corVeiculo">Cor Veículo</label>
                </div>
                <div class="input-field col s6">
                    <input name='marcaVeiculo' placeholder="Insira a Marca do veículo" id="marcaVeiculo" type="text" class="validate" required=""value="<?php echo $row_terceiro['marcaV'] ?>">
                    <label for="marcaVeiculo">Marca do Veículo</label>
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                    <select name="locado" id="locado">
                        <option value='Sim' selected>Sim</option>
                        <option value='Não'>Não</option>
                    </select>
                    <label>Locado?</label>
                </div>

                <div class="row" id="locadoVer">


                </div>
                <br>


                <div class="row">
                    <div class="right-align col-s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>