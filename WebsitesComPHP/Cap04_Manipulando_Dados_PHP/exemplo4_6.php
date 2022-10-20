<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo4_6</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js"> 
</head>
<body>
    
<?php

$num = 5000;
function testa_escopo1()
{
    echo $GLOBALS["num"] . "<br>";
    $GLOBALS["num"]++;
}

testa_escopo1();
echo $num;

?>


</body>
</html>

