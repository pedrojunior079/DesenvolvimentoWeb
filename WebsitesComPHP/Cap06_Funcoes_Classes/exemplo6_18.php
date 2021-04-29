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
           print "Este é o construtor da classe " . $this->nome. "<br>";
       }
       function __destruct()
       {
           print "Este é o destrutor da classe " ; $this->nome;
       }
   }
   $obj = new MinhaClasse();
?>