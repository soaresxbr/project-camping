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

    <form action="cadastrapedido.php" method="post">

        <div class="container p-5 my-5 bg-success text-white ">
            <h1>PREENCHA OS CAMPOS ABAIXO <br> E FAÇA O SEU PEDIDO: </h1>



            <div class="mb-3 mt-3">
                <label for="login_user" class="form-label">Nome de usuario:</label>
                <input type="text" class="form-control" id="login_user" placeholder="" name="login_user">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="" name="email">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular com DDD:</label>
                <input type="text" class="form-control" id="celular" placeholder="" name="celular">
            </div>
            <div class="mb-3 mt-3">
                <label for="produto">Nome do produto e a quantidade que deseja alugar:</label>
                <textarea class="form-control" rows="5" id="produto" name="produto" placeholder="ex: 1 Fogareiro Apolo; 2 barracas Quechua 2 Seconds 3."></textarea>
            </div>
            <div class="mb-3">
                <label for="data_retirada" class="form-label">Data e hora de retirada:</label>
                <input type="text" class="form-control" id="data_retirada" placeholder="ex: dd/mm/aa as hora:min" name="data_retirada">
            </div>
            <div class="mb-3">
                <label for="data_devolucao" class="form-label">Data e hora de devolução:</label>
                <input type="text" class="form-control" id="data_devolucao" placeholder="ex: dd/mm/aa as hora:min" name="data_devolucao">
            </div>
            <br>
            <button type="submit" class="btn btn-light ">Enviar</button>
        </div>
    </form>

    </div>

    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>




</body>

</html>