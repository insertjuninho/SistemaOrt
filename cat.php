<?php 

$categoria = $_POST['categoria'];

include "banco.php";

$query =  "insert  into  categorias (categorias) values('$categoria')";

$insert = mysqli_query($con, $query);

if($insert == 1){?>
	<script>
		alert("CATEGORIA CADASTRADA");window.location.href='editcateg.php';
	</script>
<?php }else{ ?>
	<script>
		alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='editcateg.php';
	</script>
	<?php } ?>