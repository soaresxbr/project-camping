<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <nav>
        <?php include "navbar.php";  ?>
    </nav>

    <form action="validauser.php" method="post">

        <div class="container p-5 my-5 bg-success text-white ">
            <h1>INSIRA OS DADOS PARA ENTRAR</h1>

            <div class="mb-3 mt-3">
                <label for="login_user" class="form-label">Nome de usuario:</label>
                <input type="text" class="form-control" id="login_user" placeholder="" name="login_user">
            </div>

            <div class="mb-3">
                <label for="password_user" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="password_user" placeholder="" name="password_user">
            </div>

            <div class="mb-3">
                <label for="profile_user" class="form-label">Selecione o perfil (administrador ou cliente):</label>
                <select class="form-select" id="profile_user" name="profile_user">
                    <option>cliente</option>
                    <option>administrador</option>
                </select>
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Ficar conectado
                </label>
            </div>

            <button type="submit" class="btn btn-light ">Entrar</button>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];

        echo '<p>' . $mensagem . '</p>';

        unset($_SESSION['mensagem']);
    }
    ?>

    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

</body>

</html>