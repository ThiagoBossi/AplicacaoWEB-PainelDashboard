<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$idUsuario = $_GET['usuario'];
$query_select = "select * from usuario where usuario_id = '$idUsuario'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
$row = mysqli_num_rows($select);
?>

<div class="menu_usuarios">
    <a class="txtMenu" href="painel.php?p=configuracoes&acao=layout"><i class="fa fa-picture-o" aria-hidden="true"></i> LAYOUT</a>
</div>