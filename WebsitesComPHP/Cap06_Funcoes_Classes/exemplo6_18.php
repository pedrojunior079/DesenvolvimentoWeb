<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_18</title>
</head>
<body>
 
<?php

   /* Além de um construtor, uma classe pode ter também um destrutor, que deve
    * ser nomeado como __destruct(). Um destrutor é o método que será chamado
    * após a última referencia a umm objeto no programa, antes da liberação 
    * da memória.
    */
   class MinhaClasse
   {
       function __construct()
       {
           $this->nome = "MinhaClasse";
           print "<h3>Este é o construtor da classe " . $this->nome. "<br></h3>";
       }
       function __destruct()
       {
           print "<h3>Este é o destrutor da classe </h3>" ; $this->nome;
       }
   }
   $obj = new MinhaClasse();
?>

</body>
</html>




