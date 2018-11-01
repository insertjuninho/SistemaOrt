<?php
	$usuario  = $_POST['usuario'];
	$senha    = $_POST['senha'];
	$nomeMed  = $_POST['nomeMed'];
	$crm      = $_POST['crm'];
	$situacao = $_POST['situacao'];

	include 'banco.php';

	$query = "insert into  acesso(usuario, senha, nomeMed, crm, situacao)
	values ('$usuario', '$senha', '$nomeMed', '$crm', '$situacao')";

	$insert = mysqli_query($con, $query);

	if($insert == 1){?>
		<script>
			alert("MEDICO CADASTRADO");window.location.href='index.php';
		</script>
	<?php }else{ ?>
		<script>
			alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='cadMedico.php';
		</script>
<?php } ?>