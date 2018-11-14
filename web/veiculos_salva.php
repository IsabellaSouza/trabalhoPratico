<?php


$nome = $_POST['nome'];
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$valorDoSeguro = $_POST['valorDoSeguro'];
$valorDaLocacao = $_POST['valorDaLocacao'];
$cor = $_POST['cor'];
$ativo = isset($_POST['ativo'])?"TRUE":"FALSE";


$sql = "insert into carro (nome, placa, marca, modelo, valorSeguro, valorLocacao, cor, ativo) values ('$nome',"
        . "'$placa', '$marca', '$modelo', '$valorDoSeguro', '$valorDaLocacao','$cor', $ativo )";
echo $sql;
//$conn->query($sql);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

