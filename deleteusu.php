<?php

$id = $_POST ['id'];

include('banco.php');

$sql = "delete from tbusu where codusu = $id";

$delete = $conexao->query($sql);

if($delete == true){
    echo "ok";
}else{
    echo "erro";
}

?>