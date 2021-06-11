<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$id = $_GET['id'];

$autor = $_POST['nomeAutor'];
$imgFundo = $_POST['imgFundo'];
$titulo = $_POST['titulo'];
$subTitulo = $_POST['subTitulo'];
$conteudo = $_POST['corpo'];

$query_select = "select noticia_id from noticia where noticia_id = $id";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);

    $query = "update noticia set noticia_autor='$autor', noticia_imgFundo='$imgFundo', noticia_titulo='$titulo', noticia_subtitulo='$subTitulo', noticia_conteudo='$conteudo' where noticia_id=$id";
    $insert = mysqli_query($conexao, $query);

    if ($insert) {
        $_SESSION['alteracaoRealizada_formNoticia'] = true;
        header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
        exit();
    } else {
        $_SESSION['erroAlteracao_formNoticia'] = true;
        header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
        exit();
    }
?>