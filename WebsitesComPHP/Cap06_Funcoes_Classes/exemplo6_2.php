<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_2</title>
</head>
<body>
    
<?php

   //Usando return em uma função 
   function maiusculo($string)
   {
       $string = strtoupper($string);
       $string = str_replace("á", "Á", $string);
       $string = str_replace("é", "É", $string);
       $string = str_replace("í", "Í", $string);
       $string = str_replace("ó", "Ó", $string);
       $string = str_replace("ú", "Ú", $string);
       $string = str_replace("â", "Â", $string);
       $string = str_replace("ê", "Ê", $string);
       $string = str_replace("ô", "Ô", $string);
       $string = str_replace("Î", "I", $string);
       $string = str_replace("O", "U", $string);
       $string = str_replace("ã", "Ã", $string);
       $string = str_replace("õ", "Õ", $string);
       $string = str_replace("ç", "Ç", $string);
       $string = str_replace("à", "A", $string);
       return $string;
   }
   $nome = "José Antônio";
   $nome_m = maiusculo($nome);
   echo "<h3>O nome do rapaz é $nome_m</h3>"; 

?>

</body>
</html>






