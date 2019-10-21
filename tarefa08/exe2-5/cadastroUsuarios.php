<?php

  $users = json_decode(file_get_contents(__DIR__."/usuarios.json"),true); 

  function cadastrarUsuario($name,$age,$img,$cv){
    $fileName = "usuarios.json";

    //Se já existir arquivo .json:
    if(file_exists($fileName)){
      $users = json_decode(file_get_contents($fileName),true);

      $users[] = ["userName" => $name, "userAge" => $age, "userImage" => $img, "userCV" => $cv];

      $json = json_encode($users);

      $write = file_put_contents($fileName,$json); //salva em config json

      if($write) {
        return "O usuário foi adicionado corretamente";
      }else {
        return "Houve um problema ao adicionar o usuário";
      }

    //Se ainda não existir arquivo .json, cria:
    }else {
      $users = [];
      $users[] = ["userName" => $name, "userAge" => $age, "userImage" => $img, "userCV" => $cv];

      $json = json_encode($users);

      $write = file_put_contents($fileName,$json); //salva em config json

      if($write) {
        return "O usuário foi adicionado corretamente";
      }else {
        return "Houve um problema ao adicionar o usuário";
      }

    }
  }

  if($_POST){
    //Salvando arquivos enviados no form:
    //a.Imagem Perfil:
    $imgName = $_FILES["userImage"]["name"];
    $imgTmpPath = $_FILES["userImage"]["tmp_name"];

    $imgFinalPath = __DIR__."/user-img/".$imgName;

    $saveImg = move_uploaded_file($imgTmpPath,$imgFinalPath);

    //b.CV:
    $cvName = $_FILES["userCV"]["name"];
    $cvTmpPath = $_FILES["userCV"]["tmp_name"];

    $cvFinalPath = __DIR__."/user-cv/".$cvName;

    $saveCV = move_uploaded_file($cvTmpPath,$cvFinalPath);

    //Imprime na tela se deu certo ou não (imprime os returns de dentro da função)
    echo cadastrarUsuario($_POST["userName"],$_POST["userAge"],$imgFinalPath,$cvFinalPath);
  }
  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro Usuários</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <main class="container">
    <!-- Formulário de Input de Dados: -->
    <section class="d-flex justify-content-center p-5">
      <div class="row">
        <div class="col-12">
          <h4>Cadastro do Usuário</h4>
        </div>
        <div class="col-12">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class ="form-control" name="userName" placeholder="Nome do Usuário">
            </div>
            <div class="form-group">
              <input type="number" class ="form-control" name="userAge" placeholder="Idade">
            </div>
            <div class="form-group">
              <label>Imagem de Perfil:</label>
              <input type="file" name="userImage">
            </div>
            <div class="form-group">
              <label>Carregue seu CV:</label>
              <input type="file" name="userCV">
            </div>
            <button type="submit" class="btn btn-info">Cadastrar Usuário</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Tabela de Usuários Cadastrados: -->
    <section class="row d-flex justify-content-around">
      <div class="col-12">
        <h2>Todos os Usuários Cadastrados</h2>
        <?php if($users){ ?>
          <table>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Imagem</th>
              <th>CV</th>
            </tr>
            <?php foreach($users as $row){ ?>
            <tr>
              <td><?= $row["userName"]; ?></td>
              <td><?= $row["userAge"]; ?></td>
              <td><?= $row["userImage"]; ?></td>
              <td><?= $row["userCV"]; ?></td>
            </tr>
            <?php } ?>
          </table> 
        <?php } ?>
      </div>
    </section>




</main>
</body>
</html>