<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <p class="logo">LOGO</p>
  </header>
  <h1 class="text-center titulo">Faça seu login no Sistema</h1>
  <div class="main container">
    <form id="Login" action="cat.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" name="categorias" id="form" placeholder="Nome da Categoria" required>
      </div>
      <div class="form-group">
       <input type="text" name="sintomas" id="form" placeholder="Nome do Sintoma" required>
      </div>
      <div class="col-md-4 mt-5">
       <label for="foto">Foto</label>
      <input type="file" name="arquivos" id="foto" accept="image/jpeg, image/png, image/jpg"/>
       </div>
      <button type="submit" class="btn mt-3" id="botao">CADASTAR</button>
    </form>
  </div>
  
  <footer>
    <p><?php echo "Desenvolvido por ©ACCIO - 2018"; ?></p> 
 </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>