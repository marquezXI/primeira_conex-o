<html>
<body>
<?php

include "conecta_mysql.inc.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Preencha o formulário primeiro.");
}

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";
$comentarios = $_POST["comentarios"] ?? "";

$erro = 0;

if (empty($nome) || strstr($nome, ' ') === FALSE) {
    echo "Favor digitar seu nome corretamente.<br>";
    $erro = 1;
}

if (strlen($email) < 8 || strstr($email, '@') === FALSE) {
    echo "Favor digitar seu email corretamente.<br>";
    $erro = 1;
}

if (empty($cidade)) {
    echo "Favor digitar sua cidade.<br>";
    $erro = 1;
}

if (strlen($estado) != 2) {
    echo "Favor digitar seu estado corretamente.<br>";
    $erro = 1;
}

if (empty($comentarios)) {
    echo "Favor entrar com algum comentário.<br>";
    $erro = 1;
}

if ($erro == 0) {

    echo "Todos os dados foram digitados corretamente.<br>";
}
?>
</body>
</html>