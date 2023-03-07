<?php 
    
    //incluindo o arquivo de banco de dados
    include "database.php";

    //iniciar sessao
    session_start();

    //recuperar os dados do formulario
    $login = $_POST["login_user"];
    $password = $_POST["password_user"];

    //identificar se os campos estao vazios
    if(empty($login))
    {
        $_SESSION['mensagem']="Preencha o campo nome de usuario";
        header("Location: loginadm.php");
    }
    elseif(empty($password))
    {
        $_SESSION['mensagem']="Preencha o campo senha";
        header("location: loginadm.php");
    }

    else
    {
        //sql para consulta de usuario
        $sql = "SELECT * FROM  camping WHERE login_user = '$login' AND password_user = '$password'"; 

        //recupera dados do banco 
        $resultado = mysqli_query($conexao, $sql);

        //manipula o retorno com um array associativo 
        $dados = mysqli_fetch_assoc($resultado);

        //validar o login e senha com retorno do banco de dados 
        if($dados['login_user'] == $login and $dados['password_user'] == $password)
        {
            //cria um array com os dados do usuario 
            $usuario = array("login" => $dados['login_user'], "senha" => $dados['password_user'], "perfil" => $dados ['profile_user']); 

            //coloca o array do usuario na sessao 
            $_SESSION['usuario'] = $usuario; 

            //redirecionar a pagina do painel 
            header("Location: painel.php");
        } 
    else
    {
        $_SESSION['mensagem'] = "Nome de usuario ou senha incorreto, verifique tambem o perfil.";
        header("Location: loginadm.php");
    }
     
    }

?>    
