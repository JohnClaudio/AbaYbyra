<?php
session_start();
require_once "./php/actions/db_connect.php";


if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: index.php');
	exit();
}

$usuario = $_POST['email'];
$senha =  $_POST['password'];

//mysqli_query($connect, $sql);

$query = "select * from aluno where email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($connect, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
  echo "OK";
	header('Location: ./php/aluno.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
  echo "Senha ou login invalidos tente novamente.";

	exit();
}

 ?>
