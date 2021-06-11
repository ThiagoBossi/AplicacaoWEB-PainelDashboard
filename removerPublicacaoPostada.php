<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$id = $_GET['id'];

$query_select = "select noticia_id from noticia where noticia_id = '$id'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);

    $query = "delete from noticia where noticia_id=$id";
    $insert = mysqli_query($conexao, $query);

    if ($insert) {
        $_SESSION['remocaoRealizada_formNoticia'] = true;
        header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
        exit();
    } else {
        $_SESSION['erroRemocao_formNoticia'] = true;
        header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
        exit();
    }
?>