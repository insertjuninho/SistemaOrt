<?php 
    session_start();
  if(isset($_SESSION['nomeMed'])){
    if(isset($_SESSION['nomeMed'])){
      $nomeMed = $_SESSION['nomeMed'];
  }else{
    header("Location: pag2.php");
  }
  }
  
  include "banco.php";
  $query = "select * from acesso where nomeMed = '$nomeMed' and crm = '$crm' limit 1";
  $consulta = mysqli_query($con, $query);
   
  while($login = mysqli_fetch_array($consulta)){
    $nomeMed = $login['nomeMed'];
  }
  header("Location:pag2.php");

?>