<?php
    include "database.php";

    //recebendo os dados do formulario formcadastrouser
    $email = $_POST["email"];
    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    $profile_user = $_POST["profile_user"];
    $idade = $_POST["idade"];

    //insira dentro de camping                       os valores: 
     $sql = "INSERT INTO camping (email, login_user, password_user, profile_user, idade)  VALUES ('$email', '$login_user', '$password_user', '$profile_user', '$idade')";

     if (mysqli_query($conexao, $sql))
     {
         header("location: loginuser.php");
     }
     else
     {
         echo "erro ao cadastrar usuario";
     }

?>