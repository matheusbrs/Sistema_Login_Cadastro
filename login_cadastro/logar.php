<?php 
$hostname="localhost";
$bancodedados="smart_tec";
$usuario="root";
$senha="";
// conecta ao banco de dados
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

/* verifica se existe algum erro ao conectar ao banco de dados
if (mysqli_connect_error()) {
    die("Falha ao conectar ao Banco de Dados: " . mysqli_connect_error());
} else {
    echo "Conexão ao Banco de Dados estabelecida com sucesso!";
}*/
if (isset($_POST['acessar'])) { //se existir clique no botao enviar executar o codigo
  $nomeUsuario = $_POST['email'];// busca informaçoes do banco formulario localizado em inicioo
$senhaUsuario = $_POST['senha'];// busca informaçoes do banco formulario localizado em inicioo

$query = "SELECT * FROM usuario WHERE email = '$nomeUsuario' AND senha = '$senhaUsuario'"; // busca e verifica se existe os dados no banco
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) > 0) {
  // Usuário encontrado, conceda o acesso à página principal
  header('Location: pagina_inicial.php');
  exit;
} else {
    echo 'Usuário não encontrado. Por favor, verifique suas credenciais.';
}


}

?>