<?php
    $nome1 = "Fernanda";
    $nome2 = "Ana Luiza Moura";
    $nome3 = "José Carlos";
    $numero1 = 80;
    $numero2 = 90;
    $numero3 = 75.30;
    echo ("Desenvolva a atividade a seguir: os seis dados (valores) logo abaixo são variáveis, portanto valores dinâmico");
    echo nl2br ("\n\nPrimero Nome = $nome1\n");
    echo ("Segundo Nome = $nome2");
    echo nl2br ("\nTerceiro Nome = $nome3\n");
    echo nl2br ("\nPrimero Numero = $numero1\n");
    echo ("Segundo Numero = $numero2");
    echo nl2br("\nTerceiro numero = $numero3\n");
    echo nl2br("\nO valor da variável Primerio Nome é:$nome1\n");
    echo ("O valor da variável Terceiro Nome é:$nome3");
    echo nl2br("\n $nome1 e $nome3 são casados possem uma filha: :$nome2\n");
    echo ("$nome2 é estudante e ganha uma bolsa de:$numero3 por mês equivalente à:".($numero3 * 12)." Anual");
    echo nl2br ("\nO nome $nome2 posui ".strlen($nome2)." caracteres o ultimo sobrenome é:".substr($nome2 , 10)."\n");
    echo ("Incrementando uma unidade (Pós Incremento) à variável Primeiro Número :".$numero1++);
    echo nl2br ("\nNovo valor da variável Primeiro Número é :$numero1\n");
    echo ("A raiz quadrada da variável Primeiro Número é :".sqrt($numero1));
    echo nl2br ("\nO valor $numero1 == $numero2");
    var_dump($numero1 == $numero2);
    echo nl2br ("\nO valor $numero2 <= $numero1");
    var_dump($numero2 <= $numero1);
    echo nl2br ("\n$numero1 >= $numero2 xor $numero1 != $numero2");
    var_dump($numero1 >= $numero2 xor $numero1 != $numero2);
    echo nl2br ("\n$numero2 == $numero2 and $numero1 != $numero2");
    var_dump($numero2 == $numero2 and $numero1 != $numero2);

?>