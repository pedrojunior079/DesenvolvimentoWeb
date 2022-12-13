<?php
$a = 1;
$b = NULL;
$c = imagecreate(5, 5);
var_dump($a instanceof stdClass); // inteiro
var_dump($b instanceof stdClass); // NULL
var_dump($c instanceof stdClass); // resource
var_dump(FALSE instanceof stdClaass);
?>