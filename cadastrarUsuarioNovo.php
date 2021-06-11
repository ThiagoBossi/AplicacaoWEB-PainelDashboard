<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$usuario = $_POST['nomeUsuario'];
$senha = $_POST['senhaUsuario'];
$cargo = $_POST['cargoUsuario'];
$query_select = "select usuario_nome from usuario where usuario_nome = '$usuario'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['usuario_nome'];

    if ($logarray == $usuario) {
        $_SESSION['cadastroExistente_formUsuario'] = true;
	    header('Location: painel.php?p=usuarios&acao=cadastrarNovo');
	    exit();
    } else {
        $query = "insert into usuario (usuario_nome, usuario_senha, usuario_cargo) values ('$usuario', md5('$senha'), '$cargo')";
        $insert = mysqli_query($conexao, $query);

        if ($insert) {
            $_SESSION['cadastroRealizado_formUsuario'] = true;
            header('Location: painel.php?p=usuarios&acao=listarUsuarios');
            exit();
        } else {
            $_SESSION['erroCadastro_formUsuario'] = true;
            header('Location: painel.php?p=usuarios&acao=cadastrarNovo');
            exit();
        }
    }
?>