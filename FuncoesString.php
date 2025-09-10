<?php
    $nomePessoa = "  Caio Felipe Medeiros Silva  ";
    echo ("O nome da variável nome pessoa é: $nomePessoa ");
    strlen($nomePessoa);
    echo nl2br("\nA quantidade de caracteres da variável nome pessoa é: " .strlen($nomePessoa) );
    $ultimoSobrenome = strpos($nomePessoa , 'Medeiros' );
    echo nl2br ("\no ultimo sobrenome esta na posição: ".$ultimoSobrenome);
    echo nl2br ("\nTodos os caracteres  em minúsculo: ".strtolower($nomePessoa));
    echo nl2br ("\nTodos os caracteres  em maiúsculo: ".strtoupper($nomePessoa));
    echo nl2br ("\nos dois ultimos sobrenomes são: ".substr($nomePessoa , 12));
    //echo nl2br ("\nOs dois ultimos sobrenomes tem ". substr_count($nomePessoa, 'Medeiros') ." caracteres");
    echo nl2br ("\nstring sem os espaços inicio e fim: ".strlen(trim($nomePessoa)));

?>