<?php

$nomeArquivo = 'texto.txt';
function verificaArquivo($arquivo) {
    $arquivoAberto = fopen($arquivo,'a+');
    fwrite($arquivoAberto, 'Olá, mundo!');
    fclose($arquivoAberto);
}

// Poderia ter sido feito com: file_put_contents($arquivo, 'Olá, mundo!', FILE_APPEND);

//se não colocar o FILE_APPEND toda vez que roda o arquivo vai ser resetado. "Se filename não existir, o arquivo é criado. Do contrário, o arquivo existente é sobrescrito, a não ser que a flag FILE_APPEND seja definida."

// verificaArquivo($nomeArquivo);





?>