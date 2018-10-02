<?php 
	$page1 = $_POST['page1'];
	$page2 = $_POST['page2'];
	$page3 = $_POST['page3'];
	$page4 = $_POST['page4'];

	$page5 = $_POST['page5'];
	$page6 = $_POST['page6'];
	$page7 = $_POST['page7'];

	include "banco.php";

	$query = "insert into sintomas(page1, page2, page3, page4, page5, page6, page7)
	 
	values(
	'$page1', '$page2', '$page3', '$page4', '$page5', '$page6', '$page7')";
	

	$consulta = mysqli_query($con, $query);

	if($consulta == 1){
		echo "Cadastrado";
	}else{
		echo "Não Cadastrado";
	}
?>