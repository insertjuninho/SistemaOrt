  <?php 
  include "banco.php";
  $idc = $_GET['id'];
  $id = base64_decode($idc);
  
  
  $query = "UPDATE acesso SET situacao = 'inativo' WHERE idMed = $id";
  $consulta = mysqli_query($con, $query);

  header("Location:listMed.php");

?>

