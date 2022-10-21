<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>exemplo6_9</title>
</head>
<body>
   
<?php

   /* Há uma caracteristica do PHP que permite definição de valores padrão. Se uma função
    * possui determinado parametro e no momento da chamada esse parametro não é envidado,
    * podemos utilizar valores-padrão. Para definir esses valores, basta colcoar um operador
    * de atribuição após o parametro definido na função, seguindo pelo valor que deve ser
    * considerado o padrão.
    */
   function teste($framework, $titulo = "Ferramenta de programação")
   {
       echo "<h3>O $framework é uma $titulo </h3><br>";
   }
   teste("HTML" , "Criação de Websites");
   teste("CSS" , "Criação de Estilos para Websites");
   teste("AnagularJs");
   teste("NodeJs");
   teste("VueJs");
   teste("Laravel");

?>

</body>
</html>









