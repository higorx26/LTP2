<?php
    $numero1 = 5;
    $numero2 = 5;
    $numero3 = 10;
    $nome1 = "Renata";
    $nome2 = "renata";
    $nome3 = "Renata";
    echo("Resolva o problema a seguir: Utilize os Operadores que foram ate aqui estudados.");
    echo nl2br("\n\nPrimeiro Numero = $numero1 \n");
    echo("Segundo Numero = $numero2");
    echo nl2br("\nTerceiro Numero = $numero3 ");
    echo nl2br("\nPrimeiro Nome = $nome1 \n");
    echo("Segundo Nome = $nome2");
    echo nl2br("\nTerceiro Nome = $nome3 \n\n");
    echo("(O Primeiro Nome é diferente do Segundo Nome) E (O Primeiro Número é igual ao Segundo Número) Resultado =");
    var_dump(($nome1 != $nome2)  && ($numero1 == $numero2));
    echo nl2br("\n(O Primeiro Numero é igual do Segundo Numero) E (O Primeiro Nome é diferente do Terceiro Nome) Resultado =");
    var_dump(($numero1 == $numero2) && ($nome1 != $nome3));
    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) E (O Primeiro Numero é menor que o Terceiro Numero) Resultado =");
    var_dump(($numero1 >= $numero2) && ($numero1 < $numero3));
    echo nl2br("\n(O Segundo Numero é maior ou igual ao Terceiro Numero) E (O Terceiro Número é menor ou igual ao Segundo Número) Resultado =");
    var_dump(($numero2 >= $numero3) && ($numero3<=$numero2));

?>