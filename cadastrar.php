<?php 
    include_once 'class/usuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>Projeto Login - Cadastrar</title>
    </head>
    <body> 
        
        <!--MENSAGEM-->
         <?php
            if(isset($_SESSION['mensagem_erro'])){?>
                <div id="mensagem_erro">
                    <?php echo $_SESSION['mensagem_erro']; ?>
                </div>
            <?php
                unset($_SESSION['mensagem_erro']);


            }elseif(isset($_SESSION['mensagem_sucesso'])){ ?>
                <div id="mensagem_sucesso">
                    <?php echo $_SESSION['mensagem_sucesso']; ?>
                </div>
            <?php
                unset($_SESSION['mensagem_sucesso']);
            }
        ?>

        <!--FORMULÁRIO DE CADASTRO-->
        <div id="corpo">
            <h1>Cadastrar</h1>
            <form name="form" id="form" action="processa-cadastro.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo..." required="required" maxlength="80">
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone..." required="required" maxlength="50">
                <input type="email" name="email" id="email" placeholder="Usuário..." required="required" maxlength="60">
                <input type="password" name="senha" id="senha" placeholder="Senha..." required="required" maxlength="15">
                <input type="password" name="conf_senha" id="conf_senha" placeholder="Confirmar Senha..." required="required" maxlength="15">
                <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
                <a href="index.php">Página login<strong></strong></a>
            </form>
        </div>
        
    </body>
</html>