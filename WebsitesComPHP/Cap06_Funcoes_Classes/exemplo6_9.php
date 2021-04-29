<?php

   /* Há uma caracteristica do PHP que permite definição de valores padrão. Se uma função
    * possui determinado parametro e no momento da chamada esse parametro não é envidado,
    * podemos utilizar valores-padrão. Para definir esses valores, basta colcoar um operador
    * de atribuição após o parametro definido na função, seguindo pelo valor que deve ser
    * considerado o padrão.
    */
   function teste($framework, $titulo = "Ferramenta de programação")
   {
       echo "O $framework é uma $titulo <br>";
   }
   teste("HTML" , "Criação de Websites");
   teste("CSS" , "Criação de Estilos para Websites");
   teste("AnagularJs");
   teste("NodeJs");
   teste("VueJs");
   teste("Laravel");

?>