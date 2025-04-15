<?php
$conexao = new mysqli('db', 'root', 'Dinamarca12.', 'dbgreenlife');

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
} else {
    echo "Conexão feita com sucesso!";
}

?>
