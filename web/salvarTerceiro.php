<?php
session_start();
include_once ('conexao.php');
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

echo 'Nome: '.$nomeTerceiro;
echo 'RG:'.$rgTerceiro.'<br>';
echo 'Endereço:'.$enderecoTerceiro.'<br>';
echo 'CPF: '.$cpfTerceiro.'<br>';
echo 'Placa: '.$placaVeiculo.'<br>';
echo 'Nome Veiculo: '.$nomeVeiculo.'<br>';
echo 'Modelo: '.$modeloVeiculo.'<br>';
echo 'Seguro: '.$seguroVeiculo.'<br>';
echo 'Valor Locação: '.$locacaoVeiculo.'<br>';
echo 'Cor: '.$corVeiculo.'<br>';
echo 'Locado: '.$locado.'<br>';
echo 'Marca: '.$marcaVeiculo.'<br>';

$result_terceiros = "INSERT INTO terceiros (nomeT,rgT,enderecoT,cpfT,placaV,nomeV,modeloV,seguroV,locacaoV,corV,locadoV,marcaV) VALUES('$nomeTerceiro','$rgTerceiro','$enderecoTerceiro','$cpfTerceiro','$placaVeiculo','$nomeVeiculo','$modeloVeiculo','$seguroVeiculo','$locacaoVeiculo','$corVeiculo','$locado','$marcaVeiculo')";
$resultado_terceiro = mysqli_query($conn,$result_terceiros);
if(mysqli_insert_id($conn)){
    $_SESSION['msg']= "<p class='green-text'>Cadastrado com sucesso!</p>";
    header("Location: veiculos_terceiros.php");
}else{
    echo "Erro";
}