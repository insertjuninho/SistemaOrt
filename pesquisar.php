<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/pesq.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <p class="logo">LOGO</p>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <?php 
  include "banco.php";

  if(empty($_GET['pesq'])){
    $query = "select * from paciente";     
  }else{
    $p = $_GET['pesq'];
    $query = "select * from paciente where nomePac like '%$p%' or idPac like '%$p%' ";
  }
  $consulta = mysqli_query($con, $query);
  $total = mysqli_num_rows($consulta);
  if($total == 0){
    echo "<h3 class='text-danger text-center mt-5' style='height:45%'>Nenhum Item encontrado!</h3>";
  }
  ?>
  <div class="container d-flex justify-content-center">
      <?php
    while($p = mysqli_fetch_array($consulta)){
    $id = $p['idPac'];
    $nome = $p['nomePac'];

  ?>
      <div class="col-md-10">
        <div class="card mt-5">
          <div class="card-header">
            <h4 class="card-title"><?php echo "Identeifcação - $id" ?></h4>
          </div>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
              <p class="card-text"><?php echo $nome ?></p>
            </div>
             <div class="card-footer">
              <a href="ediPac.php"><button type="button" rel="tooltip" class="btn btn-info btn-just-icon" data-original-title="" title="">
                <i class="material-icons">Detalhes</i>
              </button></a>
              <a href="historicoPAC.php"><button type="button" rel="tooltip" class="btn btn-success btn-just-icon" data-original-title="" title="">
                <i class="material-icons">histórico</i>
              </button></a>
              <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon" data-original-title="" title="">
                <i class="material-icons">deletar</i>
              </button> 
              </div>            
            </div>

          </div>
        </div>
    <?php } ?>
    </div>
  
  <footer>
    <p><?php echo "Desenvolvido por ©ACCIO - 2018"; ?></p> 
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>