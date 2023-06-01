<?php

    //incluir o arquivo de conexão com o banco de dados
    include "database.php";
    session_start();
    //iniciar uma sessão no php

    //recuperar os dados enviados do formulário
    $login = $_POST['login_user'];
    $password = $_POST['password_user'];
    $email = $_POST['login_email'];
    $celular = $_POST['login_tel'];

    //criar uma validação para verificar se os campos do formulário estão preenchidos
if(empty($login)){
    $_SESSION['mensagem'] = "Preencha o campo login";
    header("Location: index.php");
}
elseif(empty($password)){
    $_SESSION['mensagem'] = "Preencha o campo password";
    header("Location: index.php");
}else{
    //criar o sql para verificar os dados
    $sql_login = "SELECT * FROM bookshop WHERE login_user = '$login' AND login_password = '$password'";

    //recuperar os dados do banco
    $resultado = mysqli_query($conexao, $sql_login);

    //converter o resultado em um array associativo
    $dados = mysqli_fetch_array($resultado);

    //validar o login e senha com o retorno dos dados
    if($dados['login_user'] == $login and $dados['login_password'] == $password){
        
        //criar um array com os dados do usuário
        $usuario = [
            "login" => $dados['login_user'], 
            "senha" => $dados['login_password'], 
            "perfil" => $dados['login_profile'],
        ];

        
        //colocar o array de usuário na sessão
        $_SESSION['usuario'] = $usuario;

        //redirecionando para a página de verificação
        if($_SESSION['usuario']['perfil'] == 'admin'){
            header("Location: painel.php");
        } else {
            header("Location: painel_cliente.php");
        }

        
    
    }
    else {
        //criar na sessão de msg o aviso de erro de login e senha
        $_SESSION['mensagem'] = "Login ou senha inválidos";
        header("Location: index.php");
    }
}
