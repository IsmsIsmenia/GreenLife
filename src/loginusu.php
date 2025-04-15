<?php
    include 'banco.php';
    
 //echo 'conexão ok!'
//recebendo variáveis por post
$email = $_POST ['email'];
$senha = $_POST ['senha'];


//criando uma consulta
$sql = "select * from tbusu where email='$email' and senha='$senha'";
$consulta = $conexao->query($sql);
if ($consulta->num_rows > 0){
    session_start();
    $linha = $consulta -> fetch_array(MYSQLI_ASSOC);
    $_SESSION['login'] = 'ok';
    $_SESSION['codusu'] = $linha['codusu'];
    $_SESSION['nomeusu'] = $linha['nome'];
    $_SESSION['emailusu'] = $linha['email'];
    header('Location: denuncia.php?login=ok');
   // echo 'Usuário Encontrado';
}else{
    header('Location: login.php?login=erro');
   // echo 'Usuário não encontrado';

}
?>
