<?php
   // Dadas essas variáveis...
   $nameTypes    = array("first", "last", "company");
   $name_first   = "Jonh";
   $name_last    = "Doe";
   $name_company = "PHP.net";

   // Então esse laço é...
   foreach($nameTypes as $types)
     print ${"name_$type"} . "\n";
     
   // ...equivalente a esta instrução de impressão.
   print "$name_first\n$name_last\n$name_company\n";   
?>
