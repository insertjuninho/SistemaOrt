<?php 
include "banco.php";
$id = $_POST['id'];
$categorias = $_POST['categorias'];


  $query = "update categorias set categorias = '$categorias' where idCat = $id";
  $consulta = mysqli_query($con, $query);

  header("Location:editcateg.php");




 ?>