<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$autor = $_SESSION['nome'];
$imgFundo = $_POST['imgFundo'];
$titulo = $_POST['titulo'];
$subTitulo = $_POST['subTitulo'];
$corpo = $_POST['corpo'];

    $query = "insert into noticia (noticia_titulo, noticia_subtitulo, noticia_imgFundo, noticia_conteudo, noticia_autor, noticia_data) values ('$titulo', '$subTitulo', '$imgFundo', '$corpo', '$autor', NOW())";
    $insert = mysqli_query($conexao, $query);

    if ($insert) {
        $_SESSION['publicacaoRealizada'] = true;
        header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
        exit();
    } else {
        $_SESSION['erroPublicacao'] = true;
        header('Location: painel.php?p=publicacoes&acao=criarPublicacao');
        exit();
    }
?>