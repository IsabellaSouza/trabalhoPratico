<?php
header("Location: ./locacao.php");



include './conexao.php';
$editar = $_POST['buttonEditar'];
$cpf = $_POST['cpf_pessoa'];
$placa = $_POST['placa_carro'];
$dataLocacao = $_POST['dataLocacao'];
$dataDevolucao = $_POST['dataDevolucao'];
$quilometragem = $_POST['quilometragem'];
$ativo = isset($_POST['ativo']) ? "TRUE" : "FALSE";



if ($editar == 0) {
    $sql = "insert into locacao (dataLocacao, dataDevolucao, quilometragem, cpf_locacao, placa_carro, ativo) "
            . "values ('$dataLocacao', '$dataDevolucao', '$quilometragem', '$cpf', '$placa', '$ativo' )";
    $conn->query($sql);
} else {
    $sql = "UPDATE locacao SET dataLocacao='$dataLocacao', dataDevolucao='$dataDevolucao', "
            . "quilometragem='$quilometragem', cpf_locacao='$cpf', placa_carro='$placa', "
            . "ativo='$ativo' WHERE id='$idLocacao'";
    $conn->query($sql);
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

