<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$idUsuario = $_GET['usuario'];
$query_select = "select * from usuario where usuario_id = '$idUsuario'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
$row = mysqli_num_rows($select);
?>

<?php
if ($row > 0) {
?>
<div class="menu_usuarios">
    <a class="txtMenu" href="painel.php?p=usuarios&acao=listarUsuarios"> VOLTAR</a>
</div>    

<div class="formCadastrar">
    <div class="avatarUsuarioAlterar">
        <?php
            $nomeAvatar = $array['usuario_nome'];
            echo("<style type='text/css'>.avatarUsuarioAlterar{background-image: url('https://cravatar.eu/avatar/".$nomeAvatar."/35');}</style>");
        ?>
    </div>
    <span class="label01_formUsuario">Remover Cadastro</span>
    <div class="conteudoForm">
    <form method="POST" action="removerCadastroUsuario.php?usuario=<?php echo($idUsuario)?>">
            <input class="txtNomeUsuario_formUsuario" name="nomeUsuario" readonly="" type="text" placeholder="Usuário" required="" autofocus="" value="<?php echo($array['usuario_nome']);?>"/>
            <input class="txtSenhaUsuario_formUsuario" name="senhaUsuario" readonly="" type="password" placeholder="Senha" required="" value="<?php echo($array['usuario_senha']);?>"/>
                <?php
                    if ($array['usuario_cargo'] == "Suporte") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Suporte' name='cargoUsuario'>");
                    }

                    if ($array['usuario_cargo'] == "Moderador") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Moderador' name='cargoUsuario'>");
                    }

                    if ($array['usuario_cargo'] == "Administrador") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Administrador' name='cargoUsuario'>");
                    }

                    if ($array['usuario_cargo'] == "Coordenador") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Coordenador' name='cargoUsuario'>");
                    }

                    if ($array['usuario_cargo'] == "Diretor") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Diretor' name='cargoUsuario'>");
                    }

                    if ($array['usuario_cargo'] == "Fundador") {
                        echo("<input class='txtCargoUsuario_formUsuario' readonly='' value='Fundador' name='cargoUsuario'>");
                    }
                ?>
            </select>
            <button type="submit" class="btnCadastrar_formUsuario">Confirmar</button>
        </form>
    </div> 
</div> 
<?php
} else {
    header('Location: painel.php?p=usuarios&acao=listarUsuarios');
    exit();
}
?>