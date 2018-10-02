<?php 
	$nomeMed = $_POST['nomeMed'];
	$crm = $_POST['crm'];
    session_start();

	if(isset($_COOKIE['email']) or isset($_SESSION['email'])){
		if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];
		}
		if(isset($_COOKIE['email'])){
			$email = $_COOKIE['email'];
		}
	}else{
		header("Location: index.php");
    
        include "banco.php";
	$query = "select * from acesso where email = '{$nomeMed}' and crm = '{$crm}' limit 1";
	$consulta= mysqli_query($con, $query);
	if(mysqli_num_rows($consulta) > 0) {
		while($login = mysqli_fetch_array($consulta)){
			$nome = $login['nomeMed'];
			echo "LOGADO";
			$_SESSION['nomeMed'] = $nomeMed;
		}
		header("Location:index.php");
    }else{
		 echo "NAO LOGADO";
    }
 ?>