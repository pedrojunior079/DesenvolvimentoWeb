<?php

   /* Função recursiva para o calculo do fatorial de um numero n é calculado por meio de n
    * multiplicações, envolvendo o proprio número e os antecessores a ele. Por convenção, o fatorial * do número 0 vale 1. 
    */ 
   function fatorial($numero)
   {
       if($numero<0)
         { return -1; }
       if($numero<=1)
          { return 1; }
       return $numero*fatorial($numero-1);      
   }
   echo "O fatorial de 2 é " . fatorial(2);
   echo "<br>O fatorial de 3 é " . fatorial(3);
   echo "<br>O fatorial de 4 é " . fatorial(4); 
   echo "<br>O fatorial de 5 é " . fatorial(5);
   echo "<br>O fatorial de 6 é " . fatorial(6);
   echo "<br>O fatorial de 7 é " . fatorial(7);
   echo "<br>O fatorial de 8 é " . fatorial(8);
   echo "<br>O fatorial de 9 é " . fatorial(9);
   echo "<br>O fatorial de 10 é " . fatorial(10);
   
?>