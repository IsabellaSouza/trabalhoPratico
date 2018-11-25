<?php

include './conexao.php';

$idFuncionarios = $_POST['idFuncionarios'];
$botaoEditar = $_POST['botaoEditar'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$data_admissao = $_POST['data_admissao'];
$data_demissao = $_POST['data_demissao'];

$status = isset($_POST['status']) ? "TRUE" : "FALSE";
if ($edit == 0) {
   $sql = "INSERT INTO pessoa(nome, rg, cpf, endereco) VALUES ('$nome', '$rg', '$cpf', '$endereco')";
            $result = $conn->query($sql);
            $ultimo = mysqli_insert_id($conn);
            $sql = "INSERT INTO cliente(data_admissao, data_demissao,supervisor ,idPessoa) VALUES ('$data_admissao', '$data_demissao','0','$ultimo')";
            $result = $conn->query($sql);
} else {
    $sql = "UPDATE carro SET placa='$placa', nome='$nome',modelo='$modelo',valorSeguro='$valorDoSeguro',valorLocacao='$valorDaLocacao',cor='$cor',ativo='$ativo',marca='$marca' WHERE id='$idVeiculo'";
    $conn->query($sql);
}

header("Location: ./tela_veiculos.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

