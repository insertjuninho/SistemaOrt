<?php 
include "banco.php";
$catcry = $_GET['forcat'];
$categ = base64_decode($catcry);
session_start();
if(empty($_SESSION['usuario']) and empty($_SESSION['senha'])){?>
  <script>
    alert("VOCÊ PRECISA ESTAR LOGADO PARA ACESSAR ESTA PAGINA!");window.location.href='index.php';
  </script>
  <?php 
} 
if (empty($_GET['forcat'])) {

  	echo"<script>
    		alert('SELECIONE UMA CATEGORIA');window.location.href='categorias.php';
  		</script>";
  }

  ?>
<!doctype html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
 <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="css/sint.css">
<title>SISTEMA</title>
</head>
<body>
  <header>
    <a href="pag2.php" style="text-decoration: none"><p class="logo">LOGO</p></a>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
	  <h1 class="text-center titulo">Selecione os Sintomas</h1>
  <div class="container col-lg-6 col-xl-11 col-lg-offset-3 mb-5">
   <div class="row">
     <div class="col-sm-12 col-md-12" id="cad">
       <form id="msform" method="post" action="cad.php">

        <?php
        include "banco.php";
        $sql="SELECT nome FROM sintomas WHERE categorias = '$categ';";
        $resultado=mysqli_query($con,$sql);
        $y=0;
        while ($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
          $k[$y]=$row['nome'];
          $y++;
        }
        $i=0;
        $f=1;
        $r=mysqli_num_rows($resultado); 
        echo "<fieldset id='f{$f}'>";
        $a = 0;
        for($x=0; $x<$r;$x++){
          if($i<=3){
            $i++;
            ?>  

            <div class="col-md-6">
              <label class="radio">
                <div class="categoria">
                  <img src="img/ft.jpg" class="img-fluid" >
                  <input type="radio" name="page<?php echo $cont ?>" value="<?php echo $k[$x] ?>" class="radio">
                  <input type="hidden" name="categoria" value="<?php echo $categ ?>">
                   <p><?php echo $k[$x]; ?></p>
                </div>
              </label>
            </div>

            <?php
          }else{
         	echo "<input type='button' name='previous' class='previous action-button-previous' value='Voltar' id='voltar'/>";
            echo "<input type='button' name='next' class='next action-button' value='Próximo' id='next'/></fieldset>";
            $i=0;
            $x=$x-1;            
            ?>
            <fieldset id="<?php echo $f ?>"> 
              <?php 
            }
          }
          echo "<input type='button' name='previous' class='previous action-button-previous' value='Voltar'/>";
          echo "<input type='submit' name='submit' class='action-button' value='Cadastrar'/>";
          ?>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<footer >
  <p><?php echo "Desenvolvido por © ACCIO-2018"; ?></p>
</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>