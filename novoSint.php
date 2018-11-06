<?php 
	$id = $_POST['id'];
	$nsint = strip_tags($_POST['nsint']);
	include "banco.php";
	
	$query = "update sintomas set nome = '$nsint' where idSint = $id";

	mysqli_query($con, $query);

	header("Location: editSint.php");
?>