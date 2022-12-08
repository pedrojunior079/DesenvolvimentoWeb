<?php
function sum(int $a, int $b){
    return $a + $b;
}

var_dump(sum(1, 2));

// Estes serão convertidos em números inteiros: observe a saída abaixo!
var_dump(sum(1.5, 2.5));
?>