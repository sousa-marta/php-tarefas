<?php 

  session_start();
  
  if(isset($_SESSION["contador"])){
    echo $_SESSION["contador"];
  }

?>