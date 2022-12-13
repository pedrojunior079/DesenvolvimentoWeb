<?php
$a = array('one', 'two');
$b = array('three','four','five');

//not a union of arrays' values
echo "<pre>";
echo '$a + $b : ';
print_r($a + $b);
echo "<pre/>";

// a union of arrays' values
echo "array_unique(array_merge($a,$b)):";
print_r(array_unique(array_merge($a,$b)));
?>