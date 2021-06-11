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
    <span class="label01_formUsuario">Editar Cadastro</span>
    <div class="conteudoForm">
        <form method="POST" action="alterarCadastroUsuario.php?usuario=<?php echo($idUsuario)?>">
            <input class="txtNomeUsuario_formUsuario" name="nomeUsuario" readonly="" type="text" placeholder="Usuário" required="" autofocus="" value="<?php echo($array['usuario_nome']);?>"/>
            <input class="txtSenhaUsuario_formUsuario" name="senhaUsuario" type="password" placeholder="Senha" required="" value="<?php echo($array['usuario_senha']);?>"/>
            <select class="cmbBoxCargoUsuario_formUsuario" name="cargoUsuario">
                <?php
                    if ($array['usuario_cargo'] == "Suporte") {
                        echo("<option value='Suporte' selected=''>Suporte</option>");
                        echo("<option value='Moderador'>Moderador</option>");
                        echo("<option value='Administrador'>Administrador</option>");
                        echo("<option value='Coordenador'>Coordenador</option>");
                        echo("<option value='Diretor'>Diretor</option>");
                        echo("<option value='Fundador'>Fundador</option>");
                    }
                ?>

                <?php
                    if ($array['usuario_cargo'] == "Moderador") {
                        echo("<option value='Suporte'>Suporte</option>");
                        echo("<option value='Moderador' selected=''>Moderador</option>");
                        echo("<option value='Administrador'>Administrador</option>");
                        echo("<option value='Coordenador'>Coordenador</option>");
                        echo("<option value='Diretor'>Diretor</option>");
                        echo("<option value='Fundador'>Fundador</option>");
                    }
                ?>
                
                <?php
                    if ($array['usuario_cargo'] == "Administrador") {
                        echo("<option value='Suporte'>Suporte</option>");
                        echo("<option value='Moderador'>Moderador</option>");
                        echo("<option value='Administrador' selected=''>Administrador</option>");
                        echo("<option value='Coordenador'>Coordenador</option>");
                        echo("<option value='Diretor'>Diretor</option>");
                        echo("<option value='Fundador'>Fundador</option>");
                    }
                ?>

                <?php
                    if ($array['usuario_cargo'] == "Coordenador") {
                        echo("<option value='Suporte'>Suporte</option>");
                        echo("<option value='Moderador'>Moderador</option>");
                        echo("<option value='Administrador'>Administrador</option>");
                        echo("<option value='Coordenador' selected=''>Coordenador</option>");
                        echo("<option value='Diretor'>Diretor</option>");
                        echo("<option value='Fundador'>Fundador</option>");
                    }
                ?>

                <?php
                    if ($array['usuario_cargo'] == "Diretor") {
                        echo("<option value='Suporte'>Suporte</option>");
                        echo("<option value='Moderador'>Moderador</option>");
                        echo("<option value='Administrador'>Administrador</option>");
                        echo("<option value='Coordenador'>Coordenador</option>");
                        echo("<option value='Diretor' selected=''>Diretor</option>");
                        echo("<option value='Fundador'>Fundador</option>");
                    }
                ?>

                <?php
                    if ($array['usuario_cargo'] == "Fundador") {
                        echo("<option value='Suporte'>Suporte</option>");
                        echo("<option value='Moderador'>Moderador</option>");
                        echo("<option value='Administrador'>Administrador</option>");
                        echo("<option value='Coordenador'>Coordenador</option>");
                        echo("<option value='Diretor'>Diretor</option>");
                        echo("<option value='Fundador' selected=''>Fundador</option>");
                    }
                ?>
            </select>
            <button type="submit" class="btnCadastrar_formUsuario">Salvar</button>
        </form>
    </div>
</div>
<?php
} else {
    header('Location: painel.php?p=usuarios&acao=listarUsuarios');
    exit();
}
?>