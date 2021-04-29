<?php

   /* A partir do PHP 5 em diante a palavra static também pode ser utilizada para
    * definir um método como estatico. 
    */
   class Classe
   {
       static $variavel_estatica = 10;
   }
   print Classe::$variavel_estatica;
?>