<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/categ.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <a href="pag2.php" style="text-decoration: none"><p class="logo">LOGO</p></a>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <h1 class="text-center titulo">Selecione a Categoria</h1>

  
  <div class="container">
    <div class="row">
      <!-- ADICIONAR O WHILE DO PHP AQUI -->
      <div class="col-md-3">
        <a href="sintomas.php" id="link">
          <div class="categoria">
            <div class="botao pb-4">
              <img src="img/semft.png" class="img-fluid" />
              <h3>BRAÇO</h3><!-- buscar nome do banco -->
            </div>
        </div>
      </a>
      </div>
      <!-- FECHAR PHP -->

      <div class="col-md-3">
        <a href="sintomas.php" id="link">
          <div class="categoria">
            <div class="botao pb-4">
              <img src="img/semft.png" class="img-fluid" />
              <h3>PERNA</h3>
            </div>
        </div>
      </a>
      </div>

      <div class="col-md-3">
        <a href="sintomas.php" id="link">
          <div class="categoria">
            <div class="botao pb-4">
              <img src="img/semft.png" class="img-fluid" />
              <h3>TORAX</h3>
            </div>
          </div>
      </a>
      </div>

      <div class="col-md-3">
        <a href="sintomas.php" id="link">
          <div class="categoria">
            <div class="botao pb-4">
              <img src="img/semft.png" class="img-fluid" />
              <h3>COSTAS</h3>
            </div>
          </div>
      </a>
      </div>
    </div>
  </div>
<footer>
  <p>Desenvolvido por ©ACCIO - 2018</p>
</footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>