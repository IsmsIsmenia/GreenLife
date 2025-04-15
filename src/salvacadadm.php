<?php

include("banco.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['A'];

$sql = "insert into tbusu Values(null,'$nome','$email','$senha','A')";

$insert = $conexao->query($sql);

if($insert == true){
     header('location: principaladm.php?insert=ok');
}else{
    header('location: cadadm.php?insert=erro');
}


?>