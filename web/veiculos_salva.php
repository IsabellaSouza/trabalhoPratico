<?php

include './conexao.php';

$idVeiculo = $_POST['idVeiculo'];
$edit = $_POST['edit-button'];
$nome = $_POST['nome'];
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$valorDoSeguro = $_POST['valorDoSeguro'];
$valorDaLocacao = $_POST['valorDaLocacao'];
$cor = $_POST['cor'];
$ativo = isset($_POST['ativo']) ? "TRUE" : "FALSE";
if ($edit == 0) {
    $sql = "insert into carro (nome, placa, marca, modelo, valorSeguro, valorLocacao, cor, ativo) values ('$nome',"
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

