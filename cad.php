<?php 
	$page1 = $_POST['page1'];
	$page2 = $_POST['page2'];
	$page3 = $_POST['page3'];
	$page4 = $_POST['page4'];

	$page5 = $_POST['page5'];
	$page6 = $_POST['page6'];
	$page7 = $_POST['page7'];
	$categ = $_POST['categoria'];

	include "banco.php";

	$query = "insert into historico(page1, page2, page3, page4, page5, page6, page7, categoria)
	 
	values(
	'$page1', '$page2', '$page3', '$page4', '$page5', '$page6', '$page7', '$categ')";
	

	$insert = mysqli_query($con, $query);

	if($insert == 1){?>
		<script>
			alert("PACIENTE CADASTRADO");window.location.href='listpac.php';
		</script>
	<?php }else{ ?>
		<script>
			alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='sintomas.php';
		</script>
<?php } ?>