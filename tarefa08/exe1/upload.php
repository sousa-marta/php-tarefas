<?php
// EXERCÍCIO 1A:

//Dúvida: a pasta uploads já tinha que ter sido criada?

// var_dump($_FILES);

if($_FILES){
	$imgName = $_FILES["sentFile"]["name"];
	$tmpLocation = $_FILES["sentFile"]["tmp_name"];
	// $saveTo = dirname(__FILE__)."/uploads/".$imgName;
	$saveTo = __DIR__."/uploads/".$imgName;

	// Validação para saber se arquivo já existe. Se já existir, não salvar novamente:
	if(file_exists($saveTo)) {
		echo "Já foi feito o upload desse arquivo. Por favor, escolha outro arquivo.";
	}else {
		$moving = move_uploaded_file($tmpLocation,$saveTo);

		//Verificação se o arquivo conseguiu ser movido para a pasta destino final:
		if($moving) {
			echo "O upload do seu arquivo foi realizado com sucesso! :D";
		}else {
			echo "Não foi possível salvar o arquivo :(";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Uploads</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="sentFile">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>

<br><br><br>


<!-- // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} -->