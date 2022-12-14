<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach($array as [$a, $b]){
    echo "<pre>";
    echo "A: $a; B: $b\n";
    echo "</pre>";
}
?>