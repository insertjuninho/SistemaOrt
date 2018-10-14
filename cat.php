<?php 

$categorias = $_POST['categorias'];
$sintomas 	= $_POST['sintomas'];


include "banco.php";

$query =  "insert  into  categorias (categorias,sintomas) values('$categorias','$sintomas')";

mysqli_query($con,$query); 

include "upload.php";

header('Refresh: 3, addCategorias.php');


 ?>