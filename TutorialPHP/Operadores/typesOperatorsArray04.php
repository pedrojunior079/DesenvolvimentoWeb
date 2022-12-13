<?php
$array1 = [
    0 => 'maça',
    1 => 'laranja',
    2 => 'pera',
];

$array2 = [
    0 => 'melao',
    1 => 'laranja',
    2 => 'banana',
];

$result = array_keys(
    array_flip($array1) + array_flip($array2)
    
);
var_dump($array1, $array2);