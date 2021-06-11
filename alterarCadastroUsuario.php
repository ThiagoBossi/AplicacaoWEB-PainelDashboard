<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$idUsuario = $_GET['usuario'];

$usuario = $_POST['nomeUsuario'];
$senha = $_POST['senhaUsuario'];
$cargo = $_POST['cargoUsuario'];

$query_select = "select usuario_nome from usuario where usuario_id = '$idUsuario'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);

    $query = "update usuario set usuario_nome='$usuario', usuario_senha=md5('$senha'), usuario_cargo='$cargo' where usuario_id=$idUsuario";
    $insert = mysqli_query($conexao, $query);

    if ($insert) {
        $_SESSION['alteracaoRealizada_formUsuario'] = true;
        header('Location: painel.php?p=usuarios&acao=listarUsuarios');
        exit();
    } else {
        $_SESSION['erroAlteracao_formUsuario'] = true;
        header('Location: painel.php?p=usuarios&acao=listarUsuarios');
        exit();
    }
?>