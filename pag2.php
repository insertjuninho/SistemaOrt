<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/pag2.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <p class="logo">LOGO</p>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <h1 class="text-center titulo"><?php echo 'Nome do Médico' ?></h1>
  <div class="container">
    <!-- FORM DE PESQUISA -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-12">
        <form class="card card-sm" method="get">
          <div class="card-body row no-gutters align-items-center">
            <div class="col-auto">
              <img src="img/search.png" class="img-fuid">
            </div>
            <div class="col">
              <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar Paciente">
              <button class="btn" type="submit" id="botao">Pesquisar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
      <!--------->
      <!-- BOTÕES -->
      <div class="itens text-center">
        <a href="categorias.php" class="btn"><img src="img/paci.png" width="35" class="mr-2 img-fluid">CADASTRAR NOVO PACIENTE</a>
      </div>
      <div class="itens text-center">
        <a href="" class="btn"><img src="img/lista.png" class="mr-2 img-fluid">LISTA DE PACIENTES</a>
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