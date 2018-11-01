<?php 
  $usuario = strip_tags($_POST['usuario']);
  $senha    = $_POST['senha'];


  include "banco.php";

  $query = "select * from acesso where usuario = '$usuario' and senha = '$senha' limit 1";

  $consulta = mysqli_query($con, $query);

  $total = mysqli_num_rows($consulta);
  if($total == 0){
    ?>  
    <script>
      alert("MÉDICO NAO CADASTRADO");window.location.href='index.php';
    </script>
    <?php 
  }else{
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: pag2.php");
    if($usuario == "accioadmin"){
      header("Location: admin.php");
    }
  }
?>
  