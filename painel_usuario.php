<?php 
    include "class/usuario.php";
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == false){
        $_SESSION['mensagem_erro'] = "Acesso negado!";
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>Projeto Login - Painel Usuário</title>
    </head>
    <body>

        <!--MENSAGEM-->
        <?php
            if(isset($_SESSION['mensagem_sucesso'])){
                echo "<script>alert('Usuário logado com sucesso!');</script>";
                echo "<div id='mensagem_sucesso'>".$_SESSION['mensagem_sucesso']."</div>";
                unset($_SESSION['mensagem_sucesso']);
            }
        ?>

        <!--DADOS DO USUÁRIO-->
        <div id="corpo">
            <h1>Dados do Usuário</h1>
            <ul>
                <li style="margin-top:10%;"><b>Nome: </b> <?php echo $_SESSION['nome']; ?></li>
                <li><b>Telefone: </b> <?php echo $_SESSION['telefone']; ?></li>
                <li><b>E-mail: </b> <?php echo $_SESSION['email']; ?></li>
                <li><b>Senha: </b> <?php echo $_SESSION['senha']; ?></li>
            </ul>
            <a style="margin-top:10%;" id="sair"  onclick="alert('Saindo... ')" href="sair.php" >Sair</a>
        </div>

        
    </body>
</html>