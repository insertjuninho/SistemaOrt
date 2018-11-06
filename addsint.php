<?php 

$sintoma = $_POST['sintoma'];
$categg = $_POST['categg'];

include "banco.php";

$query =  "insert  into  sintomas (nome, categorias) values('$sintoma', '$categg')";

mysqli_query($con,$query); 
if ($_FILES['arquivos']['size'] == 0){
	?>
	<script>
		alert("SINTOMA CADASTRADO SEM IMAGEM");window.location.href='editSint.php';
	</script>
<?php  
	}else{
		include "upload.php";
	} 
?>