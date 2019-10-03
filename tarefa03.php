<?php 
//EXERCÍCIO 01:
/* 
for ($i=1; $i <= 100; $i++) { 
    echo $i." ";
}
 */

//EXERCÍCIO 02:
/* 
$aleatorio = mt_rand(0,100);
echo "O número gerado é $aleatorio <br>";

for ($i=0; $i <= $aleatorio; $i++) { 
    echo $i." ";
} 
 */

//EXERCÍCIO 03 - tabuada do 2:
/* 
echo "Tabuada do 2: <br>";

for ($i=0; $i <= 10; $i++) { 
    $produto = 2*$i;
    echo "2*$i = $produto <br>";
}
 */

//EXERCÍCIO 04

$caras = 0;
$totalJogadas = 0;
while ($caras <= 5) {
    $caraCoroa = mt_rand (0,1);
    if ($caraCoroa == 1 ) {
    $caras++;    
    }
    $totalJogadas++;
}
echo "Foram necessárias $totalJogadas jogadas para tirar 5 vezes cara";

// 1 - representa cara;

?>

