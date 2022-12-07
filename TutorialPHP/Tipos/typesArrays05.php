<?php
  $array = array(
    1    => "a",
    "1"  => "b", // o valor "a" será sobrescrito por "b"
    1.5  => "c", // o valor "b" será sobrescrito por "c"
    -1 => "d",
    '01'  => 'e', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    '1.5' => 'f', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    true => 'g', // o valor "c" será sobrescrito por "g"
    false => 'h',
    '' => 'i',
    null => 'j', // o valor "i" será sobresrito por "j"
    'k',         // o valor "k" será sobrescrito na chave 2. isto porque é maior 
    // inteiro após a chave 1
    2 => 'l', // o valor 'k' será sobrescrito por "l" 
  );
  var_dump($array);
?>