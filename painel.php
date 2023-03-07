<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <nav>
        <?php include "lognavbar.php";  ?>
    </nav>

    <div class="container p-5 my-5 bg-success text-white text-center">
        <h1>AREA DE ADMINISTRAÇÃO</h1>
        <h1>
            <?php
            if ($usuario['perfil'] != "administrador") {
                echo "Acesso negado, opçao valida apenas para administrador";
            } else {
            ?>
    </div>
    </h1>
    <div class="container p-5 my-5 border text-center">
        <h2>Olá <?php print($usuario['login']) ?> esta é a area de administraçao.</h2>
        <p>Você tem perfil de <?php print($usuario['perfil']) ?> </p>
        <hr> <br><br>

        <h4>Selecione a opção desejada: </h4>
        <br>
        <a href="listar_user.php" class="btn btn-success">LISTA DE USUARIOS</a>
        <a href="listar_pedido.php" class="btn btn-success">LISTA DE PEDIDOS</a>
    <?php } ?>
    </div>

    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

</body>

</html>