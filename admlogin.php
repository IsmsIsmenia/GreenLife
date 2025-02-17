<?php
    include('banco.php');

    $usuario=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="select * from tbusu where email='$usuario' and senha='$senha'";

    $consulta=$conexao->query($sql);
    $dados=$consulta->fetch_array(MYSQLI_ASSOC);

    $codusu=$dados['idusu'];
    $usuario=$dados['nome'];
    $email=$dados['email'];
    $senha=$dados['senha'];
    $cargo=$dados['cargo'];

    if($consulta->num_rows>0){
        session_start();
        $_SESSION['login'] ='ok';
        if($dados['cargo']=='A'){
            header('location: principaladm.php?login=ok');
        }
    }else{
        header('location: index.php?login=erro');
    }
?>