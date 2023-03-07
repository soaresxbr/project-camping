<?php 
    //inclusao de arquivo de conexao com o banco de dados
    include_once "database.php";

    //recuperar o id enviado com POST
    $id = $_POST["id"]; 
    $email = $_POST["email"];
    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    $profile_user = $_POST["profile_user"];
    $idade = $_POST["idade"];

    //criar a string(instruçao) em sql
    $sql = "UPDATE camping SET email = '$email', login_user = '$login_user', password_user = '$password_user', profile_user = '$profile_user', idade = '$idade' WHERE id = $id"; 

    //conectar ao banco e executar o comando em sql
    if(mysqli_query($conexao, $sql))
    {   //redireciona para a pagina desejada
        header("Location: listar_user.php");
    }
    else{
        echo "Não foi possivel excluir.";
    } 
?>
