<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach($array as $x){
    echo "<pre>";
    [$a, $b] = $x;
    echo "A: $a; B: $b\n";
    echo "</pre>";
}
?>