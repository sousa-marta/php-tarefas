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


<?php
// EXERCÍCIO 1A:

//ainda não está funcionando =(

if($_POST){
	$imgName = $_FILES["sentFile"]["name"];
	$tmpLocation = $_FILES["sentFile"]["tmp_name"];
	$saveTo = "uploads/".$imgName;

	if($_FILES["sentFile"]["error"] == UPLOAD_ERR_OK) {
		$ok = move_uploaded_file($tmpLocation,$saveTo);
		echo "Deu certo!";
	}else {
		echo "Já há um arquivo com esse nome, favor enviar outro arquivo.";
	}
}


?>

<br><br><br>
