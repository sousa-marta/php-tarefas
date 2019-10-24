<?php
  session_start();

  $_SESSION["contador"] = 0;

  //Se quiser que vá para a página mostrar depois de clicar:
  header("Location: ../mostrar.php");
?>