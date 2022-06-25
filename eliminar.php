<?php

include("bd.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM datoscrud WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ha ocurrido un error.");
  }

  $_SESSION['message'] = 'Información eliminada con éxito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
