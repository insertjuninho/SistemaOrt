<?php
include "banco.php";
$sql    = ("SELECT * FROM categorias");
$result = mysqli_query($con , $sql);
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/listpac.css">

  <title>SISTEMA</title>
</head>
<body>
  <header>
    <p class="logo">LOGO</p>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <div class="container mb-5">
    <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar Categoria" id="myInput">
    <table class="table table-striped" id="func">
      <thead>
        <tr>
          <th style="width:3%">ID</th>
          <th style="width:50%">Nome</th>
          <th style="width:45%">Ação</th>
        </tr>
      </thead>
      <?php     
      while ($f = mysqli_fetch_array($result)) {
        $id   = $f['idCat'];
        $idc = base64_encode($id);
        $categ = $f['categorias'];
      ?>
        <tbody id="myTable">
          <tr>
            <td data-th="ID" class="low text-dark"></td>
            <td><?php echo $id; ?></td>
            <td data-th="Nome" class="low"></td>
            <td id="name"><?php echo $categ; ?></td>
            <td data-th="Ação" class="low"></td>
            <td class="td-actions">
              <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-toggle="modal" 
              data-target="#comfirm<?php echo $id ?>">
              <i class="material-icons">Editar</i>
            </button>
            <a href="editSint.php?id=<?php echo $idc?>"><button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
              <i class="material-icons">Add/Edit Sinstomas</i>
            </button></a>
          </td>          
        </tr>
      </tbody>


      <!-- MODAL DE CONFIRMAÇÃO -->
      <div class="modal fade" id="comfirm<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-info text-white">
              Novo Nome
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="ediCat.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="categorias">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <small class="form-text text-muted">Insira um novo nome para esta categoria</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info">CADASTRAR</button>
              </form>
            </div>
          </div>
        </div>
      <?php }  ?>
    </table>
  </div>
  <footer class="tb-5">
    <p>Desenvolvido por ©ACCIO - 2018</p> 
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>