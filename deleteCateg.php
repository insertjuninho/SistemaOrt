<?php 
 include "banco.php";
  $idc = $_GET['id'];
  $id = base64_decode($idc);
  
  
  $query = "delete from categorias where idCat = $id";
  $consulta = mysqli_query($con, $query);

  header("Location:editCateg.php");


 ?>