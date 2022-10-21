<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_4</title>
</head>
<body>
    
<?php

   //Função que retorna um array contendo varios elementos.
   function tecnologias()
   {
       $tecnologias[] = "HTML";
       $tecnologias[] = "CSS";
       $tecnologias[] = "Javascript";
       $tecnologias[] = "VueJs";
       $tecnologias[] = "NodeJs";
       $tecnologias[] = "Laravel/PHP";
       $tecnologias[] = "AngularJs";
       $tecnologias[] = "Arduino";
       $tecnologias[] = "RaspberryPi";
       $tecnologias[] = "MySQL Banco de dados";
       $tecnologias[] = "PostgreSQL";
       $tecnologias[] = "MariaDB";
       $tecnologias[] = "Microsoft SQL Server";
       $tecnologias[] = "SQLite";
       $tecnologias[] = "Oracle Database";
       return $tecnologias;
   }
   //inicio do programa principal
   $nomes = tecnologias();
   for($i=0; $i<sizeof($nomes); $i++) 
   {
       echo "<h3>\$nomes[$i] vale $nomes[$i] </h3><br>";
   }

?>



</body>
</html>








