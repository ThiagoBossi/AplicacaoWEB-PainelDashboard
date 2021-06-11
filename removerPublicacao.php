<?php
include('libs/verifica_login.php');
include('libs/conexao.php');

$id = $_GET['id'];
$query_select = "select * from noticia where noticia_id = '$id'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
$row = mysqli_num_rows($select);
?>

<?php
if ($row > 0) {
?>
<div class="menu_usuarios">
    <a class="txtMenu" href="painel.php?p=publicacoes&acao=listarPublicacoes"> VOLTAR</a>
</div>    

<div class="formPublicacao">
    <span class="label01_formPublicacao">Alterar Publicação</span>
    <div class="conteudoFormPublicacao">
        <form method="POST" action="removerPublicacaoPostada.php?id=<?php echo($id)?>">
            <div class="itensCabecalho">
                <div class="itens">
                    <input class="txtAutor_formPublicacao" readonly="" name="nomeAutor" type="text" value="<?php echo($array['noticia_autor']);?>" required/>
                    <input class="txtImgFundo_formPublicacao" readonly="" name="imgFundo" type="text" placeholder="Imagem de Fundo" value="<?php echo($array['noticia_imgFundo']);?>"/>
                    <input class="txtTitulo_formPublicacao" readonly="" ame="titulo" type="text" placeholder="Título da Publicação" required value="<?php echo($array['noticia_titulo']);?>"/>
                    <input class="txtSubTitulo_formPublicacao" readonly="" name="subTitulo" type="text" placeholder="Sub-Título da Publicação" required value="<?php echo($array['noticia_subtitulo']);?>"/>
                </div>
            </div>
            <textarea class="txtCorpo_formPublicacao" readonly="" name="corpo" type="text" required ><?php echo($array['noticia_conteudo']);?></textarea>
            <button type="submit" class="btnPublicar_formPublicacao">Confirmar</button>
        </form>
    </div>
</div>
<?php
} else {
    header('Location: painel.php?p=publicacoes&acao=listarPublicacoes');
    exit();
}
?>