<?php
$nomePac = $_POST['nomePac'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$pressao = $_POST['pressao'];

include 'banco.php';

$query = "insert into acesso (nomepac, idade, altura, pressao),
 values ('$nomepac', '$idade', '$altura', '$pressao')";

 mysqli_query($con,$query);

 session_start();
	$_SESSION['nome'] =  $nome;
	
	setcookie("nome", $nome, time()+600);
	

header("Location: login.php");


?>