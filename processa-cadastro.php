<?php 

include_once 'class/usuario.php';

//verificar se usuário clicou no botão
if(isset($_POST['cadastrar'])){

    //verificar se campos não estão vazios
    if(!empty($_POST['nome']) AND !empty($_POST['telefone']) AND !empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['conf_senha'])){
        //filtrar campos
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $senha = addslashes($_POST['senha']);
        $confirmar_senha = addslashes($_POST['conf_senha']);

        //instanciar classe usuário
        $usuario = new Usuario();
        $mensagem_erro = $usuario->getMsg();

        //verificar se tem ou não algum erro pra incluir
        if(!$mensagem_erro == "" || !empty($mensagem_erro)){
            $_SESSION['mensagem_erro'] = "Erro: ".$mensagem_erro."!";
        }else{
            //verificar se senhas estão iguais
            if($senha == $confirmar_senha){
                //verificar se deu certo pra incluir            
                if($usuario->cadastrar($nome, $telefone, $email, $senha)){
                    $_SESSION['mensagem_sucesso'] = "Usuário cadastrado com sucesso!";
                }else{
                    $_SESSION['mensagem_erro'] = "Já existe esse usuário no sistema! Insira outro e-mail";
                    
                }
            }else{
                $_SESSION['mensagem_erro'] = "Senhas não correspondem";
            }
        }
    }else{
        $_SESSION['mensagem_erro'] = "Preencha todos os campos";
    }
}

header("Location: cadastrar.php");
exit();
