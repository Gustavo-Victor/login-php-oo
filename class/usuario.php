<?php 
session_start();

//CLASSE USUÁRIO
class Usuario{
    //ATRIBUTOS
    private $pdo;
    private $msg = "";

    //MÉTODOS
    #get Message
    public function getMsg(){
        return $this->msg;
    }

    #conectar com bd
    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:host=localhost; dbname=projeto_login", "root", "");
        }catch(PDOException $error){
            $this->msg = $error->getMessage();
            //die();
        }
    }
        
              
    #cadastrar
    public function cadastrar($nome, $telefone, $email, $senha){
        #verificar se já existe e-mail cadastrado 
        $sql = "SELECT id_usuario FROM usuario WHERE email = ?";
        $prepare = $this->pdo->prepare($sql);
        $prepare->bindParam(1, $email);
        $prepare->execute();
        if($prepare->rowCount()>0){
            return false;
        }else{
            #caso contrário, cadastre o novo uusário no sistema
            $sql = "INSERT INTO usuario (nome, telefone, email, senha) VALUES (?, ?, ?, ?)";
            $prepare = $this->pdo->prepare($sql);
            $prepare->bindParam(1, $nome);
            $prepare->bindParam(2, $telefone);
            $prepare->bindParam(3, $email);
            $prepare->bindParam(4, md5($senha));
            $prepare->execute();
            return true;
        }
    }

    #logar
    public function logar($email, $senha){
        #verificar se existe aquele email e senha passados
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $prepare = $this->pdo->prepare($sql);
        $prepare->bindParam(1, $email);
        $prepare->bindParam(2, md5($senha));
        $prepare->execute();

        #entrar
        if($prepare->rowCount()>0){
        $dados = $prepare->fetch(/*PDO::FETCH_ASSOC*/);
            $_SESSION['autenticado'] = true;
            $_SESSION['mensagem_sucesso'] = "Seja bem vindo(a) ".$dados['nome']."!";
            $_SESSION['id_usuario'] = $dados['id_usuario'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['telefone'] = $dados['telefone'];    
            $_SESSION['email'] = $dados['email'];
            $_SESSION['senha'] = $senha;
            return true; //logado com sucesso
        #falha
        }else{
            $_SESSION['autenticado'] = false;
            return false; //falha no login
        }
    }
}