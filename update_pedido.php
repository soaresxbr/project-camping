<?php
    //inclusao de arquivo de conexao com o banco de dados
    include_once "database.php";

    //recuperar o id enviado com POST
    $id = $_POST["id"];
    $login_user = $_POST["login_user"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $produto = $_POST["produto"];
    $data_retirada = $_POST["data_retirada"];
    $data_devolucao = $_POST["data_devolucao"];

    //criar a string(instruçao) em sql
    $sql = "UPDATE pedidos SET login_user = '$login_user', email = '$email', celular = '$celular', produto = '$produto', data_retirada = '$data_retirada', data_devolucao = '$data_devolucao' WHERE id = $id";

    //conectar ao banco e executar o comando em sql
    if (mysqli_query($conexao, $sql)) {   //redireciona para a pagina desejada
        header("Location: listar_pedido.php");
    } 
    else {
        echo "Não foi possivel excluir.";
    }  
?>
