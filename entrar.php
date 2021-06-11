<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ManiacksPvP | Login</title>
        <link rel="stylesheet" type="text/css" href="css/entrar.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
    </head>
    <body>
        <span id="label01">MANIACKSPVP</span>
        <br/>
        <span id="label02">Por favor, autentique-se:</span>
        <form action="login.php" method="POST">
            <div id="formLogin">
                <input name="usuario" id="usuario_formLogin" type="text" placeholder="Usuário" autofocus="">
                <input name="senha" id="senha_formLogin" type="password" placeholder="Senha">
                <button type="submit" id="btn_formLogin">Entrar</button>
            </div>
        </form>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
            <div id="erro_formLogin">
                <span id="label01_formLogin">ERRO: Usuário ou senha inválidos.</span>
            </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
    </body>
</html>