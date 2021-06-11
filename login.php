<?php
session_start();
include('libs/conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: entrar.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_nome from usuario where usuario_nome = '{$usuario}' and usuario_senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['usuario_nome'];
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
	header('Location: entrar.php');
	exit();
}