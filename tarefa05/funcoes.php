<?php 

//não soube como trazer a $numeroMagico para os parâmetros

// Exercício 1

//Exercício 1a
/* function maior ($num1, $num2, $num3){
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
        return $num2;
    } else {
        return $num3;
    }
} */


$numeroMagico = mt_rand(1,10);

function tabela ($first, $numeroMagico) {
    global $funcoesExecutadas++;
    $sequencia = [];
    for ($i=0; $i <= $numeroMagico; $i++) { 
        $sequencia[]=$i;
    }
    return $sequencia;
}

function maior ($num1, $num2, $numeroMagico){
    global $funcoesExecutadas++;
    if ($num1 >= $num2 && $num1 >= $numeroMagico) {
        return $num1;
    } elseif ($num2 >= $numeroMagico && $num2 >= $num1 ) {
        return $num2;
    } else {
        return $numeroMagico;
    }
}

$array = maior(1,3,3);

var_dump ($array);



?>


