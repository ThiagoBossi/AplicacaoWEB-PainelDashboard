<div class="formPublicacao">
    <span class="label01_formPublicacao">Criar nova Publicação</span>
    <div class="conteudoFormPublicacao">
        <form method="POST" action="criarPublicacaoNova.php">
            <div class="itensCabecalho">
                <div class="itens">
                    <input class="txtAutor_formPublicacao" name="nomeAutor" type="text" disabled="" value="<?php echo($_SESSION['nome'])?>" required/>
                    <input class="txtImgFundo_formPublicacao" name="imgFundo" type="text" placeholder="Imagem de Fundo"/>
                    <input class="txtTitulo_formPublicacao" name="titulo" type="text" placeholder="Título da Publicação" required autofocus=""/>
                    <input class="txtSubTitulo_formPublicacao" name="subTitulo" type="text" placeholder="Sub-Título da Publicação" required/>
                </div>
                <div class="imgFundoBox"></div>
            </div>
            <textarea class="txtCorpo_formPublicacao" name="corpo" type="text" required></textarea>
            <button type="submit" class="btnPublicar_formPublicacao">Publicar</button>
        </form>
    </div>
</div>