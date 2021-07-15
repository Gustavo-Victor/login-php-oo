<?php 

include_once 'class/usuario.php';

//verificar se usuário clicou no botão
if(isset($_POST['acessar'])){

    //verificar se campos não estão vazios
    if(!empty($_POST['email']) AND !empty($_POST['senha'])){
        //filtrar campos
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        
        //instanciar classe usuário
        $usuario = new Usuario();
        $mensagem_erro = $usuario->getMsg();

        //verificar se tem ou não algum erro pra incluir
        if(!$mensagem_erro == "" || !empty($mensagem_erro)){
            $_SESSION['mensagem_erro'] = "Erro: ".$mensagem_erro."!";
        }else{
            //verificar login
            if($usuario->logar($email, $senha)){                                                
                header("Location: painel_usuario.php");
                exit();
            }else{
                $_SESSION['mensagem_erro'] = "Usuário ou senha inválidos!";   
            }
        }
    }else{
        $_SESSION['mensagem_erro'] = "Preencha todos os campos";
    }
}

header("Location: index.php");
exit();
