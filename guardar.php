<?php

include('bd.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $query = "INSERT INTO datoscrud(nombre, apellido) VALUES ('$nombre', '$apellido')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Información guardada con éxito");
  }

  $_SESSION['message'] = 'Información guardada con éxito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
