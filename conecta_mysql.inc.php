<?php

$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "bdexemplo"
);

mysqli_set_charset($conexao, "utf8");

if (!$conexao) {
    die("Falha ao realizar a conexão: " . mysqli_connect_error());
}

?>