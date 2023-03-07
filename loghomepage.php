<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <title>AM</title>
</head>

<body>

  <nav>
    <?php include "lognavbar.php";  ?>
  </nav>

  <header>
    <?php include "header.php"; ?>
  </header>

  <div>
    <main>

      <div class="container p-5 my-5 border">
        <h1>Faça ja o seu pedido!</h1>
        <h5>
          Clicando no botao abaixo você sera redirecionado para a pagina de pedidos, onde deve colocar os dados de acordo com os campos, contendo seu nome, email telefone, itens de interesse, datas de retirada e devolução. </h5>
        <a href="formpedido.php" class="btn btn-success">Fazer pedido</a>
      </div>

      <?php include "aboutus.php" ?>
      <?php include "feedback.php" ?>

      <div class="container p-5 my-5 bg-success text-white text-center">
        <h1>Fale com a gente</h1>
        <h2>Email: contato@acampamania.com.br </h2>
        <h2>WhatsApp: (11) 99999.9999</h2>
        <p>Qualquer duvida basta entrar em contato conosco da forma que preferir. Iremos te atender com o maior prazer! :)</p>
      </div>

      <?php include "localiza.php" ?>
    </main>
  </div>

  <div>
    <footer>
      <?php include "footer.php"; ?>
    </footer>
  </div>


</body>

</html>