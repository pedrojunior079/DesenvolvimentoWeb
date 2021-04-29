<?php

   /* Exemplo de função envolvendo a data atual. Para isso
    * utilizaremos as funções time e getdate do PHP.
    */
   function retorna_data()
   {
      $agora = time();
      $data = getdate($agora);
      if($data["wday"]==0) { echo "Domingo,"; }
      elseif($data["wday"]==1) { echo "Segunda-feira,"; }
      elseif($data["wday"]==2) { echo "Terça-feira,"; }
      elseif($data["wday"]==3) { echo "Quarta-feira,"; }
      elseif($data["wday"]==4) { echo "Quinta-feira,"; }
      elseif($data["wday"]==5) { echo "Sexta-feira,"; }
      elseif($data["wday"]==6) { echo "Sabado,"; }
      if($data["mon"]==1) { $mes="Janeiro"; }
      elseif($data["mon"]==2) { $mes="Fevereiro"; }
      if($data["mon"]==3) { $mes="Março"; }
      if($data["mon"]==4) { $mes="Abril"; }
      if($data["mon"]==5) { $mes="Maio"; }
      if($data["mon"]==6) { $mes="Junho"; }
      if($data["mon"]==7) { $mes="Julho"; }
      if($data["mon"]==8) { $mes="Agosto"; }
      if($data["mon"]==9) { $mes="Setembro"; }
      if($data["mon"]==10) { $mes="Outubro"; }
      if($data["mon"]==11) { $mes="Novembro"; }
      if($data["mon"]==12) { $mes="Dezembro"; }
      $data_atual = $data["mday"]. " de ".$mes. " de ".$data["year"];
      return $data_atual;   
   }
   $hoje = retorna_data();
   echo $hoje; 

?>