<?php

include ("banco.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];

$sql = "update tbusu set nome ='$nome' , email='$email', senha='$senha', cargo='$cargo'
where codusu= '$id'";

$update = $conexao->query($sql);

if($update == true){
     header('location: principaladm.php?update=ok');
}else{
    header('location: principaladm.php?update=erro');
}


?>