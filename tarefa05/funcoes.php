<?php 

//não soube como trazer a $numeroMagico para os parâmetros

// $numeroMagico = mt_rand(1,10);
$numeroMagico = 6;

function maior ($num1, $num2, $num3 = 6){
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num3 && $num2 >= $num1 ) {
        return $num2;
    } else {
        return $num3;
    }
}

function tabela ($first, $last = 6) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    $sequencia = [];
    for ($i=$first; $i <= $last; $i++) { 
        $sequencia[]=$i;
    }
    return $sequencia;
}

// $array = tabela(9);
// var_dump ($array);


// echo maior(2,2);



?>


