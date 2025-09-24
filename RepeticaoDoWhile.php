<?php
    if(!empty($_GET['numero']) && is_numeric($_GET['numero'])){
    $numero = $_GET['numero'];
    $cont = 0;
    do{
    echo nl2br("O numero foi : ".$numero++."\n");
    $numero = $numero + 1;
    $cont++;
    }while($cont <= 4);
    }else{
        echo("variavel não setada ou vazia ou foi enviada um texto");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Informe um número:

        </label>
        <input type="text" name="numero" placeholder="Digite um numero"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>