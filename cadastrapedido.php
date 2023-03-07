<?php
    include "database.php";

    //recebendo os dados do formulario form pedido
     $login_user = $_POST["login_user"];
    $email = $_POST["email"];  
    $celular = $_POST["celular"];
    $produto = $_POST["produto"];
    $data_retirada = $_POST["data_retirada"];
    $data_devolucao = $_POST["data_devolucao"];

    //insira dentro de pedidos                       os valores: 
     $sql = "INSERT INTO pedidos (login_user, email,  celular, produto, data_retirada, data_devolucao)  VALUES ('$login_user', '$email', '$celular', '$produto', '$data_retirada', '$data_devolucao')";

     if (mysqli_query($conexao, $sql))
     {
         header("location: loghomepage.php");
     }
     else
     {
         echo "erro ao cadastrar usuario";
     }

?>