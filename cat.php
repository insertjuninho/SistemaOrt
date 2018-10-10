<?php 

$categorias = $_POST['categorias'];
$sintomas 	= $_POST['sintomas'];

include "banco.php";

$query = "insert into categorias (categorias) values('$categorias')";
$query2 = "insert into sintomas (sintomas) values('$sintomas')";

mysqli_query($con,$query); 
mysqli_query($con,$query2);

header("Location:admin.php");


 ?>