<?php
session_start();
include('libs/verifica_login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ManiacksPvP | Painel Administrativo</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/painel.css"/>
        <link rel="stylesheet" type="text/css" href="css/configuracoes.css"/>
        <link rel="stylesheet" type="text/css" href="css/cadastros.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
    </head>
    <body>
        <div class="cabecalho"></div>
            <div class="divisor"></div>
            <div class="menu">
                <div class="itensMenu">
                    <a class="txtMenu" href="painel.php?p=inicio"><i class="fa fa-home" aria-hidden="true"></i> INÍCIO</a>
                    <a class="txtMenu" href="painel.php?p=usuarios"><i class="fa fa-user" aria-hidden="true"></i> USUÁRIOS</a>
                    <a class="txtMenu" href="painel.php?p=vendas"><i class="fa fa-area-chart" aria-hidden="true"></i> VENDAS</a>
                    <a class="txtMenu" href="painel.php?p=publicacoes"><i class="fa fa-newspaper-o" aria-hidden="true"></i> PUBLICAÇÕES</a>
                    <a class="txtMenu" href="painel.php?p=configuracoes"><i class="fa fa-cog" aria-hidden="true"></i> CONFIGURAÇÕES</a>
                </div>
                <div class="avatarUsuario">
                    <?php
                        echo("<style type='text/css'>.avatarUsuario{background-image: url('https://cravatar.eu/avatar/".$_SESSION["nome"]."/50');}</style>");
                    ?>
                </div>
                <div class="itensMenu_sair">
                    <a name="sair" class="txtMenu" href="logout.php"> SAIR</a>
                </div>
            </div>
        <div class="conteudo">
            <div class="subConteudo">
                <div class="painel_carregando animacao01"></div>  
                <div class="painel_carregado animacao02">
                    <?php
                        $valorURL = @$_GET['p'];
                        if($valorURL == 'usuarios') {
                            require_once('usuarios.php');
                            $acao = @$_GET['acao'];
                            if($acao == 'cadastrarNovo') {
                                require_once('cadastrarUsuario.php');
                            }

                            if($acao == 'listarUsuarios') {
                                require_once('listarUsuarios.php');
                            }
                        }

                        if($valorURL == 'alterarUsuario') {
                            require_once('alterarUsuario.php');
                        }

                        if($valorURL == 'removerUsuario') {
                            require_once('removerUsuario.php');
                        }

                        if($valorURL == 'configuracoes') {
                            require_once('configuracoes.php');
                            $acao = @$_GET['acao'];
                            if($acao == 'layout') {
                                require_once('alterarBanners.php');
                            }
                        }

                        if($valorURL == 'publicacoes') {
                            require_once('publicacoes.php');
                            $acao = @$_GET['acao'];
                            if($acao == 'criarPublicacao') {
                                require_once('criarPublicacao.php');
                            }

                            if($acao == 'listarPublicacoes') {
                                require_once('listarPublicacoes.php');
                            }
                        }

                        if($valorURL == 'alterarPublicacao') {
                            require_once('alterarPublicacao.php');
                        }

                        if($valorURL == 'removerPublicacao') {
                            require_once('removerPublicacao.php');
                        }
                    ?>

                    <?php
                        if(isset($_SESSION['cadastroExistente_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroExistente_formUsuario'>ERRO: O usuário informado já está cadastrado.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['cadastroExistente_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['cadastroRealizado_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='cadastroRealizado_formUsuario'>SUCESSO: Usuário cadastrado com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['cadastroRealizado_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroCadastro_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroCadastro_formUsuario'>ERRO: Ocorreu um erro ao realizar o cadastro.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroCadastro_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['alteracaoRealizada_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='alteracaoRealizada_formUsuario'>SUCESSO: Cadastro alterado com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['alteracaoRealizada_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroAlteracao_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroAlteracao_formUsuario'>ERRO: Ocorreu um erro ao alterar esse cadastro.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroAlteracao_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['alteracaoRealizada_formBanner'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='alteracaoRealizada_formBanner'>SUCESSO: Banners alterados com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['alteracaoRealizada_formBanner']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroAlteracao_formBanner'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroAlteracao_formBanner'>ERRO: Ocorreu um erro ao alterar os banners.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroAlteracao_formBanner']);
                    ?>

                    <?php
                        if(isset($_SESSION['remocaoRealizada_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='remocaoRealizada_formUsuario'>SUCESSO: Cadastro removido com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['remocaoRealizada_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroRemocao_formUsuario'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroRemocao_formUsuario'>ERRO: Ocorreu um erro ao remover esse cadastro.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroRemocao_formUsuario']);
                    ?>

                    <?php
                        if(isset($_SESSION['publicacaoRealizada'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='remocaoRealizada_formUsuario'>SUCESSO: Artigo publicado com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['publicacaoRealizada']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroPublicacao'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroRemocao_formUsuario'>ERRO: Ocorreu um erro ao publicar esse artigo.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroPublicacao']);
                    ?>

                    <?php
                        if(isset($_SESSION['alteracaoRealizada_formNoticia'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='remocaoRealizada_formUsuario'>SUCESSO: Artigo alterado com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['alteracaoRealizada_formNoticia']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroAlteracao_formNoticia'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroRemocao_formUsuario'>ERRO: Ocorreu um erro ao alterar esse artigo.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroAlteracao_formNoticia']);
                    ?>

                    <?php
                        if(isset($_SESSION['remocaoRealizada_formNoticia'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='remocaoRealizada_formUsuario'>SUCESSO: Artigo removido com sucesso!</span></div>
                    <?php
                        endif;
                        unset($_SESSION['remocaoRealizada_formNoticia']);
                    ?>

                    <?php
                        if(isset($_SESSION['erroRemocao_formNoticia'])):
                    ?>
                        <div id='notificacao_formLogin'><span class='erroRemocao_formUsuario'>ERRO: Ocorreu um erro ao remover esse artigo.</span></div>
                    <?php
                        endif;
                        unset($_SESSION['erroRemocao_formNoticia']);
                    ?>
                </div>
            </div>
        </div>
        <!--<div class="rodape"></div>-->
    </body>
</html>