<?php
  //Usei echo "<pre></pre>"; para pre-formatar o texto na hora de visualizar no navegador
  error_reporting(E_ALL);
  ini_set('display_errors', true);
  ini_set('html_errors', false);
  // Arrays simples: 
  $array = array(1, 2);
  $count = count($array);
  for($i = 0; $i < $count; $i++){
    echo "<pre>";
    echo "\nVerificando $i: \n";
    echo "Ruim: " . $array['$i'] . "\n";
    echo "Bom:" . $array[$i] . "\n";
    echo "Ruim: {$array['$i']}\n";
    echo "Bom: {$array[$i]}\n";
    echo "</pre>";
  }
?>