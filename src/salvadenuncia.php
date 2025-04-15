<?php

include("banco.php");

$codusu= $_POST['codusu'];
$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$catd= $_POST['catd'];
$cpf = $_POST['cpf'];
$rua= $_POST['rua'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$cep = $_POST['cep'];
$descricao= $_POST['descricao'];
$datad = $_POST['datad'];
$hora = $_POST['hora'];
$coord = $_POST["coord"];


$sql = "insert into tbdenuncia Values(null,'$codusu','$nome','$email','$telefone','$catd','$cpf','$rua','$bairro','$cidade','$cep','$descricao','$coord', '$datad','$hora', null, null)";
$insert = $conexao->query($sql);

if($insert == true){
     header('location: index.php?insert=ok');
}else{
    header('location: denuncia.php?insert=erro');
}
?>