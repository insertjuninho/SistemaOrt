<?php 
 include "banco.php";
  $idc = $_GET['id'];
  $id = base64_decode($idc);
  
  
  $query = "UPDATE paciente SET situacao = 'inativo' WHERE idPac = $id";
  $consulta = mysqli_query($con, $query);

  header("Location:listPac.php");


 ?>