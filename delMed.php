<?php 
	$id = $_GET['idMed'];
	include "banco.php";
	mysqli_query($con, "UPDATE acesso SET situacao = inativo WHERE idMed = $id");

	header("Location: listMed.php");
?>