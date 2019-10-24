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
        <form action="script/incrementar.php">
          <input type="submit" class="btn btn-primary m-3" value="Incrementar (+1)">
        </form>
        <form action="script/resetar.php">
          <input type="submit" class="btn btn-warning m-3" value="Resetar (0)">
        </form>
      </div>
      <div class="row justify-content-center py-2">
        <a href="mostrar.php" class="btn btn-success">Visualizar contador</a>
      </div>
    </div>
  </main> 
</body>
</html>
