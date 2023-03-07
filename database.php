<?php    
    //Definiçao e atribuiçao de valores as constantes
    define("SERVERNAME", "localhost");//constante, usa se letra maiuscula
    define("SERVERUSER", "root");
    define("SERVERPASSWORD", "");
    define("DATABASENAME", "brazcubas");
    //Funçao de conexao utilizando constantes 
    $conexao = mysqli_connect(SERVERNAME, SERVERUSER, SERVERPASSWORD, DATABASENAME);     
?>