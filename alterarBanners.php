<?php
include('libs/verifica_login.php');

$query_select = "select * from info_index where 1";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
?>

<div class="layout_formConfiguracoes">
    <span class="label01_formConfiguracoes">Alterar Banners</span>
    <div class="conteudoForm">
        <form method="POST" action="alterarBannersInicio.php">
            <input class="banner1_formBanner txtBannerBorda" name="banner1" type="text" placeholder="Link da Imagem - Banner 1" required autofocus="" value="<?php echo($array['img_banner1']);?>"/>
            <input class="banner2_formBanner txtBannerBorda" name="banner2" type="text" placeholder="Link da Imagem - Banner 2" required value="<?php echo($array['img_banner2']);?>"/>
            <input class="banner3_formBanner txtBannerBorda" name="banner3" type="text" placeholder="Link da Imagem - Banner 3" required value="<?php echo($array['img_banner3']);?>"/>
            <input class="banner4_formBanner txtBannerBorda" name="banner4" type="text" placeholder="Link da Imagem - Banner 4" required value="<?php echo($array['img_banner4']);?>"/>
            <button type="submit" class="btnSalvar_formUsuario">Salvar</button>
        </form>
    </div>
</div>