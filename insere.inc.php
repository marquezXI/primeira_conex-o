<?php

include 'conecta_mysql.inc.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$comentarios = $_POST['comentarios'];


$sql = "INSERT INTO CADASTRO VALUES";
$sql = "('$nome', '$email', '$estado', '$estado',  '$comentarios')";


if ($conexao ->query($sql) == TRUE) {
    echo "Usuario incluido com sucesso! ";
} else { 
    echo "Erro: " .$sql . "<br>" . $conexao -> error;
}
?>


