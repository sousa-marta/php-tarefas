<!-- NÃO DEU CERTO ASSIM -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modificar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <main>
    <div class="container">
      <div class="row justify-content-center py-5">
        <form action="">
          <input type="submit" onclick="incrementar()"value="Incrementar" class="btn btn-primary m-5">
          <input type="submit" onclick="resetar()"value="Resetar" class="btn btn-warning m-5">
        </form>
      </div>
    </div>
  </main> 
</body>
</html>


<?php

  function incrementar(){
    session_start();
    $_SESSION["contador"] = $_SESSION["contador"] + 1;
    echo "O contador foi incrementado de uma unidade.";
  }

  function resetar(){
    session_start();
    $_SESSION["contador"] = 0;
    echo "O contador foi zerado.";
  }
  
?>