<?php
  // Limpa e remove referência (sem uso de contexto) a variável; imprime NULL
  var_dump($unset_var);

  // Uso de booleano; imprime 'false' (Veja sobre operadores ternário para saber mais sobre a sintaxe)
  echo ($unset_bool ? "true" : "false"); // false

  // Uso de string; imprime 'string(3) "abc"'
  $unset_str .= 'abc';
  var_dump($unset_str);

  // Uso de inteiro; imprime 'int(25)'
  $unset_int += 25; // 0 + 25 => 25
  var_dump($unset_int);

  // Uso de float; imprime 'float(1.25)'
  $unset_float += 1.25;
  var_dump($unset_float);

  // Uso de array; imprime array(1) {  [3]=>  string(3) "def" }
  $unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
  var_dump($unset_arr);

  // Uso de objeto; cria novo objeto stdClass (veja http://www.php.net/manual/en/reserved.classes.php)
  // Imprime: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
  $unset_obj->foo = 'bar';
  var_dump($unset_obj);
?>