<!doctype html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/histPac.css">

  <title>SISTEMA</title>
</head>

<body>
  <header>
    <p class="logo">LOGO</p>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <h1 class="text-center titulo">Historico do paciente <?php echo "nome do pac" ?></h1>
  <div class="container">
    <div class="vertical-tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Página 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">Página 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Página 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings">Página 4</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings">Página 5</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="settings">Página 6</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">Página 7</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="pag1" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 1</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>
        <div class="tab-pane" id="pag2" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 2</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>
        <div class="tab-pane" id="pag3" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 3</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>
        <div class="tab-pane" id="pag4" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 4</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>

        <div class="tab-pane" id="pag5" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 5</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>

        <div class="tab-pane" id="pag6" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 6</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>

        <div class="tab-pane" id="pag7" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>Pergunta 7</h3>
            <p>sintoma selecionoado</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer>
    <p>
      <?php echo "Desenvolvido por ©ACCIO - 2018"; ?>
    </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>