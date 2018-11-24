<?php

include './conexao.php';

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numeroDependentes = $_POST['numeroDependentes'];
if ($edit == 0) {
    $sql = "insert into cliente (nome, rg, cpf, endereco, numeroDependentes) values ('$nome',"
        . "'$rg', '$cpf', '$endereco', '$numeroDependentes')";
    $conn->query($sql);
} else {
    $sql = "UPDATE cliente SET nome='$nome', rg='$rg',cpf='$cpf',endereco='$endereco',numeroDependentes='$numeroDependentes' WHERE id='$idcliente'";
    $conn->query($sql);
}

header("Location: ./Clientes.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 