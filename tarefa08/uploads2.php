<?php

//extensões de img válidas:
$validExtensions = ["image/jpeg", "image/png", "image/jpg"];

var_dump($_FILES);

if($_FILES["img"]["error"] === UPLOAD_ERR_OK){
    //validação que o arquivo é uma imagem
    if(array_search($_FILES["img"]["type"], $validExtensions) === false){
        echo "Extensão do arquivo inválida. Envie um arquivo .jpeg, .png ou .jpg";
        exit;
    }
    if(move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/".$_FILES["img"]["name"])){
        echo "Arquivo salvo com sucesso!";
    }else {
        echo "Erro na hora de salvar seu arquivo";
    }

}else {
    echo "Erro no envio do arquivo";
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Uploads</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="img">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>