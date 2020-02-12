<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conexao);
?>

<html>
<head>
	<title>Página restrita</title>
	<meta charset="utf-8">
</head>
<body>
<h1> Olá <?php echo $dados['nome']; ?> </h1>
<a href="logout.php">Sair</a>
</body>
</html>