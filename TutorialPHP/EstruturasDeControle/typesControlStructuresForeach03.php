<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach($array as list($a, $b)){
    // $a contém o primeiro elemento da array aninhado,
    // e $b contém o segundo elemento.
    echo "<pre>";
    echo "A: $a; B: $b\n";
    echo "</pre>";
}
?>