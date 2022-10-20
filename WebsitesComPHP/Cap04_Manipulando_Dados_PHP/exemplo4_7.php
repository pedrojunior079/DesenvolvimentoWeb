<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo4_7</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js"> 
</head>
<body>
    
<?php

$x = 50;
$y = 5.35;
$soma = (int) $y + $x;
$sub = (int) $y - $x;
$mult = (int) $y * $x;
$div = (int) $y / $x;
echo "<h3>Soma foi..........:</h3>".$soma;
echo "<br>";
echo "<h3>Subtração foi.....:</h3>".$sub;
echo "<br>";
echo "<h3>multiplicação foi.:</h3>".$mult;
echo "<br>";
echo "<h3>divisão foi.......:</h3>".$sub;

?>

</body>
</html>

