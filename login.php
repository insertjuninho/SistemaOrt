<?php 
	session_start();
	$nomeMed = $_POST['nomeMed'];
	$crm  	 = $_POST['crm'];
	
	include "banco.php";
	$query = "select * from acesso where nomeMed = '$nomeMed' and crm = '$crm' limit 1";
	$consulta = mysqli_query($con, $query);
	 
	if(mysqli_num_rows ($consulta) > 0 )
{
$_SESSION['nomeMed'] = $nomeMed;
$_SESSION['crm'] = $crm;
header("Location:pag2.php");
}
else{
  unset ($_SESSION['nomeMed']);
  unset ($_SESSION['crm']);
  header("Location:index.php");
   
  }
?>
 ?>