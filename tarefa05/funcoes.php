<?php 

$numeroMagico = 20;

/* 
EXERCÍCIO 1a e 1b
function maior ($num1, $num2, $num3){
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
        return $num2;
    } else {
        return $num3;
    }
} 
function tabela ($first, $last) {
    $sequencia = [];
    for ($i=$first; $i <= $last; $i++) { 
        $sequencia[]=$i;
    }
    return $sequencia;
}
*/

//Já está funcionando
/* 
function maior ($num1, $num2, $num3 =""){
    global $funcoesExecutadas, $numeroMagico;
    $funcoesExecutadas++;
    if ($num3!=""){
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
            return $num2;
        } else {
            return $num3;
        }
    } else {
        $num3 = $numeroMagico;
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
            return $num2;
        } else {
            return $num3;
        }
    }
}

// echo maior(2,7);

function tabela ($first, $last = "") {
    global $funcoesExecutadas, $numeroMagico;
    $funcoesExecutadas++;
    $sequencia = [];
    if ($last!=""){
        for ($i=$first; $i <= $last; $i++) { 
            $sequencia[]=$i;
        }
        return $sequencia;
    } else {
        $last=$numeroMagico;
        for ($i=$first; $i <= $last; $i++) { 
            $sequencia[]=$i;
        }
        return $sequencia;
    }
}

$array = tabela(0);
var_dump ($array);
 */


//RASCUNHO - função dentro de função.
function maiorDeTres($num1, $num2, $num3){
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
        return $num2;
    } else {
        return $num3;
    }
}

function maior ($num1, $num2, $num3 =""){
    global $funcoesExecutadas, $numeroMagico;
    $funcoesExecutadas++;
    if ($num3!=""){
        maiorDeTres($num1, $num2, $num3);
    } else {
        $num3 = $numeroMagico;
        maiorDeTres($num1, $num2, $num3);
    }
}

$imprimir = maior(10,2,5);
echo $imprimir;


?>


