<?php
$a = array("maçã", "banana");
$b = array(1 => "banana", "0" => "maçã");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>