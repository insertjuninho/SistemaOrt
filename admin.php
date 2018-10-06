<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/admin.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <p class="logo">LOGO</p>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <h1 class="text-center titulo"><?php echo 'Nome do ADM' ?></h1>
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
              <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar">
              <button class="btn" type="submit" id="botao">Pesquisar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <!--------->
    <!-- BOTÕES -->
    <div class="container">
    <div class="itens mt-4">
    <div class="box">
      <a id="a" href="cadMedico.php">
        <div class="card-counter">
          <p>CADASTAR MÉDICO</p>
        </div>
      </a>
       <a id="a" href="">
        <div class="card-counter">
          <p>LISTA DE MÉDICOS</p>
        </div>
      </a>  
    </div>
    <div class="box">
      <a id="a" href="cadMedico.php">
        <div class="card-counter">
          <p>CADASTAR PACIENTE</p>
        </div>
      </a>
       <a id="a" href="">
        <div class="card-counter">
          <p>LISTA DE PACIENTES</p>
        </div>
      </a>  
    </div>

    <div class="box">
      <a id="a" href="">
        <div class="card-counter">
          <P>ADCIONAR CATEGORIA</P>
        </div>
      </a>  
      <a id="a" href="">
        <div class="card-counter" >
          <P>EDITAR CATEGORIAS</P>
        </div>
      </a>  
    </div>

    <div class="box">
      <a id="a" href="">
        <div class="card-counter">
          <P>ADCIONAR SINTOMA</P>
        </div>
      </a>  
      <a id="a" href="">
        <div class="card-counter">
          <P>EDITAR SINTOMAS</P>
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