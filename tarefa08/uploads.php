<?php
// EXERCÍCIO 1A:

//Dúvida: a pasta uploads já tinha que ter sido criada?
//Continua não funcionando

if($_POST){
	$imgName = $_FILES['sentFile']['name'];
	$tmpLocation = $_FILES['sentFile']['tmp_name'];
	$saveTo = 'uploads/'.$imgName;
	
	
	// var_dump($_FILES);
	var_dump($_POST);
	
	$ok = move_uploaded_file($tmpLocation,$saveTo);
	echo "Deu certo!";
	
	if($_FILES["sentFile"]["error"] == UPLOAD_ERR_OK) {
	}else {
		echo "Já há um arquivo com esse nome, favor enviar outro arquivo.";
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
