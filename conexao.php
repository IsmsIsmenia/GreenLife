<?php
    $servername = "localhost"; /* pode deixar localhost */
    $username = "root"; /* nome do usuario do banco de dados */ 
    $password = ""; /* senha do banco de dados caso exista senao deixa $password = "" */
    $dbname = "dbdados"; /* nome do seu banco de dados*/

    // Criando a conexão com o banco de dados
    $conexao = new mysqli($servername, $username, $password, $dbname);
    // Checando a conexão com o banco de dados
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 
?>