<?php 
   /* EXERCÍCIO 01.
    $numeroInteiro = 30;
    echo $numeroInteiro;
    var_dump ($numeroInteiro);

    $numeroFloat = 4.5;
    echo $numeroFloat;
    var_dump ($numeroFloat);

    $umCaractere = "a";
    echo $umCaractere;
    var_dump ($umCaractere);

    $umCaractereSimples = 'a';
    echo $umCaractereSimples;
    var_dump ($umCaractereSimples);

    $stringSimples='uma string qualquer';
    echo $stringSimples;
    var_dump ($stringSimples);

    $stringDupla="com aspas duplas";
    echo $stringDupla;
    var_dump ($stringDupla);

    $numeroInteiro = "mudando pra string";
    echo $numeroInteiro;
    var_dump ($numeroInteiro);

    $stringSimples = 5.6;
    echo $stringSimples;
    var_dump ($stringSimples);

    $numeroInteiro = "30";
    echo $numeroInteiro;
    var_dump ($numeroInteiro);
 */

    /* EXERCÍCIO 02
    $um = "três";
    $dois = "pratos";

    echo $um." ".$dois;
    echo $dois." ".$um; */


    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "true";
    $variable09 = 'false';
    $variable10 = null;

    $meuDado = 3;

    function tipoDado($varN)
    {
        if ( $varN == true )
        {
            echo 'o valor ' . $varN . ' é verdadeiro.';
        }
        else
        {
            echo 'o valor ' . $varN . ' é falso.';
        }
    }
    tipoDado($meuDado​);
?>