<?php
  $foo = 'Bob';              // Atribui o valor 'Bob' a variável $foo
  $bar = &$foo;              // Referecia $foo através de $bar.
  $bar = "Meu nome é $bar";  // Altera $bar...
  echo $bar;
  echo $foo;                 // $foo é alterada também.
?>