<?php
    $PrimeiroNumero = 10;
    echo ("o valor da  variável Numero Priemiro é: $PrimeiroNumero");
    //Utilizando Operador de Atrinuição de forma aninhada
    echo nl2br("\nO valor da variável Numero Primeiro + Numero Segundo é:".$PrimeiroNumero = ($segundoNumero = 5) + $PrimeiroNumero."\n");
    //Utilizando Operador de Atribuição de forma combinada
    echo ("Somando 5 unidades á variável numero segundo :".$segundoNumero += 5);
    echo nl2br ("\no valor do Numero Segundo é: $segundoNumero\n");
    echo ("O valor da Numero Primeiro é: $PrimeiroNumero");
    //Utilizando Operador de Atribuição de forma Referênciada
    echo nl2br ("\nA variavel numero segundo sendo referencia para Numero Primeiro".
                    $segundoNumero = &$PrimeiroNumero );
    echo nl2br ("\no valor do Numero Segundo é: $segundoNumero\n");
?>