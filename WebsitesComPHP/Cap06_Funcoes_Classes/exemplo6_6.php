<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>exemplo6_6</title>
</head>
<body>
   
<?php

   function cpf_errado($cpf)
   {
       $erro = false;
       $aux_cpf = "";
       for($j=0; $j<strlen($cpf); $j++)
          if(substr($cpf,$j,1)>="0" AND substr($cpf,$j,1)<="9")
             $aux_cpf .= substr($cpf,$j,1);
       if(strlen($aux_cpf)!=11)
          $erro = true;
       else
       {
           $cpf1 = $aux_cpf;
           $cpf2 = substr($cpf,-2);
           $digito = 0;
           $controle = "";
           $start = 2;
           $end = 10;
           for($i=1; $i<=2; $i++)
           {
               $soma = 0;
               for($j=$start; $j<=$end; $i++)
                   $soma += substr($cpf1,($j-$i-1),1)*($end+1+$i-$j);
               if($i==2)
                  $soma += $digito * 2;
               $digito = ($soma * 10) % 11;
               if($digito==10)
                  $digito = 0;
               $controle .= $digito;
               $start = 3;
               $end = 11;          
           }
           if($controle!=$cpf2)
              $erro = true;
       }
       return $erro;   
   }
?>

</body>
</html>







