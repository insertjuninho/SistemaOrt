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
  <div class="container">
    <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar Médico" id="myInput">
    <table class="table table-striped" id="func">
      <thead>
        <tr>
          <th style="width:3%">ID</th>
          <th style="width:50%">Nome</th>
          <th style="width:45%">Ação</th>
        </tr>
      </thead>
      <?php 
      include "banco.php";

      $sql    = ("SELECT * FROM acesso WHERE situacao = 'ativo'");
      $result = mysqli_query($con , $sql);
      while ($f = mysqli_fetch_array($result)) {
        $id   = $f['idMed'];
        $idc = base64_encode($id);
        $nome = $f['nomeMed'];
        ?>
        <tbody id="myTable">
          <tr>
            <td data-th="ID" class="low text-dark"></td>
            <td><?php echo $id; ?></td>
            <td data-th="Nome" class="low"></td>
            <td id="name"><?php echo $nome; ?></td>
            <td data-th="Ação" class="low"></td>
            <td class="td-actions"><a href="ediPac.php"><button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
              <i class="material-icons">Detalhes</i>
            </button></a>
            <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-toggle="modal" 
            data-target="#comfirm">
                <i class="material-icons">Deletar</i>
            </button>
          </td>          
        </tr>
      </tbody>
    <?php } ?>
  </table>
</div>
<footer>
  <p><?php echo "Desenvolvido por ©ACCIO - 2018"; ?></p> 
</footer>
<!-- MODAL DE CONFIRMAÇÃO -->
<div class="modal fade" id="comfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        EXCLUIR
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem certeza que quer excluir este cadastro?
      </div>
      <div class="modal-footer">
        <a href="delete.php?id=<?php echo $idc?>" class="btn btn-success">SIM</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NÃO</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>