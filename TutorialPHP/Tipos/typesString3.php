<?php
  $suco = "maçã";
  echo "Ele bebeou um pouco de suco de $suco.".PHP_EOL;
  //Invalido. "s" é um caracter válido para um nome de variavel, 
  //mas a variavel é $suco.
  echo "Ele bebeu um suco feito de $sucos.";
  // Válido. Especificamente explicitamente o final do nome da variavel colocando-o 
  //entre colchetes:
  echo "Ele bebeu um pouco de suco feito de ${suco}s.";
?>