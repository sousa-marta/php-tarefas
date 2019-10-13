<!-- TAREFAS ARQUIVOS -->

<?php

// EXERCÍCIO 3A E B:
$nomeArquivo = 'texto.txt';
function verificaArquivo($arquivo) {
    $arquivoAberto = fopen($arquivo,'a+');
    fwrite($arquivoAberto, 'Olá, mundo!');
    fclose($arquivoAberto);
}

// verificaArquivo($nomeArquivo);

// Poderia ter sido feito com: file_put_contents($arquivo, 'Olá, mundo!', FILE_APPEND);
//se não colocar o FILE_APPEND toda vez que roda o arquivo vai ser resetado. "Se filename não existir, o arquivo é criado. Do contrário, o arquivo existente é sobrescrito, a não ser que a flag FILE_APPEND seja definida."


// EXERCÍCIO 3C (imprime o arquivo inteiro de uma vez):
/* 
$conteudo = file_get_contents('texto.txt');
echo $conteudo;
 */

// EXERCÍCIO 3D (imprime o arquivo linha a linha):
/* 
$arquivo = fopen('texto.txt', 'r');
if($arquivo) {
    while ($linha = fgets($arquivo)) {
        echo $linha;
    }
}
fclose($arquivo);
*/

// EXERCÍCIO 3G:
/* 
$arquivo = file_get_contents('texto2.txt');
$arquivo = ' Este texto sobrescreve o anterior?';
file_put_contents('texto2.txt', $arquivo); */
/* Assim sobrescreve o texto anterior. */

$arquivo = file_get_contents('texto2.txt');
$arquivo .= ' Não, com o "." não sobrescreve!';
file_put_contents('texto2.txt', $arquivo);


?>

<br><br><br>