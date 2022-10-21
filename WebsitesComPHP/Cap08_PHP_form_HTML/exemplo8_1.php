<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo8_1</title>
</head>
<body>
   
<?php

    $texto = "<img src=http://siteporno.com.br/foto.jpg>";
    $novo_texto =htmlspecialchars($texto);
    echo $texto . "<br>";
    echo $novo_texto;

?>

</body>
</html>

