<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include "database.php";
    $sql = "SELECT * FROM camping"; 
    $resultado = mysqli_query($conexao, $sql);
    ?>

    <nav>
        <?php include "lognavbar.php";  ?>
    </nav>

    <div class="container p-5 my-5 bg-success text-white text-center">
        <h1>LISTA DE USUÁRIOS</h1>
    </div>

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id: </th>
                    <th>Nome de usuario: </th>
                    <th>Email: </th>
                    <th>Perfil: </th>
                    <th>Idade:</th>
                    <th>Excluir usuario</th>
                    <th>Editar usuario</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (mysqli_num_rows($resultado) > 0) : //inves de abrir chaves {} podemos usar dois pontos : 
                    while ($data = mysqli_fetch_array($resultado)) :
                ?>
                        <tr class="table-success">
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['login_user']; ?></td>
                            <td><?php echo $data['profile_user']; ?></td>
                            <td><?php echo $data['idade']; ?></td>
                            <td><a class="nav-link" href="delete_user.php?id=<?php echo $data['id']; ?>">Excluir</a></td>
                            <td><a class="nav-link" href="edita_user.php?id=<?php echo $data['id']; ?>">Editar</a></td>
                        <?php
                    endwhile;
                else :
                        ?>
                    <?php
                endif;
                    ?>

                        </tr>
            </tbody>
        </table>
    </div>


    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

</body>

</html>