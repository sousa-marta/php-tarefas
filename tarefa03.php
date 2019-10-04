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
/* 
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
 */

//EXERCÍCIO 05
/* 
$totalJogadas = 0;
do {
    $caraCoroa = mt_rand (0,1);
    $totalJogadas++;
} while ($caraCoroa == 1);
echo "Foram necessários $totalJogadas jogadas para tirar cara."
*/

//EXERCÍCIO 06
/* 
$letras = ["a", "b", "c", "d", "e"];

echo "a - Resolvendo com FOR: <br>";
for ($i=0; $i < count($letras); $i++) { 
    echo $letras[$i]." ";
}

echo "<br><br> b - Resolvendo com FOREACH: <br>";
foreach ($letras as $letra) {
    echo $letra." ";
}
//jeito mais simples de imprimir todas as posições da array.

echo "<br><br> c - Resolvendo com WHILE: <br>";
$i = 0;
while ($i < count($letras)) {
    echo $letras[$i]." ";
    $i++;
}

echo "<br><br> d - Resolvendo com DO/WHILE: <br>";
$i=0;
do {
    echo $letras[$i]." ";
    $i++;
} while ($i < count($letras));
 */

//EXERCÍCIO 07
/* 
//definindo uma array com 10 números aleatórios:
$numeros = [];
for($i=0; $i < 10; $i++) { 
    $numeros[] = mt_rand(0,10);
}

var_dump($numeros);

echo "<br><br> a - Resolvendo com FOR: <br>";
for ($i=0; $i < count($numeros); $i++) { 
    if ($numeros[$i] != 5) {
        echo $numeros[$i]." ";
    } else {
        echo "<br> Encontramos o cinco!";
        break;
    }
}

echo "<br><br> b - Resolvendo com WHILE: <br>";
$i = 0;
while ($i < count($numeros)) {
    if ($numeros[$i] != 5) {
        echo $numeros[$i]." ";
        $i++;
    } else {
        echo "<br> Encontramos o cinco!";
        break;
    }
} 

echo "<br><br> c - Resolvendo com DO/WHILE: <br>";
$i=0;
do {
    if ($numeros[$i] != 5) {
        echo $numeros[$i]." ";
        $i++;
    } else {
        echo "<br> Encontramos o cinco!";
        break;
    }
} while ($i < count($numeros));
*/

//EXERCÍCIO 08
/* 
foreach (range('a','n') as $index => $value) {
    echo "Na posição $index, está o valor $value"."<br>";
}
*/

//EXERCÍCIO 09
/* 
$mascotes = ["animal"=>"cachorro", "idade"=>5, "altura"=>0.6, "nome"=>"Sonic"];

foreach ($mascotes as $key => $mascote) {
    echo "$key : $mascote"."<br>";
}
 */

//EXERCÍCIO 11
/* 
$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Austria" => "Viena", "Polônia"=>"Varsóvia"];

ksort ($ceu);

foreach ($ceu as $pais => $capital) {
    echo "A capital da $pais é $capital"."<br>";
}
 */

//EXERCÍCIO 12





?>

<br><br>
Criar um script que mostre o nome da capital e o país a partir da variável ​ $ceu​ .