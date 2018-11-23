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
    $sql = "insert into funcionario (nome, placa, marca, modelo, valorSeguro, valorLocacao, cor, ativo) values ('$nome',"
            . "'$placa', '$marca', '$modelo', '$valorDoSeguro', '$valorDaLocacao','$cor', $ativo )";
    $conn->query($sql);
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

