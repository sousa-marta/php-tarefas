<?php

//EXERCÍCIO 01
/* 
$varA = 2;
$varB = 5.4;

if ($varA > $varB) {
    echo "O maior número é $varA";
}else {
    echo "O maior número é $varB";
} 
*/

//EXERCÍCIO 02
/* 
$result = mt_rand(1,5);
if ($result == 3 || $result ==5) {
    echo "$result <br>";
} 
*/

//EXERCÍCIO 03
/* 
$result = mt_rand(1,5);
if ($result != 3) {
    echo "O número não é 3";
} else {
    echo $result;
} 
*/

//EXERCÍCIO 04
/* 
$random = mt_rand(1,100);
if ($random > 50) {
    echo "O número é maior que 50";
}else {
    echo "O número é menor ou igual à 50";
}
 */

//EXERCÍCIO 05
/* 
$random = mt_rand(1,100);
if ($random > 50 && $random%2==0) {
    echo "O número $random cumpre a condição";
}else {
    echo "O número $random não cumpre a condição";
}
 */

//EXERCÍCIO 06
/* 
$idade = 17;
$civil = false;
$sexo = "outro";
$excessao = "outro";

if ($idade >= 18 && $civil==false || $sexo == $excessao) {
    echo "Boas Vindas";
}
 */

//EXERCÍCIO 07
/* 
$quantidadeDeAlunos = 100;

if ($quantidadeDeAlunos) {
    echo "true";
} else {
    echo "false";
}
//sem variável definida:false; -100 e -1:true; 0:false; 1 e 100:true

if ($i == 1 ) {
    echo “true”;
} else {
    echo “false”;
}
//true Notice: Undefined variable: i in /opt/lampp/htdocs/php-tarefas/tarefa02.php on line 76
// Warning: Use of undefined constant “false” - assumed '“false”' (this will throw an Error in a future version of PHP) in /opt/lampp/htdocs/php-tarefas/tarefa02.php on line 79 “false”
 */

//EXERCÍCIO 08

$numero = 15;

$numero%2 == 0 ? echo "O número é par" : echo "O número é impar";


//EXERCÍCIO 09
/* 
$i = mt_rand (1,5);

switch ($i) {
    case 1:
        echo "$i é igual à 1";
        break;
    case 2:
        echo "$i é igual à 2";
        break;
    case 3:
        echo "$i é igual à 3";
        break;
    case 4:
        echo "$i é igual à 4";
        break;
    default:
        echo "$i é igual à 5";
        break;
}
 */

//EXERCÍCIO 10
/* 
$i = mt_rand (1,5);

switch ($i) {
    case 1:
        echo "$i é igual à 1";
        break;
    case 2:
        echo "$i é igual à 2";
        break;
    default:
        echo "$i não é igual à 1 ou 2";
        break;
}
 */

//EXERCÍCIO 11



?>