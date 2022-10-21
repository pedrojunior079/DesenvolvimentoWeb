<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>exemplo6_10</title>
</head>
<body>
   
<?php

   /* Funções recursivas
    * Chamamos de funções recursivas aquelas funções quem chamam a elas mesmas.
    */
   function teste($valor)
   {
       if($valor!=0)
       {
           echo "<h3>Foi chamada teste passando o valor $valor </h3><br>";
           teste($valor-1);
       }
   }
   teste(25); 

?>







</body>
</html>





