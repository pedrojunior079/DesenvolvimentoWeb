<?php
  // Criando um array normal
  $array = array(1, 2, 3, 4, 5);
  print_r($array);

  // Agora apagando todos os itens, mas deixando o array intacto:
  foreach($array as $i => $value){
    unset($array[$i]);
  }
  print_r($array);

  // Acrescentando um item (note que a chave é 5, em vez de zero)
  $array[] = 6;   
  print_r($array);

  // Reindexando:
  $array = array_values($array);
  $array[] = 7;
  print_r($array);
?>