<?php
$nomeMed = $_POST['nomeMed'];
$crm = $_POST['crm'];
$situacao = $_POST['situacao'];
$estado = $_POST['estado'];

include 'banco.php';

$query = "insert into acesso (nomeMed, crm, situacao, estado),
 values ('$nomeMed', '$crm', '$situacao', '$estado')";

 mysqli_query($con,$query);

 session_start();
	$_SESSION['nome'] =  $nome;
	$_SESSION['crm'] = $crm;

	setcookie("nome", $nome, time()+600);
	setcookie("crm", $crm, time()+600);

header("Location: login.php");


?>