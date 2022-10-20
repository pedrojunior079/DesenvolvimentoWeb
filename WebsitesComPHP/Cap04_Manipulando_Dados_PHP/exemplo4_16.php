<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo4_16</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js"> 
</head>
<body>
    
<?php

$soma = 0;
$valor1 = 10;
$valor2 = 20;
$valor3 = 30;
$soma += $valor1; //$soma fica com 10
$soma += $valor2; //$soma fica com 10+20 = 30
$soma += $valor3; //$soma fica com 30*30 = 900
$soma %= 100; //$soma fica com 900%100 = 0
echo $soma;

?>

</body>
</html>

