<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js"> 
</head>
<body>
    
</body>
</html>


<?php

$a = 1;
$b = 3;
$c = 5;
$res1 = ++$b - $a;
$res2 = $c + $a;
$res3 = -$a + $c++;
echo "a = $a<br> b = $b<br> c= $c<br><br>";
echo "res1 = $res1<br> res2 = $res2<br> res3 = $res3<br>";

?>