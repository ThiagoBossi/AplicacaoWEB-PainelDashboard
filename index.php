<?php
include('libs/conexao.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ManiacksPvP | Servidor 1.8.X</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
    </head>
    <body>
        <div class="cabecalho"></div>
            <div class="divisor"></div>
            <div class="menu">
                <div class="itensMenu">
                    <a class="txtMenu" href="#"><i class="fa fa-home" aria-hidden="true"></i> INÍCIO</a>
                    <a class="txtMenu" href="loja.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> LOJA</a>
                    <a class="txtMenu" href="equipe.php"><i class="fa fa-user" aria-hidden="true"></i> EQUIPE</a>
                    <a class="txtMenu" href="regras.php"><i class="fa fa-list-alt" aria-hidden="true"></i> REGRAS</a>
                </div>
            </div>
        <div class="conteudo">
            <div class="subConteudo">
                <div class="banner1_carregando animacao01"></div>
                <div class="banner2_carregando animacao01"></div>
                <div class="banner3_carregando animacao01"></div>
                <div class="banner4_carregando animacao01"></div>

                <div class="banner1_carregado animacao02">
                    <?php
                        $sql = mysqli_query($conexao, "select * from info_index");
                        while ($data = mysqli_fetch_array($sql)) {
                            echo("<style type='text/css'>.banner1_carregado{background-image: url(".$data["img_banner1"].");}</style>");
                        }
                    ?>
                </div>
                <div class="banner2_carregado animacao02">
                    <?php
                        $sql = mysqli_query($conexao, "select * from info_index");
                        while ($data = mysqli_fetch_array($sql)) {
                            echo("<style type='text/css'>.banner2_carregado{background-image: url(".$data["img_banner2"].");}</style>");
                        }
                    ?>
                </div>
                <div class="banner3_carregado animacao02">
                    <?php
                        $sql = mysqli_query($conexao, "select * from info_index");
                        while ($data = mysqli_fetch_array($sql)) {
                            echo("<style type='text/css'>.banner3_carregado{background-image: url(".$data["img_banner3"].");}</style>");
                        }
                    ?>
                </div>
                <div class="banner4_carregado animacao02">
                    <?php
                        $sql = mysqli_query($conexao, "select * from info_index");
                        while ($data = mysqli_fetch_array($sql)) {
                            echo("<style type='text/css'>.banner4_carregado{background-image: url(".$data["img_banner4"].");}</style>");
                        }
                    ?>
                </div>
    
                <div class="noticia1_carregando animacao01"></div>
    
                <div class="ipServidor_carregando animacao01"></div>
                <div class="ipServidor_carregado animacao02"></div>
    
                <div class="discord">
                    <iframe src="https://discordapp.com/widget?id=532636265024323604&theme=light" width="400" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>

                <div class="noticia1_carregado animacao02">
                    <div class="noticia1_conteudo">
                        <div class="noticia1_cabecalho">
                            <div class="noticia1_avatarAutor">
                            <?php
                                $idUltimaNoticia = 0;
                                $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                if ($sql1) {
                                    $idUltimaNoticia = mysqli_fetch_row($sql1);
                                    $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                    while ($data = mysqli_fetch_array($sql2)) {
                                        echo("<style type='text/css'>.noticia1_avatarAutor{background-image: url('https://cravatar.eu/avatar/".$data["noticia_autor"]."/70');}</style>");
                                    }
                                }
                            ?>
                            </div>
                            <span class="noticia1_postadoPor">Postado por <?php
                                $idUltimaNoticia = 0;
                                $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                if ($sql1) {
                                    $idUltimaNoticia = mysqli_fetch_row($sql1);
                                    $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                    while ($data = mysqli_fetch_array($sql2)) {
                                        echo($data["noticia_autor"]);
                                    }
                                }
                            ?></span>
                            <span class="noticia1_data"><?php
                                $idUltimaNoticia = 0;
                                $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                if ($sql1) {
                                    $idUltimaNoticia = mysqli_fetch_row($sql1);
                                    $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                    while ($data = mysqli_fetch_array($sql2)) {
                                        echo date("d/m/Y", strtotime($data["noticia_data"]));
                                    }
                                }
                            ?></span>
                            <div class="noticia1_imgFundo">
                                    <?php
                                        $idUltimaNoticia = 0;
                                        $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                        if ($sql1) {
                                            $idUltimaNoticia = mysqli_fetch_row($sql1);
                                            $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                            while ($data = mysqli_fetch_array($sql2)) {
                                                echo("<style type='text/css'>.noticia1_imgFundo{background-image: url('".$data["noticia_imgFundo"]."');}</style>");
                                            }
                                        }
                                    ?>
                                <span class="noticia1_titulo">
                                    <?php
                                        $idUltimaNoticia = 0;
                                        $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                        if ($sql1) {
                                            $idUltimaNoticia = mysqli_fetch_row($sql1);
                                            $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                            while ($data = mysqli_fetch_array($sql2)) {
                                                echo($data["noticia_titulo"]);
                                            }
                                        }
                                    ?>
                                </span>
                                <span class="noticia1_subTitulo">
                                    <?php
                                        $idUltimaNoticia = 0;
                                        $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                        if ($sql1) {
                                            $idUltimaNoticia = mysqli_fetch_row($sql1);
                                            $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                            while ($data = mysqli_fetch_array($sql2)) {
                                                echo($data["noticia_subtitulo"]);
                                            }
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="noticia1_corpo">
                            <?php
                                $idUltimaNoticia = 0;
                                $sql1 = mysqli_query($conexao, "select max(noticia_id) from noticia");
                                if ($sql1) {
                                    $idUltimaNoticia = mysqli_fetch_row($sql1);
                                    $sql2 = mysqli_query($conexao, "select * from noticia where noticia_id=$idUltimaNoticia[0];");
                                    while ($data = mysqli_fetch_array($sql2)) {
                                        echo($data["noticia_conteudo"]);
                                }
                            }
                            ?>
                        </div>
                        <div class="noticia1_rodape">
                            <button class="noticia1_btn">Continuar Lendo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rodape"></div>
    </body>
</html>