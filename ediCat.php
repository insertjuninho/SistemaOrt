<?php 
	$id = $_POST['id'];
	$ncateg = strip_tags($_POST['ncateg']);
	include "banco.php";
	
	$query = "update categorias set categorias = '$ncateg' where idCat = $id";

	mysqli_query($con, $query);

	header("Location: editcateg.php");
?>