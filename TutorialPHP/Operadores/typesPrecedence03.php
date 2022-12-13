<?php
$num_str="5";

$i1 = (int) isset($num_str) ? $num_str : 0;
$i2 = (int)(isset($num_str) ? $num_str : 0);
var_dump($i1);
var_dump($i2);
?>