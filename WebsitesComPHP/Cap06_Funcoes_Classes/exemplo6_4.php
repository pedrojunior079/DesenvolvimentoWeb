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
       echo "\$nomes[$i] vale $nomes[$i] <br>";
   }

?>