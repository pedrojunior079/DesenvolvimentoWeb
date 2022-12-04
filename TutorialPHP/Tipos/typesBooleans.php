<?php
   

   $foo = True; // atribui o valor True para $foo   
   //== é um operador que testa 
   // igualdade e retorna um booleano
   if($action == "mostra_versao"){
      echo "A versão é 1.23";
   }

   // isto não é necessario...
   if($exibe_separadores == TRUE){
      echo "<hr>\n";
   }

   // ...porque voce pode simplesmente escrever isso:
   if($exibir_separadores){
      echo "<hr>\n";
   }

   var_dump((bool) "");        // bool(false)
   var_dump((bool) "0");       // bool(false)
   var_dump((bool) 1);         // bool(true)
   var_dump((bool) -2);        // bool(true)
   var_dump((bool) "foo");     // bool(true)
   var_dump((bool) 2.3e5);     // bool(true)
   var_dump((bool) array(12)); // bool(true)
   var_dump((bool) array());   // bool(false)
   var_dump((bool) "false");   // bool(true)

?>