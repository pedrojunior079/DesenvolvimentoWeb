<?php
$a = 3;
$b = &$a; // $b é uma referencia de $a

print "$a\n"; // imprime 3
print "$b\n"; // imprime 3

$a = 4; //modificando $a

print "$a\n"; // imprime 4
print "$b\n"; // imprime 4 também, pois $bv é uma referencia de $a, que foi modificada
?>
