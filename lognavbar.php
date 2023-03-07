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
  session_start();
  $usuario =  $_SESSION['usuario'];
  ?>

  <nav class="navbar navbar-expand-sm navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="loghomepage.php">ACAMPA MANIA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="loghomepage.php">Pagina Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comofunfa.php">Como funciona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">Nossos produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formpedido.php">Pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contatooo.php">Contato</a>
          </li>
        </ul>
      </div>

      <div class="col-12 col-md-4  text-md-right">
        <h5 class="text-light">Bem vindo <?php print($usuario['login']) ?></h5>
      </div>

      </ul>
    </div>
    </div>
  </nav>


</body>

</html>