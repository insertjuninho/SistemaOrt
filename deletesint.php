<?php 
 include "banco.php";
  $idc = $_GET['id'];
  $id = base64_decode($idc);
  
  
  $query = "delete from sintomas where idSint = $id";
  $consulta = mysqli_query($con, $query);

  header("Location:editSint.php");


 ?>