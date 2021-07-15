<?php 
    include "class/usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>Projeto Login - Home</title>
    </head>
    <body>

        <!--MENSAGEM-->
        <?php
            if(isset($_SESSION['mensagem_erro'])){
                echo "<div id='mensagem_erro'>".$_SESSION['mensagem_erro']."</div>";
                unset($_SESSION['mensagem_erro']);
            }elseif(isset($_SESSION['mensagem_sucesso'])){
                echo "<div id='mensagem_sucesso'>".$_SESSION['mensagem_sucesso']."</div>";
                unset($_SESSION['mensagem_sucesso']);
            }
        ?>

        <!--FORMULÁRIO DE LOGIN-->
        <div id="corpo">
            <h1>Entrar</h1>
            <form name="form" id="form" action="processa-login.php" method="POST">
                <input type="email" name="email" id="email" placeholder="Usuário..." required="required" maxlength="60">
                <input type="password" name="senha" id="senha" placeholder="Senha..." required="required" maxlength="32">
                <input type="submit" name="acessar" id="acessar" value="Acessar">
                <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
            </form>
        </div>
    </body>
</html>