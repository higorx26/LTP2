<?php
    $numero1 = 12;
    $numero2 = 10;
    $numero3 = 12;
    $nome1 = "Andre";
    $nome2 = "andre";
    echo("($numero1 == $numero2) && ($nome1 != $nome2) : ");
    var_dump(($numero1 == $numero2) && ($nome1 != $nome2));
    echo nl2br("\n($numero1 <= $numero2) || ($numero2 != $numero2) : ");
    var_dump(($numero1 <= $numero2) || ($numero2 != $numero2));
    echo nl2br("\n($nome1 != $nome2) xor ($numero2 >= $numero1) : ");
    var_dump(($nome1 != $nome2) xor ($numero2 >= $numero1));
    echo nl2br("\n !($numero2 == $numero3) : ");
    var_dump (!($numero2 == $numero3));

?>