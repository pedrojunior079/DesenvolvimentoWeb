<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_3</title>
</head>
<body>
    
<?php

   function triplo($numero)
   {
       $x = $numero * 3;
       return $x;
   }
   $valor = 5;
   echo "<h3>O triplo de $valor é </h3>" . triplo($valor); 

?>

</body>
</html>






