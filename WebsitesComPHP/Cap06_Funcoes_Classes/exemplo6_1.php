<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_1</title>
</head>
<body>
   
<?php

    function soma_valores($valor1, $valor2, $valor3)
    {
        $soma = $valor1 + $valor2 + $valor3;
        echo "<h3>A soma dos valores $valor1, $valor2 e $valor3 ";
        echo "é $soma</h3>";
    }
    $n1 = 10;
    $n2 = 20;
    $n3 = 50;
    soma_valores($n1, $n2, $n3);

?>


</body>
</html>





