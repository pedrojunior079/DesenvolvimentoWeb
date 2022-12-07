<?php
  // Criando um array normal
  $array = array(1, 2, 3, 4, 5);
  echo '<pre>';
  print_r($array);
  echo '</pre>';
  // Agora apagando todos os itens, mas deixando o array intacto:
  foreach($array as $i => $value){
    unset($array[$i]);
  }

  echo '<pre>';
  print_r($array);
  echo '</pre>';

  // Acrescentando um item (note que a chave é 5, em vez de zero)
  echo '<pre>';
  $array[] = 6; 
  print_r($array);
  echo '</pre>';

  // Reindexando:
  $array = array_values($array);
  $array[] = 7;
  echo '<pre>';
  print_r($array);
  echo '</pre>';
?>