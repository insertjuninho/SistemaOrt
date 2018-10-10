<?php 

$categorias = $_POST['categorias'];
$sintomas	= $_POST['sintomas'];

include "banco.php";

$query = "UPDATE categorias SET categorias='$categorias'
			WHERE id = $id; 
			";	

$query2 = "UPDATE sintomas SET sintomas='$sintomas'
			WHERE id = $id; 
			";

mysqli_query($con,$query);

mysqli_query($con,$query2);

header("Location:admin.php");



 ?>