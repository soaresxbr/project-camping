<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ACAMPA MANIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comofunfa.php">Como funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Nossos produtos</a>
                    </li>
                    <!--<li class="nav-item">
            <a class="nav-link" href="formpedido.php">Pedido</a>
          </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="contatooo.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="produtoimg/fogao.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">Cozinha Compacta com Fog??o</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-">Di??ria: R$ 75</span>
                    </div>
                    <p class="lead">As cozinhas compactas MaxCamping s??o fabricados com materiais leves de alta qualidade e resist??ncia, ?? um item indispens??vel para utilizada em casa, no camping, no caminh??o, no barco, durante a pescaria entre outras aplica????es. <br>
Medidas: 
Altura: 49 cm;
Largura: 37 cm;
Comprimento: 50 cm; <br>
Capacidade: 
Reservat??rio de ??gua limpa: 5 litros
Reservat??rio de ??gua servida: 5 litros
Gaveta para talheres: 16 pe??as (aproximado)
Espa??o para utensilios/mantimentos: 20 litros
Cuba pia: 3 litros</p>
                </div>
                <h7></h7>
            </div>
        </div>
    </section> 

    <div>
        <footer>
        <?php include "contato.php"?>
        </footer>
    </div>


    <div>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

</body>

</html>