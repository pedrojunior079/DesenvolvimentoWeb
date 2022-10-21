<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_19</title>
</head>
<body>
  
<?php

   /* A partir do PHP 5 em diante a palavra static também pode ser utilizada para
    * definir um método como estatico. 
    */
   class Classe
   {
       static $variavel_estatica = 10;
   }
   print Classe::$variavel_estatica;
?>

</body>
</html>

