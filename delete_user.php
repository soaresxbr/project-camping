<?php 
    //inclusao de arquivo de conexao com o banco de dados
    include_once "database.php";

    //recuperar o id enviado com GET
    $id = $_GET["id"]; 

    //criar a string(instruçao) em sql
    $sql = "DELETE FROM camping WHERE id = $id"; 

    //conectar ao banco e executar o comando em sql
    if(mysqli_query($conexao, $sql)){   //redireciona para a pagina principal
        header("Location: listar_user.php");
    }
    else{
        echo "Não foi possivel excluir.";
    }
?>
