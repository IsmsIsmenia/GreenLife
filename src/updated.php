<?php

include("banco.php");
$id = $_POST['id'];
$checado = $_POST['checado'];


$sql = "update tbdenuncia set checado ='$checado'
where coddenuncia= '$id'";

$update = $conexao->query($sql);

if($update == true){
     header('location: buscadenuncias.php?update=ok');
}else{
    header('location: buscadenuncias.php?update=erro');
}


?>