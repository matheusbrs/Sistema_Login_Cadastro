<?php
include_once('logar.php');

$hostname="localhost";
$bancodedados="smart_tec";
$usuario="root";
$senha="";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli -> connect_errno){
    echo "falha ao conectar";
}else{
    echo"banco de dados conectado";
}

if(isset($_POST['cadastrar'])){
    $nome =$_POST['nome'];
    $cpf =$_POST['cpf'];
    $data_nascimento =$_POST['data_nascimento'];
    $sexo=$_POST['sexo'];
    $email =$_POST['email'];
    $senha =$_POST['Senha'];
    $estado_civil =$_POST['estado_civil'];
    $logradouro =$_POST['logradouro'];
    $numero_casa =$_POST['numero_casa'];
    $complemento =$_POST['complemento'];
    $cidade =$_POST['cidade'];

    $query = mysqli_query($mysqli, "INSERT INTO usuario(nome,cpf,data_nascimento,sexo,email,senha,estado_civil,logradouro,numero_casa,complemento,cidade)VALUES('$nome','$cpf','$data_nascimento','$sexo','$email','$senha','$estado_civil','$logradouro','$numero_casa','$complemento','$cidade') ");
}




?>