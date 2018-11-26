<?php
//incluindo biblioteca de conexao
include './conexao.php';
//passando os dados atraves de post
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
//inserindo em carro os valores
if ($edit == 0) {
    $sql = "insert into carro (nome, placa, marca, modelo, valorSeguro, valorLocacao, cor, ativo) values ('$nome',"
            . "'$placa', '$marca', '$modelo', '$valorDoSeguro', '$valorDaLocacao','$cor', $ativo )";
    $conn->query($sql);
    //atualizando valores
} else {
    $sql = "UPDATE carro SET placa='$placa', nome='$nome',modelo='$modelo',valorSeguro='$valorDoSeguro',valorLocacao='$valorDaLocacao',cor='$cor',ativo='$ativo',marca='$marca' WHERE id='$idVeiculo'";
    $conn->query($sql);
}
//local
header("Location: ./tela_veiculos.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

