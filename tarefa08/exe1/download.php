<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Download</title>
</head>
<body>


  <?php
    $filePath = __DIR__."/uploads/";
    
    // Escaneando o diretório. Retorna array com lista de arquivos na pasta:
    $fileArray = scandir($filePath);

    foreach ($fileArray as $imgFile) {
      // Para pegar apenas arquivos de imagem e criar ancoras de download:
      if(substr($imgFile,-3)=="png" || substr($imgFile,-3)=="jpg" || substr($imgFile,-4)=="jpeg"){ ?>
        <a href="<?= $filePath.$imgFile ?>" download><?= $imgFile ?><br></a>
      <?php }
    }
  ?>
    
    <!-- OBS: A parte da ancora poderia ter escrito assim, sem precisar abrir e fechar tags de php: 
         echo "<a href='uploads/".$file."' download>".$file."<br></a>"; -->

</body>
</html>

<?php
  
?>