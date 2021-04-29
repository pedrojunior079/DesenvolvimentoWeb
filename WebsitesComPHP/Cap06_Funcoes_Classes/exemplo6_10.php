<?php

   /* Funções recursivas
    * Chamamos de funções recursivas aquelas funções quem chamam a elas mesmas.
    */
   function teste($valor)
   {
       if($valor!=0)
       {
           echo "Foi chamada teste passando o valor $valor <br>";
           teste($valor-1);
       }
   }
   teste(25); 

?>