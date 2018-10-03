<?php
setcookie("nome", "", time()-1);
	session_start();
	session_destroy();

	header("Location: index.php");

?>