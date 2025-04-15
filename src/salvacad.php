<?php

include ("banco.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "insert into tbusu Values(null,'$nome','$email','$senha',null)";

$insert = $conexao->query($sql);

if($insert == true){
     header ('location: cadastro.php?insert=ok');
}else{
    header('location: cadastro.php?insert=erro');
}


?>