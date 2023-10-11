<?php


$hostname = "localhost";
$bancodedados = "sistema_cadastro";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);


if (isset($_POST['cadastro'])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
   

    $query = mysqli_query($mysqli, "INSERT INTO usuario(nome,email,senha)VALUES('$nome','$email','$senha') ");

    if ($query) {
    echo "usuario cadastrado";
    } else {
        echo "usuario não cadastrado";
    }
}
