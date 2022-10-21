<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>exemplo6_8</title>
</head>
<body>
   
<?php

   /* Esse processo é chamado de passagem de parametros por referencia.
    * Esse tipo de passagem de parametro requer que seja colcoado o simbolo &
    * antes do nome da variavel.
    */
   function dobro($valor)
   {
       $valor = 2 * $valor;
   }
   function duplica(&$valor)
   {
       $valor = 2 * $valor;
   }
   $valor = 5;
   dobro($valor);
   echo $valor . "<br>";
   duplica($valor);
   echo $valor; 

?>

</body>
</html>









