<?php
session_start();
include_once ('conexao.php');
    
$id = filter_input(INPUT_POST,'idTerceiro',FILTER_SANITIZE_NUMBER_INT);
$nomeTerceiro = filter_input(INPUT_POST,'nomeTerceiro',FILTER_SANITIZE_STRING);
$rgTerceiro = filter_input(INPUT_POST,'rgTerceiro',FILTER_SANITIZE_STRING);
$enderecoTerceiro = filter_input(INPUT_POST,'enderecoTerceiro',FILTER_SANITIZE_STRING);
$cpfTerceiro = filter_input(INPUT_POST,'cpfTerceiro',FILTER_SANITIZE_STRING);
$placaVeiculo=filter_input(INPUT_POST,'placaVeiculo',FILTER_SANITIZE_STRING);
$nomeVeiculo=filter_input(INPUT_POST,'nomeVeiculo',FILTER_SANITIZE_STRING);
$modeloVeiculo=filter_input(INPUT_POST,'modeloVeiculo',FILTER_SANITIZE_STRING);
$seguroVeiculo=filter_input(INPUT_POST,'seguroVeiculo',FILTER_SANITIZE_STRING);
$locacaoVeiculo=filter_input(INPUT_POST,'locacaoVeiculo',FILTER_SANITIZE_STRING);
$corVeiculo=filter_input(INPUT_POST,'corVeiculo',FILTER_SANITIZE_STRING);
$locado=filter_input(INPUT_POST,'locado',FILTER_SANITIZE_STRING);
$marcaVeiculo=filter_input(INPUT_POST,'marcaVeiculo',FILTER_SANITIZE_STRING);

$result_t = "UPDATE terceiros SET NomeT='$nomeTerceiro',rgT='$rgTerceiro',enderecoT='$enderecoTerceiro',cpfT='$cpfTerceiro',placaV='$placaVeiculo',nomeV='$nomeVeiculo',modeloV='$modeloVeiculo',seguroV='$seguroVeiculo',locacaoV='$locacaoVeiculo',corV='$corVeiculo',locadoV='$locado',marcaV='$marcaVeiculo' WHERE id='$id'";
$resultado= mysqli_query($conn,$result_t);
if(mysqli_affected_rows($conn)){
    $_SESSION['msg']= "<p class='green-text'>Editado com sucesso!</p>";
    header("Location: veiculos_terceiros.php");
}else{
    echo "Erro";
}