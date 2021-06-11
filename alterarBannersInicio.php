<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$banner1 = $_POST['banner1'];
$banner2 = $_POST['banner2'];
$banner3 = $_POST['banner3'];
$banner4 = $_POST['banner4'];

$query = "update info_index set img_banner1='$banner1', img_banner2=('$banner2'), img_banner3='$banner3', img_banner4='$banner4' where 1";
$update = mysqli_query($conexao, $query);

    if ($update) {
        $_SESSION['alteracaoRealizada_formBanner'] = true;
        header('Location: painel.php?p=configuracoes&acao=layout');
        exit();
    } else {
        $_SESSION['erroAlteracao_formBanner'] = true;
        header('Location: painel.php?p=configuracoes&acao=layout');
        exit();
    }
?>