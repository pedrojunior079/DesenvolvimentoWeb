<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo4_15</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js"> 
</head>
<body>
 
<?php

$num = 15;
$resultado1 = $num >> 1; //desloca 1 bit par a direita
$resultado2 = $num << 2; //desloca 2 bits para a esquerda
echo $resultado1;
echo "<br>";
echo $resultado2;

?>


</body>
</html>


