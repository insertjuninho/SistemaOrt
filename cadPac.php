<?php
$nomePac = $_POST['nomePac'];
$idade   = $_POST['idade'];
$altura  = $_POST['altura'];
$pressao = $_POST['pressao'];

include 'banco.php';

$query = "insert into paciente (nomePac, idade, altura, pressao)
 values ('$nomePac', '$idade', '$altura', '$pressao')";

 mysqli_query($con,$query);

 session_start();
	$_SESSION['nomePac'] =  $nomePac;
	

header("Location: categorias.php");


?>