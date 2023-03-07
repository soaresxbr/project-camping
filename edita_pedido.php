<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once "database.php";
    //recuperar o id enviando da listagem de pedidos
    $id = $_GET["id"];
    //construir a instruçao em SQL
    $sql = "SELECT * FROM pedidos WHERE id = $id";
    //CRIAR UMA VARIAVEL PARA RECEBER A CONSULTA AO BANCO DE DADOS
    $resultado = mysqli_query($conexao, $sql);
    //converter a consulta ao banco em array que organizar e armazenar uma coleção de elementos.
    $dados = mysqli_fetch_array($resultado);
    ?>

    <nav>
        <?php include "lognavbar.php";  ?>
    </nav>

    <form action="update_pedido.php" method="post">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

        <div class="container p-5 my-5 bg-success text-white ">
            <h1>EDITAR PEDIDO</h1>
            <p>Por favor insira os novos dados de pedido.</p>

            <div class="mb-3 mt-3">
                <label for="login_user" class="form-label">Novo Nome de usuario:</label>
                <input type="text" class="form-control" id="login_user" placeholder="" name="login_user" value="<?php echo $dados['login_user']; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Novo Email:</label>
                <input type="text" class="form-control" id="email" placeholder="" name="email" value="<?php echo $dados['email']; ?>">
            </div>

            <div class="mb-3">
                <label for="celular" class="form-label">Celular com DDD:</label>
                <input type="text" class="form-control" id="celular" placeholder="" name="celular" value="<?php echo $dados['celular']; ?>">
            </div>

            <div class="mb-3 mt-3">
                <label for="produto" class="form-label">Editar nome do produto e a quantidade que deseja:</label>
                <input type="text" class="form-control" rows="5" id="produto" placeholder="" name="produto" value="<?php echo $dados['produto']; ?>"></input>
            </div>

            <div class="mb-3">
                <label for="data_retirada" class="form-label">Nova data de retirada:</label>
                <input type="text" class="form-control" id="data_retirada" placeholder="" name="data_retirada" value="<?php echo $dados['data_retirada']; ?>">
            </div>

            <div class="mb-3">
                <label for="data_devolucao" class="form-label">Nova data de devoluçao:</label>
                <input type="text" class="form-control" rows="5" id="data_devolucao" placeholder="" name="data_devolucao" value="<?php echo $dados['data_devolucao']; ?>">
            </div>

            <br>
            <button type="submit" class="btn btn-light ">ATUALIZAR DADOS</button>
    </form>

    </div>

    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

</body>

</html>