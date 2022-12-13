<?php
$a = array("a" => 'A', "b" => 'B');
$b = array("a" => 'A', "b" => 'B', "c" => 'C');

$c = $a + $b or $b + a;
  
echo "<pre>";

print_r($c);

echo "<pre/>";
?>
