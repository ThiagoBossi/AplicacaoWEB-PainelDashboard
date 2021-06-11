<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$query_select = "select * from usuario";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
?>

<div class="corpo_tabelaUsuarios">
    <div class="conteudo_tabelaUsuarios">
        <table class="tabelaUsuarios">
        <tr>             
            <td class="cabecalhoLista">ID</td>
            <td class="cabecalhoLista">Usuário</td>
            <td class="cabecalhoLista">Cargo</td>
            <td class="cabecalhoLista">Ações</td>
        </tr>
        <?php
            do {
        ?>
        <tr>
            <td class="itemLista"><?php echo $array['usuario_id']?></td>
            <td class="itemLista"><?php echo $array['usuario_nome']?></td>
            <td class="itemLista"><?php echo $array['usuario_cargo']?></td>
            <td>
                <a class="editarCadastro" href="painel.php?p=alterarUsuario&usuario=<?php echo $array['usuario_id']?>">Editar</a>
                <a class="removerCadastro" href="painel.php?p=removerUsuario&usuario=<?php echo $array['usuario_id']?>">Remover</a>
            </td>
        </tr>
        <?php
            } while ($array = mysqli_fetch_array($select));
        ?>
    </table>
    </div>
</div>