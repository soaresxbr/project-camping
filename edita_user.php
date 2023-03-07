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
  //recuperar o id enviando da listagem de funcionario
  $id = $_GET["id"];
  //construir a instruçao em SQL
  $sql = "SELECT * FROM camping WHERE id = $id";
  //CRIAR UMA VARIAVEL PARA RECEBER A CONSULTA AO BANCO DE DADOS
  $resultado = mysqli_query($conexao, $sql);
  //converter a consulta ao banco em array que organizar e armazenar uma coleção de elementos.
  $dados = mysqli_fetch_array($resultado);
  ?>

  <nav>
    <?php include "lognavbar.php";  ?>
  </nav>

  <form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

    <div class="container p-5 my-5 bg-success text-white ">
      <h1>EDITAR CADASTRO</h1>
      <p>Por favor insira os novos dados.</p>

      <div class="mb-3">
        <label for="email" class="form-label">Novo Email:</label>
        <input type="text" class="form-control" id="email" placeholder="" name="email" value="<?php echo $dados['email']; ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="login_user" class="form-label">Novo Nome de usuario:</label>
        <input type="text" class="form-control" id="login_user" placeholder="" name="login_user" value="<?php echo $dados['login_user']; ?>">
      </div>

      <div class="mb-3">
        <label for="password_user" class="form-label">Nova Senha:</label>
        <input type="password" class="form-control" id="password_user" placeholder="" name="password_user" value="<?php echo $dados['password_user']; ?>">
      </div>

      <div class="mb-3">
        <label for="profile_user" class="form-label">Selecione o novo perfil (administrador ou cliente):</label>
        <select class="form-select" id="profile_user" name="profile_user" value="<?php echo $dados['profile_user']; ?>">
          <option>cliente</option>
          <option>administrador</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Nova Idade:</label>
        <input type="text" class="form-control" id="idade" placeholder="" name="idade" value="<?php echo $dados['idade']; ?>">
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