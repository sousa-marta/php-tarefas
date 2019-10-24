<?php 
  session_start();

  $_SESSION["contador"] = $_SESSION["contador"] + 1;

  header("Location:../mostrar.php");

?>