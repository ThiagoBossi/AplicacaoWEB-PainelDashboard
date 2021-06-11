<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$query_select = "select * from noticia";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
?>

<div class="corpo_tabelaNoticias">
    <div class="conteudo_tabelaUsuarios">
        <table class="tabelaUsuarios">
        <tr>             
            <td class="cabecalhoLista">ID</td>
            <td class="cabecalhoLista">Título</td>
            <td class="cabecalhoLista">Autor</td>
            <td class="cabecalhoLista">Ações</td>
        </tr>
        <?php
            do {
        ?>
        <tr>
            <td class="itemLista"><?php echo $array['noticia_id']?></td>
            <td class="itemLista"><?php echo $array['noticia_titulo']?></td>
            <td class="itemLista"><?php echo $array['noticia_autor']?></td>
            <td>
                <a class="editarCadastro" href="painel.php?p=alterarPublicacao&id=<?php echo $array['noticia_id']?>">Editar</a>
                <a class="removerCadastro" href="painel.php?p=removerPublicacao&id=<?php echo $array['noticia_id']?>">Remover</a>
            </td>
        </tr>
        <?php
            } while ($array = mysqli_fetch_array($select));
        ?>
    </table>
    </div>
</div>