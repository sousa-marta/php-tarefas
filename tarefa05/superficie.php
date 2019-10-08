<?php
// Exercício 2

function triangulo($base,$altura) {
    return $base*$altura/2;
}

function retangulo($base,$altura) {
    return $base*$altura;
}

function quadrado($lado) {
    return pow($lado,2);
}

echo retangulo(3,4);

?>